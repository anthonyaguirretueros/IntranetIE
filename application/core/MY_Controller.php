<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $this->ion_auth_data['logged_user'] = $this->ion_auth->user()->row();
        $this->ion_auth_data['logged_user_group'] = $this->ion_auth->get_users_groups()->row();
        $this->ion_auth_data['is_admin'] = $this->ion_auth->is_admin();
    }
}
