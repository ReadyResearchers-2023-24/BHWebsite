// Code that actually sends the form to my email
// PHP is a scripting language used mainly for server-side web development
// php is also used for creating dynamic web pages

<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
$subject = "New contact request: $_POST['subject']";
$message = $_POST['body'];
$headers = 'From: info@website.com' . "\r\n" .
           'Reply-To: ' . $_POST['email']. "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('rian.watson32@gmail.com', $subject, $message, $headers);

die('Thank you for your email');
}