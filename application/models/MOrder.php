<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MOrder extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Public method to obtain the services
    public function obtener() {
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }
    
      //Public method to obtain the services
    public function obtenerId() {
        $this->db->from('orders');
        $count = $this->db->count_all_results();;
        return $count;
    }
    
    
    // Public method, to insert the data of orders
    public function insert($datos) {

            $result = $this->db->insert("orders", $datos);
            //return $result;
            $id = $this->db->insert_id();
            return $id;
        
    }


}
?>