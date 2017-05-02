<?php
class Acceso
{
	private $CI;
	
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	function identificado()
	{
		$this->CI =&get_instance();
		//~ $controllersprivados = array('Clogin', 'Home');
		$controllersprivados = array('Home');
		
		//~ print_r($controllersprivados);
		
		//~ echo "Controlador: ".$this->CI->router->class;
		//~ echo "Método: ".$this->CI->router->method;
		//~ exit();
		
		//~ echo "Sesión: ";
		//~ echo $this->CI->session->userdata('logged_in');
		//~ print_r($this->CI->session->userdata());
		
		if(isset($this->CI->session->userdata['logged_in']) && ($this->CI->router->method == 'login' || $this->CI->router->method == 'admin')){
			redirect('home');
		}
		
		if(!isset($this->CI->session->userdata['logged_in']) && $this->CI->router->method != 'login' && in_array($this->CI->router->class, $controllersprivados)){
			redirect('login');
		}
		
	}
}
/*
/end hooks/home.php
*/
