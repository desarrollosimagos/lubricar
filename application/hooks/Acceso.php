<?php
class Acceso
{
	private $CI;
	public function __construct()
	{
		$this->CI =& get_instance();
		!$this->CI->load->library('session') ? $this->CI->load->library('session') : false;
		!$this->CI->load->library('form_validation') ? $this->CI->load->library('form_validation') : false;
		!$this->CI->load->helper('url') ? $this->CI->load->helper('url') : false;
	}	

	public function identificado()
	{
		$controllersprivados = array('clogin', 'home');
		
		//~ echo "Controlador: ".$this->CI->router->class;
		//~ exit();
		
		if($this->CI->session->userdata('logged_in') == true && $this->CI->router->method == 'login') redirect('home');
		
		if($this->CI->session->userdata('logged_in') != true && $this->CI->router->method != 'login' && in_array($this->CI->router->class, $controllersprivados)) redirect('login');
	}
}
/*
/end hooks/home.php
*/
