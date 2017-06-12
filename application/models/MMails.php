<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MMails extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    // Public method to send a email
    public function enviarMail($id_client, $username) {
        // Varios destinatarios
		//~ $para  = 'aidan@example.com' . ', '; // atención a la coma
		$para = $username;

		// título
		$título = 'Lubricar Delibery: Por favor confirme su correo';

		// mensaje
		$mensaje = '
		<html>
		<head>
		  <title>Por favor confirme su correo haciendo click en el siguiente enlace:</title>
		  <style>
			element.style {
				background-color: #f45c64;
				border: medium none;
				color: #ffffff;
				display: inline;
				font-family: "Helvetica",Arial,sans-serif;
				font-size: 16px;
				font-style: normal;
				font-weight: 500;
				line-height: 42px;
				text-decoration: none;
			}
		  </style>
		</head>
		<body>
		  <a href="'.base_url().'confirm_mail?id='.$id_client.'">¡Sí, valido mi correo!</a>
		</body>
		</html>
		';

		// Para enviar un correo HTML, debe establecerse la cabecera Content-type
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Cabeceras adicionales
		//~ $cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
		$cabeceras .= 'From: Validación <contacto@lubricardelivery.com>' . "\r\n";
		//~ $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
		//~ $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

		// Enviarlo
		mail($para, $título, $mensaje, $cabeceras);
	}
	
	// Public method to send a email of confirmation
    public function enviarMailConfirm($datos_reg) {
        // Varios destinatarios
		//~ $para  = 'aidan@example.com' . ', '; // atención a la coma
		$para .= 'solorzano202009@gmail.com';

		// título
		$título = 'Lubricar Delibery: Correo confirmado';

		// mensaje
		$mensaje = '
		<html>
		<head>
		  <title>Tu correo fue validado.</title>
		</head>
		<body>
			<p>Para sus registros, aquí hay una copia de la información que nos envió...</p>
			<ul>
				<li>Nombre: '.$datos_reg['name'].'</li>
				<li>Apellido: '.$datos_reg['lastname'].'</li>
				<li>Teléfono: '.$datos_reg['phone'].'</li>
				<li>Móvil: '.$datos_reg['cell_phone'].'</li>
				<li>Usuario (Correo): 
				<a href="'.$datos_reg['username'].'" target="_blank">'.$datos_reg['username'].'</a>
				</li>
			</ul>
		</body>
		</html>
		';

		// Para enviar un correo HTML, debe establecerse la cabecera Content-type
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Cabeceras adicionales
		//~ $cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
		$cabeceras .= 'From: Validación <contacto@lubricardelivery.com>' . "\r\n";
		//~ $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
		//~ $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

		// Enviarlo
		mail($para, $título, $mensaje, $cabeceras);
	}

}
?>
