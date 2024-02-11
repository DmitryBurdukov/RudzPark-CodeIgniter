<?php
    class Registration extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('registration_model');
        }

        public function index() {
            
            $data['slug'] = 'registration';

            $this->load->view('templates/header');
            $this->load->view('pages/enter', $data);
        }

        public function newUser() {
            $user_db = $this->registration_model->setNewUser($_POST);
            if ($user_db) {
                echo "Пользователь с таким логином уже существует";
                // print_r($user_data[0]);
                header('Location: /registration');
            } else {
                
            }
        }
    }