<?php
// Simple contact form handler using native PHP mail() (no SMTP library).
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php?status=invalid_method');
    exit;
}

$toEmail = 'info@fastmindsit.com';
$fromEmail = 'no-reply@fastmindsit.com';

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$company = trim($_POST['company'] ?? '');
$inquiry = trim($_POST['inquiry'] ?? '');
$message = trim($_POST['message'] ?? '');

// Honeypot field to reduce spam bots.
$website = trim($_POST['website'] ?? '');
if ($website !== '') {
    header('Location: contact.php?status=spam');
    exit;
}

if ($name === '' || $email === '' || $message === '') {
    header('Location: contact.php?status=missing');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.php?status=invalid_email');
    exit;
}

// Prevent header injection in name/email.
$nameSafe = str_replace(["\r", "\n"], ' ', $name);
$emailSafe = str_replace(["\r", "\n"], '', $email);
$companySafe = str_replace(["\r", "\n"], ' ', $company);
$inquirySafe = str_replace(["\r", "\n"], ' ', $inquiry);

$subject = 'New Website Inquiry - FASTMINDS';

$body = "You received a new inquiry from fastmindsit.com\n\n";
$body .= "Name: {$nameSafe}\n";
$body .= "Email: {$emailSafe}\n";
$body .= "Company: " . ($companySafe !== '' ? $companySafe : 'N/A') . "\n";
$body .= "Inquiry Type: " . ($inquirySafe !== '' ? $inquirySafe : 'N/A') . "\n\n";
$body .= "Message:\n{$message}\n\n";
$body .= "---\n";
$body .= 'Submitted at: ' . date('Y-m-d H:i:s') . "\n";
$body .= 'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'From: FASTMINDS Website <' . $fromEmail . '>';
$headers[] = 'Reply-To: ' . $nameSafe . ' <' . $emailSafe . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

$sent = mail($toEmail, $subject, $body, implode("\r\n", $headers));

if ($sent) {
    header('Location: contact.php?status=sent');
    exit;
}

header('Location: contact.php?status=error');
exit;
