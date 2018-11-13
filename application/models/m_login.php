<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    var $table = "tb_usuario";
    public $variable;

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($usuario) {
        $this->db->set("username", $usuario["username"]);
        $this->db->set("password", $usuario["password"]);
        $this->db->set("estado", (int) $usuario["estado"]);
        $this->db->set("id_perfil", (int) $usuario["id_perfil"]);
        $this->db->insert($this->table);
        return $this->db->insert_id();
    }

}
