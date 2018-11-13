<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_alumno extends CI_Model {

    var $table = "tb_alumno";

    function __construct() {
        parent :: __construct();
        $this->load->database();
    }

    public function getalumno() {
        return $this->db->query("SELECT id_alumno,nombre,apellido,cumpleanos,grado,nivel FROM tb_alumno")->result();
    }

    public function getAll() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function getById($alumno) {
        $this->db->where("id_alumno", (int) $alumno);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    public function insert($alumno) {
        $this->db->set("cod_alumno", $alumno["cod_alumno"]);
        $this->db->set("nombre", $alumno["nombre"]);
        $this->db->set("apellido", $alumno["apellido"]);
        $this->db->set("cumpleanos", $alumno["cumpleanos"]);
        $this->db->set("grado", $alumno["grado"]);
        $this->db->set("nivel", $alumno["nivel"]);
        $this->db->insert($this->table);
        return $this->db->insert_id();
    }

    public function update($alumno) {
        $this->db->set("cod_alumno", $alumno["cod_alumno"]);
        $this->db->set("nombre", $alumno["nombre"]);
        $this->db->set("apellido", $alumno["apellido"]);
        $this->db->set("cumpleanos", $alumno["cumpleanos"]);
        $this->db->set("grado", $alumno["grado"]);
        $this->db->set("nivel", $alumno["nivel"]);
        $this->db->where("id_alumno", (int) $alumno["id_alumno"]);
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }
    
    public function delete($alumno) {
        $this->db->where("id_alumno", (int) $alumno);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

}

?>