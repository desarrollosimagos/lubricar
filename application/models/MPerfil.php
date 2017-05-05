<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MPerfil extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Public method to obtain the profile
    public function obtener() {
        $query = $this->db->get('profile');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Public method to insert the data
    public function insert($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->get('profile');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("profile", $datos);
            return $result;
        }
    }

    // Public method to obtain the profile by id
    public function obtenerPerfiles($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('profile');
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Public method to update a record 
    public function update($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->where('id !=', $datos['id']);
        $result = $this->db->get('profile');

        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->where('id', $datos['id']);
            $result = $this->db->update('profile', $datos);
            return $result;
        }
    }


    // Public method to delete a record 
     public function delete($id) {
        $result = $this->db->where('profile_id =', $id);
        $result = $this->db->get('users');

        if ($result->num_rows() > 0) {
            echo 'existe';
        } else {
            $result = $this->db->delete('profile', array('id' => $id));
            return $result;
        }
       
    }
    

}
?>