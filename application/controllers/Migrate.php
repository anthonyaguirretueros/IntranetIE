<?php

class Migrate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->input->is_cli_request()) {
            show_error('This zone cannot be access from browser.');
        }

        if (ENVIRONMENT !== 'development') {
            show_error('Only valid for development environments.');
        }
    }

    public function migrate()
    {
        $this->load->library('migration');

        if ($this->migration->current() === false) {
            show_error($this->migration->error_string());
        } else {
            echo 'Successful migration! :)';
        }
    }

    public function version($v)
    {
        if (is_numeric($v)) {
            $this->load->library('migration');

            if ($this->migration->version($v)) {
                echo 'Successful migration to version ' . $v . '! :)' . PHP_EOL;
            } else {
                show_error($this->migration->error_string());
            }
        } else {

            echo 'version should be a number' . PHP_EOL;
        }

    }
}
