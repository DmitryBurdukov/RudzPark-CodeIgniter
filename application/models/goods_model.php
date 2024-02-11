<?php
    class Goods_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function get_goods($goodName) {
            $where = array("category = {$goodName}");
            $query = $this->db->get_where('Товары', $where);
            return $query->result_array();
        }
    }