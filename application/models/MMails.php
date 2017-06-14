<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MMails extends CI_Model {

	//configuración para gmail
	private $configGmail = array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.gmail.com',
		'smtp_port' => 465,
		'smtp_user' => 'solorzano202009@gmail.com',
		'smtp_pass' => '76839981js',
		'mailtype' => 'html',
		'crlf' => "\r\n",
		'charset' => 'utf-8',
		'newline' => "\r\n"
	);
	
	//configuracion para yahoo
	private $configYahoo = array(
		'protocol' => 'smtp',
		'smtp_host' => 'smtp.mail.yahoo.com',
		'smtp_port' => 587,
		'smtp_crypto' => 'tls',
		'smtp_user' => 'emaildeyahoo',
		'smtp_pass' => 'password',
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'newline' => "\r\n"
	);
	
	//configuracion para mailtrap
	private $config = Array(
	  'protocol' => 'smtp',
	  'smtp_host' => 'smtp.mailtrap.io',
	  'smtp_port' => 2525,
	  'smtp_user' => '7070f0ddfd21e6',
	  'smtp_pass' => '0d07237bfd1f66',
	  'mailtype' => 'html',
	  'crlf' => "\r\n",
	  'newline' => "\r\n"
	);
		
    public function __construct() {
       
        parent::__construct();
        $this->load->database();
        
        //cargamos la librería email de ci
		$this->load->library("email");
		
    }

    // Public method to send a email
    public function enviarMail($id_client, $username) {
        // Varios destinatarios
		//~ $para = 'jasolorzano18@hotmail.com' . ', '; // atención a la coma
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
		
		//cargamos la configuración para enviar con mailtrap (config), gamil (configGmail) o yahoo (configYahoo)
		$this->email->initialize($this->config);

		$this->email->from('contacto@lubricardelivery.com');
		$this->email->to($para);
		$this->email->subject($título);
		$this->email->message($mensaje);
		$this->email->send();
		// con esto podemos ver el resultado
		//~ var_dump($this->email->print_debugger());
	}
	
	// Public method to send a email of confirmation
    public function enviarMailConfirm($datos_reg) {
        // Varios destinatarios
		//~ $para = 'aidan@example.com' . ', '; // atención a la coma
		$para = $datos_reg['username'];

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

		//cargamos la configuración para enviar con mailtrap (config), gamil (configGmail) o yahoo (configYahoo)
		$this->email->initialize($this->config);

		$this->email->from('contacto@lubricardelivery.com');
		$this->email->to($para);
		$this->email->subject($título);
		$this->email->message($mensaje);
		$this->email->send();
		// con esto podemos ver el resultado
		//~ var_dump($this->email->print_debugger());
	}

}
?>
