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
  //mail(utf8_decode($destino),utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");
  //mail(utf8_decode($info),utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");


  $mail_de_confirmacion = '
    <head>
      <meta charset="UTF-8">
      <meta name="robots" content="noindex">
      <meta name="googlebot" content="noindex">
    </head>
    <div style="font-size: 14px; font-family: verdana; background-color: #c0d4e0; width: 100%; height: 800px; padding: 3em;"><img id="spin_to_win" src="http://guarchabogados.com/images/marca.png" alt="Guarch Abogados" style="display: block; margin: auto; margin-bottom: 20px;" />
      <div style="width: 600px; background-color: #fff; border-radius: 10px; padding: 2em; display: block; margin: auto;">
      <h3>Gracias por su confianza</h3>
      <p>Guarch Abogados les da la bienvenida a su página Web. Le ofrecemos nuestros servicios para resolver cualquier problema legal que nos quiera plantear. Somos un despacho multidisciplinar con amplia experiencia en la reclamación de lesiones y daños derivados de accidentes de tráfico. Atenderemos y resolveremos de la misma manera cualquier duda que nos plantee en el ámbito del Derecho de Familia, Penal, Inmobiliario, Laboral y Administrativo. Por último, le ofrecemos la posibilidad de la mediación como un medio de resolución del conflicto diferente y alejado de la vía judicial. Darles nuestro agradecimiento por haber accedido a nuestra web y conocernos. Esperamos poder contar en breve con su confianza.</p>

      <p> Por ultimo nos gustaria pedirle si podria compartir su experiencia con nosotros con una pequenna reseña en Google, rellearla es muy simple y lo podra hacer desde aqui: </p>
      <p style="text-align: center;">
        <a href="https://goo.gl/BQauxM" style="background-color: #c0d4e0;  display: inline-block; padding: 15px 32px; margin-bottom: 0; font-size: 18px; font-weight: 800;  text-align: center;  cursor: pointer; text-decoration: none; border: 1px solid transparent; border-radius: 4px; color: black;">
          Rellenar Reseña</a>
      </p>
      <p>Saludos!</p>
      <strong>Att. Alberto Guarch Brisa</strong>
      </div>
    </div>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'To: '.$_POST['name'] '<'.$_POST['email'].'>' . "\r\n";
$headers .= 'From: Guarch Abogados <contacto@guarchabogados.com>' . "\r\n";
mail(utf8_decode($info),utf8_decode($asunto),utf8_decode($mail_de_confirmacion), $headers);
?>