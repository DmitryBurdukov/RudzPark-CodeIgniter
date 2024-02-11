<?php
    class Advantages_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
        public function get_advantages() {
            $query = $this->db->get('advantages');
            return $query->result_array();
        }
    }