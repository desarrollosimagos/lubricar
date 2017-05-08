<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class MAcciones extends CI_Model {


    public function __construct() {
       
        parent::__construct();
        $this->load->database();
    }

    //Método público para obterner las acciones
    public function obtener() {
        $query = $this->db->get('actions');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }
    
    //Método público para obterner las acciones no asignadas
    public function obtenerNoAsignadas() {
		$controllers = array('Home');  // Lista de controladores a los que se descartará de la vavlidación
		$result = $this->db->where('assigned', 0);
		$result = $this->db->where_not_in('class', $controllers);
        $query = $this->db->get('actions');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }
    
    //Método público para obterner las acciones no asignadas y la que pertenezca a un submenu específico
    public function obtenerNoAsignadasId($id) {
		$controllers = array('Home');  // Lista de controladores a los que se descartará de la vavlidación
		$result = $this->db->where('assigned', 0);
		$result = $this->db->where_not_in('class', $controllers);
		$result = $this->db->or_where('id', $id);
        $query = $this->db->get('actions');

        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Método público, forma de insertar los datos
    public function insert($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->get('actions');
        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->insert("actions", $datos);
            return $result;
        }
    }

    // Método público, para obterner los datos de un menú según el id
    public function obtenerAccion($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('actions');
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return $query->result();
    }

    // Método público, para actualizar un registro 
    public function update($datos) {
        $result = $this->db->where('name =', $datos['name']);
        $result = $this->db->where('id !=', $datos['id']);
        $result = $this->db->get('actions');

        if ($result->num_rows() > 0) {
            echo '1';
        } else {
            $result = $this->db->where('id', $datos['id']);
            $result = $this->db->update('actions', $datos);
            return $result;
        }
    }
    
    // Método público, para actualizar un registro sin validaciones extra
    public function update_simple($datos) {
		$result = $this->db->where('id', $datos['id']);
		$result = $this->db->update('actions', $datos);
    }

    // Método público, para eliminar un registro 
    public function delete($id) {
        $result = $this->db->where('action_id =', $id);
        $result = $this->db->get('submenus');

        if ($result->num_rows() > 0) {
            echo 'existe';
        } else {
            $result = $this->db->delete('actions', array('id' => $id));
            return $result;
        }
       
    }

}
?>
