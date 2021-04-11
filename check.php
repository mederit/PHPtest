<?php
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(trim($email) == "")
        $error = 'Введите ваш email';
    else if(trim($message) == "")
        $error = 'Введите ваше сообщение';
    else if(strlen($message) < 5)
        $error = 'Cooбщение должно быть более 5 символов';

    if($error != '') {
        echo $error;
        exit;
    }  
    
    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('admin@itproger.com', $subject, $message, $headers);

    header('Location: /about.php');
?>

