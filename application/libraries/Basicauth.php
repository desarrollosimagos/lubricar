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
				// Consultamos los datos de perfil del usuario
				$query_profile = $this->CI->db->get_where('profile', array('id'=>$query->row()->profile_id));
				// Consultamos los datos de acciones del perfil
				$query_profile_actions = $this->CI->db->get_where('profile_actions', array('profile_id'=>$query_profile->row()->id));
				$acciones = array();
				foreach($query_profile_actions->result() as $profile_action){
					$query_actions = $this->CI->db->get_where('actions', array('id'=>$profile_action->action_id));
					$acciones[] = $query_actions->result();
				}
				// Consultamos los datos de permisos del usuario
				$query_permissions = $this->CI->db->get_where('permissions', array('user_id'=>$query->row()->id));
				$permisos = array();
				foreach($query_permissions->result() as $permissions){
					$query_actions2 = $this->CI->db->get_where('actions', array('id'=>$permissions->action_id));
					$permisos[] = $query_actions2->result();
				}
				// Si el usuario pertenece a una franquicia, consultamos los datos de la misma
				$franquicia = array();
				// Primero verificamos que el usuario no sea administrador
				if($query->row()->admin == 0){
					// Buscamos si hay una franquicia asociada al usuario
					$query_user_franquicia = $this->CI->db->get_where('users_franchises', array('user_id'=>$query->row()->id));
					if($query_user_franquicia->num_rows() > 0){
						//~ $id_franquicia = $query_user_franquicia->row()->franchise_id;
						//~ echo "Franquicia: ".$id_franquicia;
						$query_franquicia = $this->CI->db->get_where('franchises', array('id'=>$query_user_franquicia->row()->franchise_id));
						$franquicia[] = $query_franquicia->result();
					}
				}
				//~ exit();
				// Creamos la sesión y le cargamos los datos de usuario
				$session_data = array(
					'id' => $query->row()->id,
					'username' => $usuario,
					'admin' => $query->row()->admin,
					'profile_name' => $query_profile->row()->name,
					'acciones' => $acciones,
					'permisos' => $permisos,
					'franquicia' => $franquicia
				);
				$this->CI->session->set_userdata('logged_in',$session_data);
				
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
