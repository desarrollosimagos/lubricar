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
        $query = $this->db->get('orders');
        $id = $this->db->insert_id();
        return $id;
    }


}
?>