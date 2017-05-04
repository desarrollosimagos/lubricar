<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MUser extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Metodo publico para obterner los perfiles
    public function obtener() {
        $query = $this->db->get('users');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, forma de insertar los datos
    public function insert($datos) {
        $result = $this->db->where('username =', $datos['username']);
        $result = $this->db->get('users');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("users", $datos);
            return $result;
        }
    }

    // Metodo publico, para obterner la unidad de medida por id
    public function obtenerUsers($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Metodo publico, para actualizar un registro 
    public function update($datos) {
        $result = $this->db->where('username =', $datos['username']);
        $result = $this->db->where('id !=', $datos['id']);
        $result = $this->db->get('users');

        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->where('id', $datos['id']);
            $result = $this->db->update('users', $datos);
            return $result;
        }
    }


    // Metodo publico, para eliminar un registro 
     public function delete($id) {
        $result = $this->db->delete('users', array('id' => $id));
        return $result;
    }
    

}
?>