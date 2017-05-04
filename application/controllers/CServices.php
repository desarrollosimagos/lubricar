<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CServices extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MServices');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MServices->obtener();
		$this->load->view('services/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		$this->load->view('services/registrar');
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MServices->insert($this->input->post());
        if ($result) {

           /*$this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata('logged_in')['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(3);
        $data['editar'] = $this->MServices->obtenerServices($data['id']);
        $this->load->view('services/editar', $data);
    }
	
	//Metodo para actualizar
    public function update() {
		
        $result = $this->MServices->update($this->input->post());
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
		
        $result = $this->MServices->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
