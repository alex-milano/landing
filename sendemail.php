<?php
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

	echo $nombre. "ha dicho <br/>".$empresa;
	if(mail('amilano@coarts.com.ar', $empresa, $email, $telefono)){
		echo "mail enviado";
	} else {
		echo "uyuyuyuyuy";
	}
 ?>