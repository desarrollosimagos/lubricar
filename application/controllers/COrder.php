<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class COrder extends CI_Controller {
    

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
        
        $this->load->view('base');
        $data['listar'] = $this->MClient->obtener();
        $data['list_orders'] = $this->MOrder->obtener();
        $data['list_orders_services'] = $this->MOrder->getServices();
        $data['list_orders_products'] = $this->MOrder->getProducts();
        $data['list_serv'] = $this->MServices->obtener();
        $data['list_prod'] = $this->MProduct->obtener();
        $data['list_franq'] = $this->MFranchises->obtener();
        $data['list_client'] = $this->MClient->obtener();
        $data['status'] = $this->MOrder->obtenerStatus();
        $this->load->view('order/lista', $data);
        $this->load->view('footer');
    }

    public function register() {
        
        $this->load->view('base');
        $id_ult = $this->MOrder->obtenerRows();
        $data['listar'] = $id_ult + 1;
        $data['list_serv'] = $this->MServices->obtener();
        $data['status'] = $this->MOrder->obtenerStatus();
        $this->load->view('order/registrar', $data);
        $this->load->view('footer');
    }

    //Method to save a new record
    public function add() {

        // Insert in orders
        $datos = array(
            'customer_id' => $this->input->post('codcliente'),
            'user_id' => $this->session->userdata('logged_in')['id'],
            'address_service_id' => $this->input->post('address'),
            'address_invoice_id' => $this->input->post('address'),
            'date_order' => date('Y-m-d H:i:s'),
            'sub_total' => $this->input->post('sub_total'),
            'impuesto' => $this->input->post('iva_total'),
            'total' => $this->input->post('total'),
            'vehicle_id' => $this->input->post('vehiculo'),
            'status' => $this->input->post('status'),
            'franchise_id' => $this->input->post('franchise_id'),
        );

        $result_id = $this->MOrder->insert($datos);

        if ($result_id != '') {
            /* $this->libreria->generateActivity('Nuevo Grupo de Usuario', $this->session->userdata('logged_in')['id']); */


            $servicio = $this->input->post('servicio');

            foreach ($servicio as $serv) {

                $serv = explode(";", $serv);

                if ($serv[1] != 'Ningún dato disponible en esta tabla') {

                    $service_id = $serv[0];
                    $impuesto = $serv[3];
                    $subtotal = $serv[4];
                    $iva = $subtotal * $impuesto / 100;
                    $total = $subtotal + $iva;

                    $datos2 = array(
                        'service_id' => $service_id,
                        'order_id' => $result_id,
                        'sub_total' => $subtotal,
                        'impuesto' => $iva,
                        'total' => $total,
                    );

                    $result = $this->MOrder->insertService($datos2);
                }
            }


            $producto = $this->input->post('producto');

            foreach ($producto as $prod) {

                $prod = explode(";", $prod);

                if ($prod[1] != 'Ningún dato disponible en esta tabla') {

                    $product_id = $prod[0];
                    $unit_price = $prod[2];
                    $quantity = $prod[3];
                    $impuesto = $prod[4];
                    $sub_total = $prod[5];
                    $iva = $sub_total * $impuesto / 100;
                    $total = $sub_total + $iva;

                    // Insert in orders_product
                    $datos = array(
                        'order_id' => $result_id,
                        'product_id' => $product_id,
                        'quantity' => $quantity,
                        'unit_price' => $unit_price,
                        'sub_total' => $sub_total,
                        'impuesto' => $iva,
                        'total' => $total,
                    );


                    $result = $this->MOrder->insertProduct($datos);
                }
            }
        }
    }

    //Method to edit
    public function edit() {

        $this->load->view('base');
        $data['id'] = $this->uri->segment(3);
        $data['editar'] = $this->MOrder->obtenerOrder($data['id']);
        $data['status'] = $this->MOrder->obtenerStatus();
        $data['listar_vehicle'] = $this->MClient->obtenerCars($data['editar'][0]->customer_id);
        $data['listar_address'] = $this->MClient->obtenerAddress($data['editar'][0]->customer_id);
        $this->load->view('order/editar', $data);
        $this->load->view('footer');
    }

    //Method to update
    public function update() {

        $result = $this->MOrder->update($this->input->post());
        if ($result) {
            /*    $this->libreria->generateActivity('Actualizado Grupo de Usuario', $this->session->userdata['logged_in']['id']); */
        }
    }

    //Method to delete
    function delete($id) {

        $result = $this->MOrder->delete($id);
        if ($result) {
            /*  $this->libreria->generateActivity('Eliminado País', $this->session->userdata['logged_in']['id']); */
        }
    }

}
