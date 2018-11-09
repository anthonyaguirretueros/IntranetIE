<?php

defined('BASEPATH') OR exit('No direct  script access allowed');

class alumno extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->load->model("m_alumno");
    }

    public function index() {
        $response["alumnos"] = $this->m_alumno->getalumno();
        $this->load->view("alumnos", $response);
    }
     public function verlista() {

        $this->load->view("lista");
    }
      public function SubirArchivos() {

        $this->load->view("index");
    }

     public function VerArchivos() {

        $this->load->view("archivo");
    }


    public function GuardarAlumno() {
        if ($this->input->post()) {
            // echo "<pre>";	print_r($_POST);die();echo "</pre>";
            $nombre = $this->db->escape($_POST["nombre"]);
            $apellido = $this->db->escape($_POST["apellido"]);
            $cumpleanos = $this->db->escape($_POST["cumpleanos"]);
            $grado = $this->db->escape($_POST["grado"]);
            $nivel = $this->db->escape($_POST["nivel"]);
            $this->m_alumno->setalumno($nombre, $apellido, $cumpleanos, $grado, $nivel);
        }
    }

    public function insertAlumno() {
        if ($this->input->post()) {
            $alumno = $this->input->post();
            $data = $this->m_alumno->insert($alumno);
            if (empty($data)) {
                $response["error"] = "Error al insertar, verifique campo!!!";
            } else {
                $response["message"] = "Alumno registrado.";
            } 
            echo json_encode($response);
        }
    }
}

?>
