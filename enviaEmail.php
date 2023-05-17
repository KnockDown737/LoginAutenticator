<?php
require_once './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once './/vendor/phpmailer/phpmailer/src/SMTP.php';
require_once './index.php';
require_once './config.php';


// $email = $_POST['email'];
// $senha = $_POST['senha'];


use PHPMailer\PHPMailer\PHPMailer;





if(isset($_POST['login'])) { //verifica se o botão de login foi pressionado
$email = $_POST['email'];
$senha = $_POST['senha'];

if(!empty($email) && !empty($senha)) {

session_start();
$_SESSION['token'] = $token = bin2hex(random_bytes(3)); // altere o número de bytes para ajustar o tamanho do token

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Charset = 'UTF-8';
$mail->Port = 2525;
$mail->Username = '54860cee350fa2';
$mail->Password = '9ad7e35123721d';

$mail->setFrom(EMAIL_REMETENTE);
$mail->addAddress($_POST['email'], 'CARA TESTE');
$mail->Subject = addslashes('Formulário de Contato');
$mail->Body = 'Este é o seu token de validação de 2 fatores: ' . $token;

// envia o email
if ($mail->send()) {
  header('Location: ./token.php');
  exit();
} else {
  echo 'Erro ao enviar o email: ' . $mail->ErrorInfo;
}

}
}
?>



