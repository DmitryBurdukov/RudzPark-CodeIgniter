<?php
    class Registration_Model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function setNewUser($regData) {
            // print_r($regData);
            $insertData['pass'] = md5($regData['pass']);
            $insertData['login'] = $regData['login'];
            $this->db->insert('users', $insertData);
            header('Location: /Home');
        }
    }