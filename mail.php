<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];

require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "viktordudash36@gmail.com";
$mail->Password = "dudash2036";

$mail->setFrom('viktordudash36@gmail.com', 'Victor Dudash'); // от кого будет уходить письмо?
$mail->addAddress('victordudash@yandex.ua', '');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Active Money';
$body = 'Пользователь: ' .$name. '<br>Номер телефона: ' .$phone;
$mail->msgHTML($body);

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thanks.html');
}
?>