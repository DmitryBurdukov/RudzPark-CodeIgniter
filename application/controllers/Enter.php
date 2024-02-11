<?php
    class Enter extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('enter_model');
        }

        public function index() {
            $data['slug'] = 'enter';


            $this->load->view('templates/header');
            $this->load->view('pages/enter', $data);
        }

        public function redirect() {
            $user_data = $this->enter_model->checkUserData($_POST);
            if ($user_data) {
                // print_r($user_data[0]);
                if ($user_data[0]['login'] === 'admin' ) {
                    header('Location: /AdminPage');
                } else {
                    header('Location: /Home');
                }
            } else {
                echo "Нет такого пользователя";
                header('Location: /enter?user="null"');
            }
        }


    }