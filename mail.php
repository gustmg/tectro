<?php
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$asunto=$_POST['asunto'];
	$mensaje=$_POST['mensaje'];

	$cuerpo=" 
			<html> 
			<head> 
			   <title>Un prospecto ha enviado un correo de contacto.</title> 
			</head> 
			<body> 
				<h4>Nombre: </h4>".$nombre."
				<h4>Correo: </h4>".$email."
				<h4>Asunto: </h4>".$asunto."
				<h4>Mensaje: </h4>".$mensaje."
			</body> 
			</html> 
			";

	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$headers .= "From: Tectro <ventas@tectro.com.mx>\r\n";

	if(mail("tectrotecnologico@gmail.com", $asunto, $cuerpo, $headers)){
		echo 1;
	}
	else{
		echo 0;
	}