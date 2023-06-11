<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ramgiu | Consulta enviada</title>
	<link rel="stylesheet" text="text/css" href="css/estilos.css">
	<link rel="stylesheet" text="text/css" href="css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<?php include "conectar.php"
	?>

	<header id="cabecera">
			<div id="logo">
				<a href="index.html"><img src="img/logo.png" alt="logo" class="logo_estudio animated tada"></a>
			</div>
			<nav id="navegador">
				<ul>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="quienes_somos.html">Acerca de mí</a></li>
					<li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>
		</header>
		<section id="primera_division_contacto">
			<div id="contenedor_php">
				<div id="arriba">
						<h1 class="titulo_principal animated jello infinite">- Contactanos -</h1>
					</div>
					<?php

		$nombre=$_POST['nombre'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];
		$mensaje=$_POST['mensaje'];
		$salto="\r\n";

		$destino1= $email;
		$asunto1= "Respuesta a su consulta vía web";
		$mensaje1= "Estimado ".$nombre." esta es una respuesta automática a la consulta que ud. realizara en nuestra página web, a la brevedad será analizada y nos pondremos en contacto.";
		$remite1= "From: Ramgiu <rami_200_2@hotmail.com>";

		mail ($destino1, $asunto1, $mensaje1, $remite1);

		$destino2= "rami_200_2@hotmail.com";
		$asunto2= $nombre.", te ha enviado un mensaje.";
		$mensaje2= "Nombre: ".$nombre.$salto."Email: ".$email.$salto."Teléfono: ".$telefono.$salto."Mensaje: ".$mensaje;
		$remite2= "From: $nombre <$email>";

		mail ($destino2, $asunto2, $mensaje2, $remite2);

		$result = mysql_query("INSERT INTO usuarios (Nombre, Email, Telefono, Mensaje) VALUES ('$nombre', '$email', '$telefono', '$mensaje')",$conexion); 

		echo "<p class='gracias'>¡Gracias! <br> Hemos recibido tus datos.</p>";
	?>

			</div>
		</section>
		<footer id="pie">
			<div class="elementos_footer">
			<p class="ramgiu_footer">Todos los derechos reservados - Ramgiu&copy</p>
			<a href="#"><img src="img/facebook.png" alt="facebook" class="redes_sociales"></a>
			<a href="#"><img src="img/twitter.png" alt="facebook" class="redes_sociales"></a>
			<a href="#"><img src="img/pinterest.png" alt="facebook" class="redes_sociales"></a>
			<a href="#"><img src="img/vimeo.png" alt="facebook" class="redes_sociales"></a>
			</div>
		</footer>
</body>
</html>