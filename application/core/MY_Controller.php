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
        $this->ion_auth_data['company_name'] = $this->ion_auth->user($this->session->company_id)->row()->company;
        $this->ion_auth_data['is_admin'] = $this->ion_auth->is_admin();

        if (!$this->ion_auth->is_admin()) {
            $this->session->set_userdata('company_id', $this->ion_auth->user()->row()->id);
        }

        // Some data added
        $this->ion_auth_data['page_header'] = lang('dashboard_string_page_header');
        $this->ion_auth_data['optional_description'] = lang('dashboard_string_optional_description');

        // (Breadcrumbs here, maybe.)
        /**
         *  Do the magic with the breadcrumbs.
         */
    }
}
