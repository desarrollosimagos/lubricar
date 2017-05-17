<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class COrder extends CI_Controller {

	public function __construct() {
        parent::__construct();


        
		// Load database
        $this->load->model('MOrder');
		$this->load->model('MClient');
		
    }
	
	public function index()
	{
		$this->load->view('base');
		$data['listar'] = $this->MClient->obtener();
		$this->load->view('order/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		$this->load->view('base');
		$id_ult = $this->MOrder->obtenerId();
		$data['listar'] = $id_ult + 1;
		$this->load->view('order/registrar', $data);
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MOrder->insert($this->input->post());
        if ($result) {

           /*$this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata('logged_in')['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {
		
		$this->load->view('base');
        $data['id'] = $this->uri->segment(3);
        $data['editar'] = $this->MOrder->obtenerServices($data['id']);
        $this->load->view('order/editar', $data);
		$this->load->view('footer');
    }
	
	//Metodo para actualizar
    public function update() {
		
        $result = $this->MOrder->update($this->input->post());
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
		
        $result = $this->MOrder->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
