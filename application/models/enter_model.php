<?php
    class Enter_Model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function checkUserData($data) {

            // echo var_dump($data);
            $userLoginInfo['pass'] = md5($data['pass']);
            $userLoginInfo['login'] = $data['login'];

            $where = array('login' => $data['login'], 'pass' => md5($data['pass']));
            $query = $this->db->get_where('users', $where);

            return $query->result_array();

        }
    }