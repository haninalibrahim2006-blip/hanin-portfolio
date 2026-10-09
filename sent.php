<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$website = trim($_POST['website'] ?? '');

/* Simple spam protection */
if ($website !== '') {
    header('Location: contact.php');
    exit;
}

/* Validate the submitted fields */
if (
    $name === '' ||
    strlen($name) > 100 ||
    $message === '' ||
    strlen($message) > 5000 ||
    strlen($email) > 254 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    header('Location: contact.php?error=invalid');
    exit;
}

/* Your destination email address */
$recipient = 'hanin.alibrahim.2006@gmail.com';

$cleanName = preg_replace('/[\r\n]+/', ' ', $name);
$subject = 'Portfolio message from ' . $cleanName;

$body = "You received a new message from your portfolio website.\n\n";
$body .= "Name: " . $name . "\n";
$body .= "Email: " . $email . "\n\n";
$body .= "Message:\n" . $message . "\n";

$host = preg_replace('/[^a-z0-9.-]/i', '', $_SERVER['HTTP_HOST'] ?? '');
if (!$host || strpos($host, '.') === false) {
    $host = 'localhost';
}

$headers = "From: Portfolio Website <no-reply@" . $host . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($recipient, $subject, $body, $headers)) {
    header('Location: contact.php?sent=1');
    exit;
}

header('Location: contact.php?sent=0');
exit;
?>