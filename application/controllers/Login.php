<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
	parent::__construct();
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

}

?>
