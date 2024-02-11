<?php 
class Categories extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('categories_model');
    }

    public function index() {
        
        $this->load->view('templates/header', $data);
        $this->load->view('categories/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug = NULL) {
        $data['categories'] = $this->categories_model->get_categories($slug);
    }
}