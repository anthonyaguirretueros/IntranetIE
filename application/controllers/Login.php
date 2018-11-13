<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_login');
    }

    public function index() {
        if ($this->session->set_userdata('username')) {
            redirect('home');
        }
        if (isset($_POST['password'])) {
            $this->load->model('m_login');
            if ($this->m_login->login($_POST['username'], $_POST['password'])) {
                $this->session->set_userdata('username', $_POST['username']);
                redirect('home');
            } else {
                redirect('login');
            }
        }
        $this->load->view('login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('home');
    }

    public function vista() {
        $this->load->view('registro_alumno');
    }

//    public function registrarusuario() {
//
//        if ($this->input->post()) {
//            $this->form_validation->set_rules('username', 'username', 'required');
//            $this->form_validation->set_rules('nombres', 'nombres', 'required');
//            $this->form_validation->set_rules('apellidos', 'apellidos', 'required');
//            $this->form_validation->set_rules('tipo', 'tipo', 'required');
//            $this->form_validation->set_rules('password', 'password', 'required');
//
//            if ($this->form_validation->run() == FALSE) {
//
//                echo "no entrará";
//            } elseif ($this->m_login->setUsuario($_POST)) {
//                echo "entro";
//            }
//        }
//    }

    public function insertUsuario() {
        if ($this->input->post()) {
            $usuario = $this->input->post();
            $resultado = $this->m_login->insert($usuario);
            if ($resultado > 0) {
                $response["message"] = "Registo exitoso.";
            } else {
                $response["error"] = "Error al registrar, verifique!!!";
            }
            echo json_encode($response);
        }
    }

}

?>
