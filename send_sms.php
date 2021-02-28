<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACd54e055f4a58e09a35e1f78a2afd960d';
$auth_token = '277252e8bec9b020ff37ed5806de1dc6';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+17704645244";

$name = $_POST['name'];
$message = $_POST['message'];
$phone_number= $_POST['phone_number'];
$full_message = 'Hi '.$name.' . Your message is: '.$message;




$client = new Client($account_sid, $auth_token);

$result = $client->messages->create(
    // Where to send a text message (your cell phone?)
    $phone_number,
    array(
        'from' => $twilio_number,
        'body' => $full_message,
        "statusCallback" => "http://postb.in/1234abcd"
    )
);

echo '<h1>Message :</h1>' .$result->status;
// print($result->status);
