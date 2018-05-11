<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $mark = $_POST['mark'];
    $amount = $_POST['amount'];
    $adds = $_POST['adds'];

    //$to      = 'oleggalyanovskij@gmail.com';
    $to      = 'bis-idea2015@yandex.ru';
    $subject = 'Beton';
    $message = 'Имя : '.$name."\r\n".'Телефон : '.$phone."\r\n".'Email : '.$email."\r\n".'Марка : '.$mark."\r\n".'Количество м3 : '.$amount."\r\n".'Адрес доставки : '.$adds."\r\n";
    $headers = 'From: '.'order-big@beton.com'.'' . "\r\n" .
        'Reply-To: '.$email.'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    
    echo json_encode(array('success'=>true));

?>