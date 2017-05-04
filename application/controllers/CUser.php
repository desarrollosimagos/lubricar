<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUser extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MUser');
		$this->load->model('MPerfil');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MUser->obtener();
		$this->load->view('user/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		$data['list_perfil'] = $this->MPerfil->obtener();
		$this->load->view('user/registrar',$data);
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {
		
		$data = array(
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'profile_id' => $this->input->post('profile_id'),
                'password' => 'pbkdf2_sha256$12000$' . hash("sha256", $this->input->post('password')),
                'status' => $this->input->post('status'),
                'd_create' => date('Y-m-d H:i:s'),
                'd_update' => date('Y-m-d H:i:s'),

            );
        $result = $this->MUser->insert($data);
        if ($result) {
		
           /* $this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(2);
		$data['list_perfil'] = $this->MPerfil->obtener();
        $data['editar'] = $this->MUser->obtenerUsers($data['id']);
        $this->load->view('user/editar', $data);
    }
	
	//Metodo para actualizar
    public function update() {
		
		$data = array(
				'id' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'name' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'profile_id' => $this->input->post('profile_id'),
                'status' => $this->input->post('status'),
                'd_update' => date('Y-m-d H:i:s'),

            );
        $result = $this->MUser->update($data);
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
        $result = $this->MUser->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
