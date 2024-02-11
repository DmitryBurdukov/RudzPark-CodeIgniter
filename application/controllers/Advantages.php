<?php   
    class Advantages extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('advantages_model');
        }

        public function view() {
            $data['advantages'] = $this->advantages_model->get_advantages();
        }
    }