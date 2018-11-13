<?php

defined('BASEPATH') OR exit('No direct  script access allowed');

class alumno extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->load->model("m_alumno");
    }

    public function index() {
        $response["alumnos"] = $this->m_alumno->getAll();
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

    public function getAlumno() {
        $id_alumno = $this->input->post();
        $data = $this->m_alumno->getById((int) $id_alumno["id_alumno"]);
        echo json_encode($data);
    }

    public function insertAlumno() {
        if ($this->input->post()) {
            $alumno = $this->input->post();
            $resultado = $this->m_alumno->insert($alumno);
            if (empty($resultado)) {
                $response["error"] = "Error al insertar, verifique!!!";
            } else {
                $response["message"] = "Alumno registrado.";
                $response["data"] = $this->m_alumno->getAll();
            }
            echo json_encode($response);
        }
    }

    public function updateAlumno() {
        if ($this->input->post()) {
            $alumno = $this->input->post();
            $resultado = $this->m_alumno->update($alumno);
            if ($resultado > 0) {
                $response["message"] = "Alumno actualizado.";
                $response["data"] = $data = $this->m_alumno->getAll();
            } else {
                $response["error"] = "Error al actualizar, verifique!!!";
            }
            echo json_encode($response);
        }
    }

    public function deleteAlumno() {
        if ($this->input->post()) {
            $alumno = $this->input->post();
            $resultado = $this->m_alumno->delete($alumno["id_alumno"]);
            if ($resultado > 0) {
                $response["message"] = "Alumno eliminado.";
                $response["data"] = $data = $this->m_alumno->getAll();
            } else {
                $response["error"] = "Error al remover, verifique!!!";
            }
            echo json_encode($response);
        }
    }
}

?>
