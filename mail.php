<?php
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$headers .= "From: Tectro <ventas@tectro.com.mx>\r\n";
	$nombre=$_POST['name'];
	$email=$_POST['email'];
	$telefono=$_POST['phone'];
	$mensaje=$_POST['message'];
	
	// $nombre="Nombre de prueba";
	// $email="mail@mail.com";
	// $telefono="2222222222";
	// $mensaje="Mensaje de prueba";
	$asunto="Contacto web";

	$cuerpo=" 
			<html> 
			<head>
				<meta charset='UTF-8'> 
			    <title>Un prospecto ha enviado un correo de contacto.</title> 
			</head> 
			<body> 
				<h4>Nombre: </h4>".$nombre."
				<h4>Correo: </h4>".$email."
				<h4>Telefono: </h4>".$telefono."
				<h4>Mensaje: </h4>".$mensaje."
			</body> 
			</html> 
			";

	if(mail("ventas@tectro.com.mx", $asunto, $cuerpo, $headers)){
		echo 1;
	}
	else{
		echo 0;
	}