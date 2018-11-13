<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profesor
 *
 * @author Alumno
 */
class Profesor extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->load->model("m_profesor");
    }

    public function index() {
        $response["profesores"] = $this->m_profesor->getAll();
        $this->load->view("profesores", $response);
    }

    public function getProfesor() {
        $id_alumno = $this->input->post();
        $data = $this->m_profesor->getById((int) $id_alumno["id_profesor"]);
        echo json_encode($data);
    }

    public function insertProfesor() {
        if ($this->input->post()) {
            $profesor = $this->input->post();
            $resultado = $this->m_profesor->insert($profesor);
            if (empty($resultado)) {
                $response["error"] = "Error al insertar, verifique!!!";
            } else {
                $response["message"] = "Alumno registrado.";
                $response["data"] = $this->m_profesor->getAll();
            }
            echo json_encode($response);
        }
    }

    public function updateProfesor() {
        if ($this->input->post()) {
            $profesor = $this->input->post();
            $resultado = $this->m_profesor->update($profesor);
            if ($resultado > 0) {
                $response["message"] = "Alumno actualizado.";
                $response["data"] = $data = $this->m_profesor->getAll();
            } else {
                $response["error"] = "Error al actualizar, verifique!!!";
            }
            echo json_encode($response);
        }
    }

    public function deleteProfesor() {
        if ($this->input->post()) {
            $profesor = $this->input->post();
            $resultado = $this->m_profesor->delete($profesor["id_profesor"]);
            if ($resultado > 0) {
                $response["message"] = "Alumno eliminado.";
                $response["data"] = $data = $this->m_profesor->getAll();
            } else {
                $response["error"] = "Error al remover, verifique!!!";
            }
            echo json_encode($response);
        }
    }

}
