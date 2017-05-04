<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MFranchises extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Metodo publico para obterner los perfiles
    public function obtener() {
        $query = $this->db->get('franchises');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, forma de insertar los datos
    public function insert($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->get('franchises');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("franchises", $datos);
            return $result;
        }
    }

    // Metodo publico, para obterner la unidad de medida por id
    public function obtenerFranchises($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('franchises');
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, para actualizar un registro 
    public function update($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->where('id !=', $datos['id']);
        $result = $this->db->get('franchises');

        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->where('id', $datos['id']);
            $result = $this->db->update('franchises', $datos);
            return $result;
        }
    }


    // Metodo publico, para eliminar un registro 
     public function delete($id) {
        $result = $this->db->where('user_id =', $id);
        $result = $this->db->get('users_franchises');

        if ($result->num_rows() > 0) {
            echo 'existe';
        } else {
            $result = $this->db->delete('franchises', array('id' => $id));
            return $result;
        }
       
    }
    

}
?>