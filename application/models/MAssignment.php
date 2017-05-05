<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MAssignment extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Metodo publico para obterner los perfiles
    public function obtener() {
        $query = $this->db->get('franchises_services');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, forma de insertar los datos
    public function insert($datos) {
        
        $result = $this->db->where('franchise_id =', $datos['franchise_id']);
        $result = $this->db->where('service_id =', $datos['service_id']);
        $result = $this->db->get('franchises_services');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("franchises_services", $datos);
            return $result;
        }
    }

    // Metodo publico, para obterner la unidad de medida por id
    public function obtenerServices($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('franchises_services');
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, para actualizar un registro 
    public function update($datos) {
       
        $result = $this->db->where('franchise_id =', $datos['franchise_id']);
        $result = $this->db->where('service_id =', $datos['service_id']);
        $result = $this->db->where('id !=', $datos['id']);
        $result = $this->db->get('franchises_services');




        if ($result->num_rows() > 0) {
            echo '1';
        }else {
            $result = $this->db->where('id', $datos['id']);
            $result = $this->db->update('franchises_services', $datos);
            return $result;
        }
    }


    // Metodo publico, para eliminar un registro 
     public function delete($id) {
        $result = $this->db->where('service_id =', $id);
        $result = $this->db->get('orders_services');

        if ($result->num_rows() > 0) {
            echo 'existe';
        } else {
            $result = $this->db->delete('franchises_services', array('id' => $id));
            return $result;
        }
       
    }
    

}
?>