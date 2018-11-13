<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_profesor extends CI_Model {

    var $table = "tb_profesor";

    function __construct() {
        parent :: __construct();
        $this->load->database();
    }

    public function getAll() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function getById($alumno) {
        $this->db->where("id_profesor", (int) $alumno);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    public function insert($alumno) {
        $this->db->set("cod_profesor", $alumno["cod_profesor"]);
        $this->db->set("nombre", $alumno["nombre"]);
        $this->db->set("apellido", $alumno["apellido"]);
        $this->db->set("email", $alumno["email"]);
        $this->db->set("telefono", $alumno["telefono"]);
        $this->db->insert($this->table);
        return $this->db->insert_id();
    }

    public function update($alumno) {
        $this->db->set("cod_profesor", $alumno["cod_profesor"]);
        $this->db->set("nombre", $alumno["nombre"]);
        $this->db->set("apellido", $alumno["apellido"]);
        $this->db->set("email", $alumno["email"]);
        $this->db->set("telefono", $alumno["telefono"]);
        $this->db->where("id_profesor", (int) $alumno["id_profesor"]);
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }
    
    public function delete($alumno) {
        $this->db->where("id_profesor", (int) $alumno);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

}

?>