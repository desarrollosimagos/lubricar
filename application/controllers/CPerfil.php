<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPerfil extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MPerfil');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MPerfil->obtener();
		$this->load->view('perfiles/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		$this->load->view('perfiles/registrar');
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MPerfil->insertar($this->input->post());
        if ($result) {
			print_r('guardo');
           /* $this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(2);
        $data['editar'] = $this->MPerfil->obtenerPerfiles($data['id']);
        $this->load->view('perfiles/editar', $data);
    }
	
	//Metodo para actualizar
    public function update() {
		
        $result = $this->MPerfil->update($this->input->post());
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
        $result = $this->MPerfil->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
