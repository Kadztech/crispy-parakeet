<?php 

require 'vendor/autoload.php';

$email = new \SendGrid\Mail\Mail();
$email->setFrom("software@kadztech.com", "Chomba Chanda");
$email->setSubject("Sending with Twilio SendGrid is Fun");
$email->addTo("dev.chomba@gmail.com", "Chomba Chanda");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
// $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
$sendgrid = new \SendGrid("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");
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}