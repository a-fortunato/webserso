<?php
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$header = 'De: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 con dni " . $dni . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'nikepasa@gmail.com';
$asunto = 'Asunto del mail recibido';



if (mail($para, $asunto,$mensaje, $header))

echo 'Mensaje enviado correctamente';

else

echo 'Error en el envio';
?>
<?php
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$header = 'De: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 con dni " . $dni . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = $email;
$asunto = 'Asunto del mail recibido';



if (mail($para, $asunto,$mensaje, $header))

echo 'Mensaje enviado correctamente';

else

echo 'Error en el envio';
?>
</h2> 
<h2 align="center">Gracias!</h2> 

<p align="center">Tu mensaje ha sido enviado correctamente, pronto nos pondremos en contacto con usted.</p> 
<p align="center"> </p> 
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p> 

<p align="center">Si no es correcto, 

<script type='text/javascript'> 

document.write('<a href="javascript:history.go(-1);">vuelve atras</a>'); 

</script> 

<noscript>vuelve atras</noscript> y envialo de nuevo</p> 

<script type='text/javascript'> 

document.write('<p class="details"><a href="javascript:history.go(-2);">Volver a la página de inicio.</a></p>'); 

</script> 

<script type='text/javascript'> 

setTimeout('history.go(-2)', 9000); 

</script> 

<noscript> 

<p align="center" class="details">Pulsa el boton "atras" en tu navegador para volver a la página anterior.</p> 

</noscript> 
