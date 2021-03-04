<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = '';
$auth_token = '';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "";

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

// print($result->status);
?>

<body>
  <h1>Status: <?php echo $result->status ?></h1>


</body>

<style>
    h1{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 370px;
        color: #fff;
        font-size: 3rem;
    }
    body{
        background-color: #808080;

    }



</style>