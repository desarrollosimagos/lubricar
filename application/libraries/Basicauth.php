<?php

Class Basicauth
{
	function __construct()
	{
		$this->CI = & get_instance();
	}
	
	function login($usuario, $password)
	{
		$data = array();
		$query = $this->CI->db->get_where('users', array('username'=>$usuario, 'password'=>$password));
		
		if($query->num_rows() > 0){
			$query = $this->CI->db->get_where('users', array('username'=>$usuario, 'password'=>$password, 'status'=>1));
			if($query->num_rows() > 0){
				//~ $this->CI->session->sess_destroy(); // Método contraproducente ya que borra las sesiones iniciadas
				//~ $this->CI->session->sess_create();  // Método obsoleto
				
				// Creamos la sesión y le cargamos los datos de usuario
				$session_data = array(
					'username' => $usuario,
					'id' => $query->row()->id
				);
				$this->CI->session->set_userdata('logged_in',$session_data);
				
				//~ print_r($this->CI->session->userdata());
			}else{
				$data['error'] = 'Disculpe, el usuario no tiene acceso, consulte con el administrador del sistema';
			}
		}else{
			$data['error'] = 'Usuario o contraseña incorrectos';
		}
		
		return $data;
	}
	
	function logout()
	{
		$this->CI->session->sess_destroy();
	}
}
