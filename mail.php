<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$f_from = $_POST['form_from'];
$f_m = $_POST['form_m'];
$f_v = $_POST['form_v'];
$f_p = $_POST['form_p'];
$f_name = $_POST['form_name'];
$f_tel = $_POST['form_tel'];
$f_to = $_POST['form_to'];
$f_box = $_POST['form_box'];
$f_cap = $_POST['form_cap'];
$f_one = $_POST['form_one'];
$f_ready = $_POST['form_ready'];
$f_company = $_POST['form_company'];
$f_email = $_POST['form_email'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = ''; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = ''; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom(''); // от кого будет уходить письмо?
//$mail->addAddress('');     // Кому будет уходить письмо
$mail->addAddress('');
$mail->addAddress('');
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта';

$mail->Body = 'Человек оставил заявку, его телефон: ' .$f_tel.
', ФИО: ' .$f_name. ', Компания: ' .$f_company. ', Адрес электронной почты: ' .$f_email.
', везти нужно в/во ' .$f_to. ' из ' .$f_from. ', общий вес, кг: ' .$f_m.
', общий объём, м3: ' .$f_v. ', габариты одного места (ДхШхВ), м: ' .$f_p.
', тара(упаковка): ' .$f_box. ', количество, шт: ' .$f_cap.
', вес одного места, кг: ' .$f_one. ', дата готовности: ' .$f_ready.
'';

$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    //!
	//header('location: index.html');
	echo 'Super';
}
?>
