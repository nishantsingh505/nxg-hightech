<?php
/**
 * NXG Hightech - Form & Email Handler
 * Optimized for Hostinger Web Hosting (PHP 8.x + sendmail/mail())
 */

require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Basic anti-spam check (honeypot field)
if (!empty($_POST['website_url_check'])) {
    // Bot detected
    echo json_encode(['success' => true, 'message' => 'Submission processed.']);
    exit;
}

$formType = cleanInput($_POST['form_type'] ?? 'general_inquiry');
$name = cleanInput($_POST['name'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone = cleanInput($_POST['phone'] ?? '');
$company = cleanInput($_POST['company'] ?? '');
$solution = cleanInput($_POST['solution'] ?? $_POST['eventTrack'] ?? '');
$notes = cleanInput($_POST['notes'] ?? $_POST['message'] ?? '');
$city = cleanInput($_POST['city'] ?? '');
$designation = cleanInput($_POST['designation'] ?? '');
$attendanceMode = cleanInput($_POST['attendanceMode'] ?? '');

// Validation
if (empty($name) || !$email || empty($phone)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields (Name, valid Email, and Phone).']);
    exit;
}

// Prepare Email content
$to = CONTACT_EMAIL_INFO;
$subject = "[NXG Hightech Lead] ";

switch ($formType) {
    case 'event_registration':
        $subject .= "New Event Registration: " . ($solution ?: 'Tech Forum');
        break;
    case 'expert_consultation':
        $subject .= "Expert Consultation Request from " . $name;
        break;
    default:
        $subject .= "New Inquiry from " . $name;
        break;
}

$body = "New submission received on " . date('Y-m-d H:i:s') . "\n";
$body .= "--------------------------------------------------------\n";
$body .= "Form Type: " . ucfirst(str_replace('_', ' ', $formType)) . "\n";
$body .= "Full Name: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Phone: " . $phone . "\n";

if (!empty($company)) {
    $body .= "Company / Organization: " . $company . "\n";
}
if (!empty($designation)) {
    $body .= "Designation / Role: " . $designation . "\n";
}
if (!empty($city)) {
    $body .= "Location / City: " . $city . "\n";
}
if (!empty($solution)) {
    $body .= "Solution / Event Track: " . $solution . "\n";
}
if (!empty($attendanceMode)) {
    $body .= "Attendance Mode: " . $attendanceMode . "\n";
}
if (!empty($notes)) {
    $body .= "Message / Notes:\n" . $notes . "\n";
}

$body .= "--------------------------------------------------------\n";
$body .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
$body .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n";

// Headers
$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/plain; charset=UTF-8';
$headers[] = 'From: NXG Web Portal <' . CONTACT_EMAIL_INFO . '>';
$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

// Attempt to send email using PHP mail()
$mailSent = false;
try {
    $mailSent = @mail($to, $subject, $body, implode("\r\n", $headers));
} catch (\Throwable $e) {
    $mailSent = false;
}

// Fallback backup: append lead to a protected CSV log file so inquiries are never lost
$logDir = __DIR__ . '/../data';
if (!is_dir($logDir)) {
    @mkdir($logDir, 0755, true);
    // Protect data folder with .htaccess
    @file_put_contents($logDir . '/.htaccess', "Deny from all\n");
}

$logFile = $logDir . '/leads.csv';
$isNewFile = !file_exists($logFile);
if ($fp = @fopen($logFile, 'a')) {
    if ($isNewFile) {
        fputcsv($fp, ['Timestamp', 'Form Type', 'Name', 'Email', 'Phone', 'Company', 'Designation', 'City', 'Solution/Track', 'Notes']);
    }
    fputcsv($fp, [
        date('Y-m-d H:i:s'),
        $formType,
        $name,
        $email,
        $phone,
        $company,
        $designation,
        $city,
        $solution,
        $notes
    ]);
    fclose($fp);
}

// Return success response
echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your submission has been received. Our team will contact you shortly.',
    'mail_sent' => $mailSent
]);
exit;
