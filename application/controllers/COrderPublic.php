<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class COrderPublic extends CI_Controller {
    

    public function __construct() {
        parent::__construct();

        
        // Load database
        $this->load->model('MOrder');
        $this->load->model('MClient');
        $this->load->model('MServices');
        $this->load->model('MProduct');
        $this->load->model('MFranchises');
        $this->load->model('MClient');
    }

    public function index() {
        
        redirect('public_perfil');
    }
    
    //Method to save a new record
    public function add_public() {

        // Insert in orders
        $datos = array(
            'customer_id' => $this->input->post('customer_id'),
            //~ 'user_id' => $this->session->userdata('logged_in_public')['id'],
            'address_service_id' => $this->input->post('address'),
            'address_invoice_id' => $this->input->post('address'),
            'date_order' => date('Y-m-d H:i:s'),
            'date_citation' => $this->input->post('fecha'),
            'sub_total' => 0, // Valor temporal
            'impuesto' => 0, // Valor temporal
            'total' => 0, // Valor temporal
            'vehicle_id' => $this->input->post('vehiculo'),
            'status' => 1,
            'franchise_id' => 1, // Valor temporal
        );

        $result_id = $this->MOrder->insert($datos);
        
        echo $result_id;

        if ($result_id != '') {
			// Asociamos los servicios seleccionadas del combo select
			foreach($this->input->post('servicios') as $service_id){
				$data_service = array('order_id'=>$result_id, 'service_id'=>$service_id, 'sub_total'=>0, 'impuesto'=>0, 'total'=>0);
				$this->MOrder->insertServ($data_service);
			}
        }
    }

}
