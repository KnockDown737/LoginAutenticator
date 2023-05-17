<?php 

require_once './enviaEmail.php';



session_start();
if (isset($_POST['login'])) {
  $tokenDigitado = $_POST['token'];
  if ($tokenDigitado == $_SESSION['token']) {
    header('Location: ./vitoria.php');
    exit();
  } else {
    header('Location: ./derrota.php');
    exit();
  }
}



?>