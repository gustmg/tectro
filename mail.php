<?php
	$nombre=$_POST['name'];
	$email=$_POST['email'];
	$telefono=$_POST['phone'];
	$mensaje=$_POST['message'];
	$asunto='Contacto a través de página web';

	$cuerpo=" 
			<html> 
			<head> 
			   <title>Un prospecto ha enviado un correo de contacto.</title> 
			</head> 
			<body> 
				<h4>Nombre: </h4>".$nombre."
				<h4>Correo: </h4>".$email."
				<h4>Teléfono: </h4>".$telefono."
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