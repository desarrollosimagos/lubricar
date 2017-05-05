<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MMenus extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Método público para obterner los menús
    public function obtener() {
        $query = $this->db->get('menus');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Método público, forma de insertar los datos
    public function insert($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->get('menus');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("menus", $datos);
            return $result;
        }
    }

    // Método público, para obterner los datos de un menú según el id
    public function obtenerMenu($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('menus');
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Método público, para actualizar un registro 
    public function update($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->where('id !=', $datos['id']);
        $result = $this->db->get('menus');

        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->where('id', $datos['id']);
            $result = $this->db->update('menus', $datos);
            return $result;
        }
    }


    // Método público, para eliminar un registro 
     public function delete($id) {
        $result = $this->db->where('menu_id =', $id);
        $result = $this->db->get('submenus');

        if ($result->num_rows() > 0) {
            echo 'existe';
        } else {
            $result = $this->db->delete('menus', array('id' => $id));
            return $result;
        }
       
    }

}
?>
