<?php
    $para = "wagnergeroldi@gmail.com";
    $name = $_POST['name'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $mensagem = "name: $name<br>";
    $mensagem .= "city: $city<br>";
    $mensagem .= "date: $date<br>";
    $mensagem .= "email: $email<br>";
	$mensagem .= "message: $message<br>";
    $headers = 'From: '.$email."\r\n". 'Reply-To: '.$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($para, $name, $menssagem, $headers)){
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else{
        echo "Aconteceu um erro, tente novamente mais tarde.";
    }
?>