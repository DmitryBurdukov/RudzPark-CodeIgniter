<?php  
    class Admin_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function get_categories() {
            $query = $this->db->get('categories');
            return $query->result_array();
        }
        public function get_one_categoty($category_name) {
            $query = $this->db->get($category_name);
            return $query->result_array();
        }
    }