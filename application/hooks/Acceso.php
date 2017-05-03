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
		
		if(isset($this->CI->session->userdata['logged_in']) && ($this->CI->router->method == 'login' || $this->CI->router->method == 'admin')){
			redirect('home');
		}
		
		if(!isset($this->CI->session->userdata['logged_in']) && $this->CI->router->method != 'login' && in_array($this->CI->router->class, $controllersprivados)){
			redirect('login');
		}
		
		if(isset($this->CI->session->userdata['logged_in']) && ($this->CI->router->method != 'login' || $this->CI->router->method != 'admin')){
			//~ print_r($this->CI->session->userdata('logged_in'));echo "<br>";
			//~ echo "Usuario: ".$this->CI->session->userdata('logged_in')['username'];
			//~ echo "Id: ".$this->CI->session->userdata('logged_in')['id'];
			// Recorrido de los datos del usurio
			/*foreach($this->CI->session->userdata('logged_in') as $clave => $userdata){
				if($clave == "acciones"){
					print_r($clave);
					echo " - ";
					//~ print_r($userdata);
					foreach($userdata as $accion){
						echo $accion[0]->name.", ";
					}
					echo "<br>";
				}else if($clave == "permisos"){
					print_r($clave);
					echo " - ";
					//~ print_r($userdata);
					foreach($userdata as $permiso){
						echo $permiso[0]->name.", ";
					}
					echo "<br>";
				}else if($clave == "franquicia"){
					print_r($clave);
					echo " - ";
					//~ print_r($userdata);
					foreach($userdata as $franquicia){
						echo $franquicia[0]->name.", ";
					}
					echo "<br>";
				}else{
					echo $clave." - ".$userdata;
					echo "<br>";
				}
				
			}*/
			//~ exit();
		}
		
	}
}
/*
/end hooks/home.php
*/
