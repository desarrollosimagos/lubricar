<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CFranchises extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MFranchises');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MFranchises->obtener();
		$this->load->view('franchises/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		$this->load->view('franchises/registrar');
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MFranchises->insert($this->input->post());
        if ($result) {
	
           /* $this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(3);
        $data['editar'] = $this->MFranchises->obtenerFranchises($data['id']);
        $this->load->view('franchises/editar', $data);
		$this->load->view('footer');
    }
	
	//Metodo para actualizar
    public function update() {
		
        $result = $this->MFranchises->update($this->input->post());
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
        $result = $this->MFranchises->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
