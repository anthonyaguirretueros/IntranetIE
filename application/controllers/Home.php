<?php

class Home extends MY_Controller
{
    public function index()
    {
        $data = $this->ion_auth_data;
        $this->load->twig('templates/adminlte', $data);
    }
}