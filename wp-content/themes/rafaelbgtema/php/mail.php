<?php 

require_once("../../../../wp-load.php");

  $nombre = $_POST['nombre'];
  $correoelectronico = $_POST['correoelectronico'];
  $telefono = $_POST['telefono'];
  $mensaje = nl2br($_POST['mensaje']);

  $to = 'enocyaotl@gmail.com';
  $subject ='Correo electrónico de tu CV D:';

  $messagewp ='';
  
    $messagewp .="<b>Nombre: </b>".$nombre."<br><br>";
    $messagewp .="<b>Correo electrónico: </b>".$correoelectronico."<br><br>";
    $messagewp .="<b>Telefono: </b>".$telefono."<br><br>";
    $messagewp .="<b>Mensaje: </b>".$mensaje."<br><br>";

  $headers = array('Content-Type: text/html; charset=UTF-8');

  wp_mail( $to, $subject, $messagewp, $headers);


?>