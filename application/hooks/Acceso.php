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
		$controllersprivados = array('Home', 'CPerfil');  // Controladores restringidos sin logueo
		$controllerspermitidos = array();  // Controladores permitidos para el usuario logueado
		$accionespermitidas = array();  // Ids de las acciones (módulos) permitidos para el usuario logueado
		$rutaspermitidas = array();  // Rutas permitidas para el usuario logueado
		
		// Si estamos logueados e intenamos volver al login o admin nos redirige al home
		if(isset($this->CI->session->userdata['logged_in']) && ($this->CI->router->method == 'login' || $this->CI->router->method == 'admin')){
			redirect('home');
		}
		
		// Si no estamos logueados e intentamos acceder a un controlador restringido nos redirige al login
		if(!isset($this->CI->session->userdata['logged_in']) && $this->CI->router->method != 'login' && in_array($this->CI->router->class, $controllersprivados)){
			redirect('login');
		}
		
		// Si estamos logueados validamos los controladores y métodos permitidos según el perfil del usuario
		if(isset($this->CI->session->userdata['logged_in']) && ($this->CI->router->method != 'login' || $this->CI->router->method != 'admin')){
			//~ print_r($this->CI->session->userdata('logged_in'));echo "<br>";
			// Recorrido de los datos del usuario
			foreach($this->CI->session->userdata('logged_in') as $clave => $userdata){
				if($clave == "acciones"){
					foreach($userdata as $accion){
						// Si el usuario no es administrador capturamos los datos de la acción haciendo referencia con el indice 0,
						// de lo contrario no será necesario indicar ningún indice
						if($this->CI->session->userdata('logged_in')['admin'] == 0){
							$controllerspermitidos[] = $accion[0]->class;
							$accionespermitidas[] = $accion[0]->id;
							$rutaspermitidas[] = $accion[0]->route;
						}else{
							$controllerspermitidos[] = $accion->class;
							$accionespermitidas[] = $accion->id;
							$rutaspermitidas[] = $accion->route;
						}
					}
				}else if($clave == "permisos"){
					foreach($userdata as $permiso){
						$controllerspermitidos[] = $permiso[0]->class;
						$accionespermitidas[] = $permiso[0]->id;
						$rutaspermitidas[] = $permiso[0]->route;
					}
				}else if($clave == "franquicias"){
					foreach($userdata as $franquicias){
						//~ foreach($franquicias as $franquicia){
							//~ echo $franquicia->name;
						//~ }
					}
				}else{
					//~ print_r($userdata);
					//~ echo "<br>";
				}
				
			}
			//~ Si ingresamos en un controlador al que no tenemos acceso
			if(!in_array($this->CI->router->class, $controllerspermitidos)){
				//~ echo "Acceso denegado...";
				redirect('home');
			}
			
		}
		
	}
}
/*
/end hooks/home.php
*/
