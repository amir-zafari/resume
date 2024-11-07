<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token='1619165435:AAEQdC-DAWc08Fc4syS9TWEKIdiv3E-2fYk';
    $groupid =451837294;
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "13am13ir@gmail.com";
    $subject = "فرم تماس ارسال شده";
    $headers = "From: $email";

    $mailBody = "نام: $fullname\n\nایمیل: $email\n\nپیام: $message";

    mail($to, $subject, $mailBody, $headers);
    file_get_contents("https://api.telegram.org/bot".$token."/SendMessage?chat_id=".$groupid."&text=".urlencode($mailBody));

$redirect_url = "https://webello.zlc.ir/amir-zafari";
header("Location: " . $redirect_url);
exit; 

}
?>