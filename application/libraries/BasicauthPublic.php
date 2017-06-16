<?php

Class BasicauthPublic
{
	function __construct()
	{
		$this->CI = & get_instance();
	}
	
	function login($usuario, $password)
	{
		$data = array();
		$query = $this->CI->db->get_where('customers', array('username'=>$usuario, 'password'=>$password));
		
		if($query->num_rows() > 0){
			//~ echo "Pasó 1";
			$query = $this->CI->db->get_where('customers', array('username'=>$usuario, 'password'=>$password, 'status'=>1));
			if($query->num_rows() > 0){
				//~ echo "Pasó 2";
				// Buscamos los datos de los pedidos, las direcciones y vehículos asociados al usuario
				$pedidos = array();
				$ordenes = array();
				
				//Armamos la lista de ordenes asociados
				$query_orders = $this->CI->db->get_where('orders', array('customer_id'=>$query->row()->id));
				if($query_orders->num_rows() > 0){
					foreach($query_orders->result() as $order){
						$ordenes[] = $order;
					}
				}
				// Creamos la sesión y le cargamos los datos de usuario
				$session_data = array(
					'id' => $query->row()->id,
					'username' => $usuario,
					'name' => $query->row()->name,
					'lastname' => $query->row()->lastname,
					'phone' => $query->row()->phone,
					'cell_phone' => $query->row()->cell_phone,
					'pedidos' => $pedidos,
					'ordenes' => $ordenes
				);
				$this->CI->session->set_userdata('logged_in_public',$session_data);
				
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
