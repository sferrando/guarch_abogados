<?php
  $mensaje="Contacto desde la web GuarchAbogados.com";
  $mensaje.= "\nNombre: ". $_POST['name'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telephone'];
  $mensaje.= "\nMensaje: \n".$_POST['message'];
  $destino= "alberto@guarchabogados.com";
  $info= "info@guarchabogados.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['name'];
  mail(utf8_decode($destino),utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");
  mail(utf8_decode($info),utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");
?>