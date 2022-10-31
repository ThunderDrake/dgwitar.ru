<?php
require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
if(isset($_POST['type']) && !empty($_POST['type'])){ $type = "Тип заявки: ".$_POST['type']."<br>";}else{$type = '';};
if(isset($_POST['name']) && !empty($_POST['name'])){ $name = "Имя: ".$_POST['name']."<br>";}else{$name = '';};
if(isset($_POST['phone']) && !empty($_POST['phone'])){ $phone = "Телефон: ".str_replace(' ', '', $_POST['phone'])."<br>";}else{$phone = '';};
if(isset($_POST['email']) && !empty($_POST['email'])){ $email = "Email: ".$_POST['email']."<br>";}else{$email = '';};
if(isset($_POST['messenger']) && !empty($_POST['messenger'])){ $messenger = "Мессенджер: ".$_POST['messenger']."<br>";}else{$messenger = '';};
if(isset($_POST['interes']) && !empty($_POST['interes'])){ $interes = "Интересует: ".$_POST['interes']."<br>";}else{$interes = '';};
if(isset($_POST['course']) && !empty($_POST['course'])){ $course = "Курс: ".$_POST['course']."<br>";}else{$course = '';};
$url = $_SERVER['HTTP_HOST'];
$mail->isSMTP();
$mail->Host = 'mail.hosting.reg.ru';
$mail->SMTPAuth = true;
$mail->Username = 'noreply@dgwitar.ru';
$mail->Password = 'SPBc2h9aTbp1mgR9';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('noreply@dgwitar.ru');
$mail->addAddress('witaravi@yandex.ru');
$mail->addAddress('dgwitar@yandex.ru');
$mail->isHTML(true);
$mail->Subject = 'Новое сообщение!';
$mail->Body    = ''.$type.$name.$phone.$email.$messenger.$insteres.$course.'Сайт: '.$url;
$mail->AltBody = '';
$mail->send();