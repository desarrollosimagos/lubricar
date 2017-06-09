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
			echo "Pasó 1";
			$query = $this->CI->db->get_where('customers', array('username'=>$usuario, 'password'=>$password, 'status'=>1));
			if($query->num_rows() > 0){
				echo "Pasó 2";
				// Buscamos los datos de los pedidos, las direcciones y vehículos asociados al usuario
				$pedidos = array();
				$direcciones = array();
				$vehiculos = array();
				//Armamos la lista de direcciones asociadas
				$query_addresses = $this->CI->db->get_where('addresses', array('customer_id'=>$query->row()->id));
				if($query_addresses->num_rows() > 0){
					foreach($query_addresses->result() as $address){
						$direcciones[] = $address;
					}
				}
				//Armamos la lista de vehículos asociados
				$query_vehicles = $this->CI->db->get_where('vehicles', array('customer_id'=>$query->row()->id));
				if($query_vehicles->num_rows() > 0){
					foreach($query_vehicles->result() as $vehicle){
						$vehiculos[] = $vehicle;
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
					'direcciones' => $direcciones,
					'vehiculos' => $vehiculos
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
