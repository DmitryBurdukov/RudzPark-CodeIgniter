<?php
    class Links extends CI_Controller {
        public function __construct() {
            parent::construct();
        }

        public function view() {
            $this->load->view('templates/links');
            $this->load->view('templates/footer');
        }
    } 