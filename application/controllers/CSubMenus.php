<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CSubMenus extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MSubMenus');
        $this->load->model('MMenus');
        $this->load->model('MAcciones');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MSubMenus->obtener();
		$data['menus'] = $this->MMenus->obtener();
		$data['acciones'] = $this->MAcciones->obtener();
		$this->load->view('submenus/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		$data['menus'] = $this->MMenus->obtener();
		$data['acciones'] = $this->MAcciones->obtenerNoAsignadas();
		$this->load->view('submenus/registrar', $data);
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {

        $result = $this->MSubMenus->insert($this->input->post());
        if ($result) {
           
           // Actualizamos la nueva acción y la asignamos 
			$data_action = array();
			$data_action['id'] = $this->input->post('action_id');
			$data_action['assigned'] = 1;

			$update_action = $this->MAcciones->update_simple($data_action);
       
        }
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(3);
        $data['menus'] = $this->MMenus->obtener();
        
        // Consultamos el id de la acción asociada al submenú
        $id_submenu = $data['id'];
		$find_submenu = $this->MSubMenus->obtenerSubMenu($id_submenu);
		
		$data['acciones'] = $this->MAcciones->obtenerNoAsignadasId($find_submenu[0]->action_id);
        $data['editar'] = $this->MSubMenus->obtenerSubMenu($data['id']);
        $this->load->view('submenus/editar', $data);
    }
	
	//Metodo para actualizar
    public function update() {
		
		// Primero actualizamos la acción anteriormente asociada y la desasignamos
		$id_submenu = $this->input->post('id');
		$find_submenu = $this->MSubMenus->obtenerSubMenu($id_submenu);
		$data_action = array();
		$data_action['id'] = $find_submenu[0]->action_id;
		$data_action['assigned'] = 0;
		
		$update_action = $this->MAcciones->update_simple($data_action);
		
		// Actualizamos los nuevos datos del submenú
        $result = $this->MSubMenus->update($this->input->post());
        
        if ($result) {			
			// Ahora actualizamos la nueva acción y la asignamos 
			$data_action = array();
			$data_action['id'] = $this->input->post('action_id');
			$data_action['assigned'] = 1;

			$update_action = $this->MAcciones->update_simple($data_action);
        }
    }
    
	//Metodo para eliminar
	function delete($id) {
		
		// Primero consultamos el identificador de la acción a sociada al submenú
		$id_submenu = $id;
		$find_submenu = $this->MSubMenus->obtenerSubMenu($id_submenu);
		$data_action = array();
		$data_action['id'] = $find_submenu[0]->action_id;
		$data_action['assigned'] = 0;
		
		// Eliminamos el submenú
        $result = $this->MSubMenus->delete($id);
        
        if ($result) {
			// Actualizamos la acción para desasignarla (assigned=0)
			$update_action = $this->MAcciones->update_simple($data_action);
        }
    }
	
	
}
