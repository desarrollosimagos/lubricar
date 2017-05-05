<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAssignment extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MAssignment');
		$this->load->model('MFranchises');
		$this->load->model('MServices');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MAssignment->obtener();
		$data['list_franq'] = $this->MFranchises->obtener();
		$data['list_serv'] = $this->MServices->obtener();
		$this->load->view('assignment/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		$data['list_franq'] = $this->MFranchises->obtener();
		$data['list_serv'] = $this->MServices->obtener();
		$this->load->view('assignment/registrar',$data);
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MAssignment->insert($this->input->post());
        if ($result) {

           /*$this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata('logged_in')['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(3);
		$data['list_franq'] = $this->MFranchises->obtener();
		$data['list_serv'] = $this->MServices->obtener();
        $data['editar'] = $this->MAssignment->obtenerServices($data['id']);
        $this->load->view('assignment/editar', $data);
		$this->load->view('footer');
    }
	
	//Metodo para actualizar
    public function update() {
		
        $result = $this->MAssignment->update($this->input->post());
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
		
        $result = $this->MAssignment->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
?>