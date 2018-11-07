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

//    public function setalumno(string $nombre, string $apellido, string $cumpleanos, string $grado, string $nivel) {
//        return $this->db->query("INSERT INTO tb_alumno(nombre,apellido,cumpleanos,grado,nivel) values ({$nombre},{$apellido},{$cumpleanos},{$grado},{$nivel})");
//    }
    
    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    public function insert($alumno){
        $this->db->set("nombre", $alumno["nombre"]);
        $this->db->set("apellido", $alumno["apellido"]);
        $this->db->set("cumpleanos", $alumno["cumpleanos"]);
        $this->db->set("grado", $alumno["grado"]);
        $this->db->set("nivel", $alumno["nivel"]);
        $this->db->insert($this->table);
        return $this->db->insert_id();
    }
}

?>