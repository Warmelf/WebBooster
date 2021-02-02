<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    $mail->setFrom('example@mail.ru', 'Sb');
    $mail->addAddress('warmelf17@gmail.com');
    $mail->Subject = 'Привет! Отправляю данные формы';

    $body = '<h1>Данные о заказе</h1>';

    if(trim(!empty($_POST['customer_name']))) {
        $body.='<p><strong>Имя:</strong> '.$_POST['customer_name'].'</p>';
    }
    if(trim(!empty($_POST['email']))) {
        $body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['phone']))) {
        $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
    }
    if(trim(!empty($_POST['product_name']))) {
        $body.='<p><strong>Название товара:</strong> '.$_POST['product_name'].'</p>';
    }

    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>