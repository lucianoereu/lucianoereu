<?php
/* variables */
$destinatario = 'luciano.ereu@gmail.com';
$email = $_POST¨['mail'];
$mensaje = $_POST['mensaje'];
/* mensaje */

$header = "enviado desde pagina personal";
$mensajeCompleto = $mensaje . "\nenviado por: " . $email;

/* funcion */
mail($destinatario, $header, $mensaje, $email);

/* scrip */
echo "<script> alert ('correo enviado! gracias ya mismo te respondo')</script>";
echo "<script> setTimeout (\"location.href='photos.html'\",1000)</script>";

?>