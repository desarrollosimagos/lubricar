<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMenus extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MMenus');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MMenus->obtener();
		$this->load->view('menus/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		$this->load->view('menus/registrar');
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MMenus->insert($this->input->post());
        if ($result) {

           /*$this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata('logged_in')['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(3);
        $data['editar'] = $this->MMenus->obtenerMenu($data['id']);
        $this->load->view('menus/editar', $data);
    }
	
	//Metodo para actualizar
    public function update() {
		
        $result = $this->MMenus->update($this->input->post());
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
		
        $result = $this->MMenus->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
