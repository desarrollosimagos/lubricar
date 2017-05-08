<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAcciones extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MAcciones');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MAcciones->obtener();
		$this->load->view('acciones/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		$this->load->view('acciones/registrar');
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MAcciones->insert($this->input->post());
        if ($result) {

           /*$this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata('logged_in')['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(3);
        $data['editar'] = $this->MAcciones->obtenerAccion($data['id']);
        $this->load->view('acciones/editar', $data);
    }
	
	//Metodo para actualizar
    public function update() {
		
        $result = $this->MAcciones->update($this->input->post());
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
		
        $result = $this->MAcciones->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
