<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CClient extends CI_Controller {

	public function __construct() {
        parent::__construct();

		// Load database
        $this->load->model('MClient');
	
    }
	
	public function index()
	{
		$this->load->view('base');
		$data['listar'] = $this->MClient->obtener();
		$this->load->view('client/lista', $data);
		$this->load->view('footer');
	}
	
	public function register()
	{
		$this->load->view('base');
		$this->load->view('client/registrar');
		$this->load->view('footer');
	}
	
	  //metodo para guardar un nuevo registro
    public function add() {
		
		$datos = array(
			'username' => $this->input->post('username'),
			'password' => 'pbkdf2_sha256$12000$' . hash("sha256", $this->input->post('password')),
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'phone' => $this->input->post('phone'),
			'cell_phone' => $this->input->post('cell_phone'),
			'status' => $this->input->post('status')
		);
		$result_id = $this->MClient->insert($datos);
		
		if ($result_id != ''){
			
			$direccion = $this->input->post('direcciones');
			foreach ($direccion as $dire) {

				$dire = explode(";", $dire);
				 
				if ($dire[1] != 'Ningún dato disponible en esta tabla'){
	
					$city = $dire[1];
					$zip = $dire[2];
					$address_1 = $dire[3];
					$address_2 = $dire[4];
					$phone_1 = $dire[5];
					$cell_phone_1 = $dire[6];
				
				
					$datos2 = array(
						'customer_id' => $result_id,
						'city' => $city,
						'zip' => $zip,
						'address_1' => $address_1,
						'address_2' => $address_2,
						'phone' => $phone_1,
						'cell_phone' => $cell_phone_1,
						
					);
		
				$result = $this->MClient->insertAddress($datos2);
					
				}
			}
			$vehiculos = $this->input->post('vehiculos');
			
			foreach ($vehiculos as $vehi) {
	
				 $vehi = explode(";", $vehi);
				 
				if ($vehi[1] != 'Ningún dato disponible en esta tabla'){
	
					$trademark = $vehi[1];
					$model = $vehi[2];
					$color = $vehi[3];
					$year = $vehi[4];
					$license_plate = $vehi[5];
				
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
			
		}

    }
	 //metodo para editar
    public function edit() {
		
		$this->load->view('base');
        $data['id'] = $this->uri->segment(3);
        $data['editar'] = $this->MClient->obtenerClients($data['id']);
		$data['listar_vehi'] = $this->MClient->obtenerCars($data['id']);
		$data['listar_dire'] = $this->MClient->obtenerAddress($data['id']);
        $this->load->view('client/editar', $data);
		$this->load->view('footer');
    }
	
	//Metodo para actualizar
    public function update() {

		$regs_eliminar1 = $this->input->post('codigos_des1');
		$regs_eliminar2 = $this->input->post('codigos_des2'); 
		
		// Verificamos si hay registros para eliminar
        if($regs_eliminar1 != ''){
			$regs_eliminar1 = explode(",",$regs_eliminar1);
			
			// Desvinculamos (eliminamos de la tabla direcciones)
			foreach ($regs_eliminar1 as $reg){
				
				// Eliminamos la asociación de la tabla direcciones
				$result = $this->MClient->deleteAddress($reg);
			}
		}
		
		// Verificamos si hay registros para eliminar
        if($regs_eliminar2 != ''){
			$regs_eliminar2 = explode(",",$regs_eliminar2);
			
			// Desvinculamos (eliminamos de la tabla vehiculos)
			foreach ($regs_eliminar2 as $reg){
				
				// Eliminamos la asociación de la tabla vehiculos
				$result = $this->MClient->deleteCars($reg);
			}
		}
		
		$datos = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'phone' => $this->input->post('phone'),
			'cell_phone' => $this->input->post('cell_phone')
		);
		$result = $this->MClient->update($datos);
		
		$direccion = $this->input->post('direcciones');
		foreach ($direccion as $dire) {

			$dire = explode(";", $dire);

				if ($dire[0] == 'undefined' && $dire[1]!= 'Ningún dato disponible en esta tabla'){

					$city = $dire[1];
					$zip = $dire[2];
					$address_1 = $dire[3];
					$address_2 = $dire[4];
					$phone_1 = $dire[5];
					$cell_phone_1 = $dire[6];
			
            
					$datos2 = array(
						
						'customer_id' => $this->input->post('id'),
						'city' => $city,
						'zip' => $zip,
						'address_1' => $address_1,
						'address_2' => $address_2,
						'phone' => $phone_1,
						'cell_phone' => $cell_phone_1,
						
					);
	
				$result = $this->MClient->insertAddress($datos2);

					
				}
                
				if ($dire[1] != 'Ningún dato disponible en esta tabla'){
					
						$id = $dire[0];
						$city = $dire[1];
						$zip = $dire[2];
						$address_1 = $dire[3];
						$address_2 = $dire[4];
						$phone_1 = $dire[5];
						$cell_phone_1 = $dire[6];
					
					
					 $datos2 = array(
						'customer_id' => $this->input->post('id'),
						'id' => $id,
						'city' => $city,
						'zip' => $zip,
						'address_1' => $address_1,
						'address_2' => $address_2,
						'phone' => $phone_1,
						'cell_phone' => $cell_phone_1,
						
						);
		
				$result = $this->MClient->updateAddress($datos2);

					
				}
		}
	
		$vehiculos = $this->input->post('vehiculos');
		
		foreach ($vehiculos as $vehi) {

			$vehi = explode(";", $vehi);
			
				if ($vehi[0] == 'undefined' && $vehi[1]!= 'Ningún dato disponible en esta tabla'){

					$trademark = $vehi[1];
					$model = $vehi[2];
					$color = $vehi[3];
					$year = $vehi[4];
					$license_plate = $vehi[5];
			
            
					 $datos3 = array(
						
						'customer_id' => $this->input->post('id'),
						'trademark' => $trademark,
						'model' => $model,
						'color' => $color,
						'year' => $year,
						'license_plate' => $license_plate,
						
					);
	
				$result = $this->MClient->insertCars($datos3);
				}
                
				if ($vehi[1] != 'Ningún dato disponible en esta tabla'){
					
						$id = $vehi[0];
						$trademark = $vehi[1];
						$model = $vehi[2];
						$color = $vehi[3];
						$year = $vehi[4];
						$license_plate = $vehi[5];
					
					
					 $datos3 = array(
						
						'id' => $id,
						'customer_id' => $this->input->post('id'),
						'trademark' => $trademark,
						'model' => $model,
						'color' => $color,
						'year' => $year,
						'license_plate' => $license_plate,
						
						);
		
				$result = $this->MClient->updateCars($datos3);


					
				}
			
	
			
		}    
		
    }
	

	//Metodo para eliminar
	public function delete($id) {
        $result = $this->MClient->delete($id);
        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	
		//Metodo para editar password
	public function pass() {
		print_r('hola',$this->input->post('password'));
		$datos = array(
			'id' => $this->input->post('id_client'),
            'password' => 'pbkdf2_sha256$12000$' . hash("sha256", $this->input->post('password')),
		);
	
        $result = $this->MClient->pass($datos);

        if ($result) {
          /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']);*/
        }
    }
	
	// Método publico para traer las lineas estrategicas segun la asociacion con el plan de la nacion
    public function ajax_client()
    {                                          #Campo         #Tabla                #ID
        $result = $this->MClient->obtener();
        echo json_encode($result);
    }
	
	// Método publico para traer las lineas estrategicas segun la asociacion con el plan de la nacion
    public function ajax_car($id)
    {                                          #Campo         #Tabla                #ID
        $result = $this->MClient->obtenerCars($id);
        echo json_encode($result);
    }
	
	
}
