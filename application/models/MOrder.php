<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MOrder extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Public method to obtain the orders services
    public function obtener() {
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }
    
    //Public method to obtain the orders services
    public function obtenerStatus() {
        $query = $this->db->get('status');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }
    
      //Public method to obtain the row of the orders services
    public function obtenerRows() {
        
        $this->db->select("id");
        $query = $this->db->get('orders');
        if ($query->num_rows() > 0) {
			foreach ($query->result() as $row)
			{
				$id = $row->id;
			}
			return $id;
		}else{
			$id = 1;
		}
    }
    
    
    // Public method, to insert the data of orders
    public function insert($datos) {

            $result = $this->db->insert("orders", $datos);
            //return $result;
            $id = $this->db->insert_id();
            return $id;
        
    }

    
    // Metodo publico, forma de insertar los datos
    public function insertService($datos) {
        $result = $this->db->where('service_id =', $datos['service_id']);
        $result = $this->db->where('order_id =', $datos['order_id']);
        $result = $this->db->get('orders_services');
        if ($result->num_rows() > 0) {
            echo 'existe';
        } else {
            $result = $this->db->insert("orders_services", $datos);
            return $result;
        }
    }
    
      // Metodo publico, forma de insertar los datos
    public function insertProduct($datos) {
        $result = $this->db->where('product_id =', $datos['product_id']);
        $result = $this->db->where('order_id =', $datos['order_id']);
        $result = $this->db->get('orders_products');
        if ($result->num_rows() > 0) {
            echo 'existe';
        } else {
            $result = $this->db->insert("orders_products", $datos);
            return $result;
        }
    }

}
?>
