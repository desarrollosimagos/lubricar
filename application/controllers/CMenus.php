<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMenus extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MMenus');
        $this->load->model('MAcciones');
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MMenus->obtener();
		$data['acciones'] = $this->MAcciones->obtener();
		$this->load->view('menus/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		$data['acciones'] = $this->MAcciones->obtenerNoAsignadas();
		$this->load->view('menus/registrar', $data);
		$this->load->view('footer');
	}
	
	//Método para guardar un nuevo registro
    public function add() {

        $result = $this->MMenus->insert($this->input->post());
        if ($result) {
			
			if($this->input->post('action_id') != '0'){
				// Actualizamos la acción y la asignamos 
				$data_action = array();
				$data_action['id'] = $this->input->post('action_id');
				$data_action['assigned'] = 1;

				$update_action = $this->MAcciones->update_simple($data_action);
			}
       
        }
    }
	 //Método para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(3);
        
        // Consultamos el id de la acción asociada al menú
        $id_menu = $data['id'];
		$find_menu = $this->MMenus->obtenerMenu($id_menu);
		
		$data['acciones'] = $this->MAcciones->obtenerNoAsignadasId($find_menu[0]->action_id);
        $data['editar'] = $this->MMenus->obtenerMenu($data['id']);
        $this->load->view('menus/editar', $data);
    }
	
	//Método para actualizar
    public function update() {
		
		// Primero actualizamos la acción anteriormente asociada (si tiene) y la desasignamos
		$id_menu = $this->input->post('id');
		$find_menu = $this->MMenus->obtenerMenu($id_menu);
		$data_action = array();
		$data_action['id'] = $find_menu[0]->action_id;
		$data_action['assigned'] = 0;
		
		if($find_menu[0]->action_id != '0'){
			$update_action = $this->MAcciones->update_simple($data_action);
		}
		
		// Actualizamos los nuevos datos del menú
        $result = $this->MMenus->update($this->input->post());
        
        if ($result) {
			// Ahora actualizamos la nueva acción (si tiene) y la asignamos 
			$data_action = array();
			$data_action['id'] = $this->input->post('action_id');
			$data_action['assigned'] = 1;
			if($this->input->post('action_id') != '0'){
				$update_action = $this->MAcciones->update_simple($data_action);
			}     
        }
    }
	//Método para eliminar
	function delete($id) {
		
		// Primero consultamos el identificador de la acción a sociada al submenú
		$id_menu = $id;
		$find_menu = $this->MMenus->obtenerMenu($id_menu);
		$data_action = array();
		$data_action['id'] = $find_menu[0]->action_id;
		$data_action['assigned'] = 0;
		
		// Eliminamos el menú
        $result = $this->MMenus->delete($id);
        //~ echo $result;
        if ($result) {
			// Actualizamos la acción para desasignarla (assigned=0)
			$update_action = $this->MAcciones->update_simple($data_action);
        }
    }
	
	
}
