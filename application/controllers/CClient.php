<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CClient extends CI_Controller {

	public function __construct() {
        parent::__construct();


        $this->load->view('base');
		// Load database
        $this->load->model('MClient');
	
		
    }
	
	public function index()
	{
		$data['listar'] = $this->MClient->obtener();
		$this->load->view('client/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		
		$this->load->view('client/registrar');
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {
		
		$data = $this->input->post();
		
		$datos = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'phone' => $this->input->post('phone'),
			'cell_phone' => $this->input->post('cell_phone')
		);
		$result_id = $this->MClient->insert($datos);
		$direccion = $this->input->post('direcciones');

		
		foreach ($direccion as $dire) {

			 $dire = explode(";", $dire);
                
                $city = $dire[0];
                $zip = $dire[1];
                $address_1 = $dire[2];
                $address_2 = $dire[3];
                $phone_1 = $dire[4];
				$cell_phone_1 = $dire[5];
			
            
			 $datos2 = array(
				'customer_id' => $result_id,
                'zip' => $zip,
                'address_1' => $address_1,
                'address_2' => $address_2,
                'phone' => $phone_1,
                'cell_phone' => $cell_phone_1,
                
                );

		$result = $this->MClient->insertAddress($datos2);
			
		}
		$vehiculos = $this->input->post('vehiculos');
		
		foreach ($vehiculos as $vehi) {

			 $vehi = explode(";", $vehi);
                
                $trademark = $vehi[0];
                $model = $vehi[1];
                $color = $vehi[2];
                $year = $vehi[3];
                $license_plate = $vehi[4];
            
			 $datos3 = array(
				'customer_id' => $result_id,
                'trademark' => $trademark,
                'model' => $model,
                'color' => $color,
                'year' => $year,
                'license_plate' => $license_plate,
                
                );

		$result = $this->MClient->insertCars($datos3);
			
		}
            
    }
	 //metodo para editar
    public function edit() {		
        $data['id'] = $this->uri->segment(2);
        $data['editar'] = $this->MClient->obtenerUsers($data['id']);
        $this->load->view('client/editar', $data);
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
        $result = $this->MClient->update($data);
        if ($result) {
        /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']);*/
     
        }
    }
	//Metodo para eliminar
	function delete($id) {
        $result = $this->MClient->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
}
