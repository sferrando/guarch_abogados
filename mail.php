<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<?php
  $mensaje="Contacto desde la web GuarchAbogados.com";
  $mensaje.= "\nNombre: ". $_POST['name'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telephone'];
  $mensaje.= "\nMensaje: \n".$_POST['message'];
  $destino= "alberto@guarchabogados.com";
  $info= "info@guarchabogados.com";
  $remitente = $_POST['email'];
  $asunto = "GA[".$_POST['name']."]".$_POST['asunto'];
  mail(utf8_decode($destino),utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");
  mail(utf8_decode($info),utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");

// MAIL DE CONFIRMACION A USUARIO

  $mail_de_confirmacion = '
    <head>
      <meta charset="UTF-8">
      <meta name="robots" content="noindex">
      <meta name="googlebot" content="noindex">
    </head>
    <div style="font-size: 14px; font-family: verdana; background-color: #c0d4e0; width: 100%; height: 400px; padding: 3em;"><img id="spin_to_win" src="http://guarchabogados.com/images/marca.png" alt="Guarch Abogados" style="display: block; margin: auto; margin-bottom: 20px;" />
      <div style="width: 600px; background-color: #fff; border-radius: 10px; padding: 2em; display: block; margin: auto;text-align: center;">
        <h4>Gracias por contactar con nosotros!</h4>
        <p>Intentaremos atender y resolver su consulta con la mayor brevedad posible.</p>
        <p>Att. Guarch Abogados</p>
        <hr>
        <p> Calle Garrigues nº17
          <br/> 1er Piso, 2ª Puerta
          <br>46001,Valencia,España
          <br>+34 961 047 508
        </p>
      </div>
    </div>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'To: '.$_POST['name'].'<'.$_POST['email'].'>' . "\r\n";
$headers .= 'From: Guarch Abogados <contacto@guarchabogados.com>' . "\r\n";
mail(utf8_decode($destino),utf8_decode($_POST['email']),utf8_decode($mail_de_confirmacion), $headers);
?>