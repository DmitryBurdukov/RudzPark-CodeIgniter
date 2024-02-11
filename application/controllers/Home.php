<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('categories_model');
		$this->load->model('advantages_model');
		$this->load->model('goods_model');
	}

	public function index()
	{	
		if (! file_exists(APPPATH.'/views/pages/main.php')) {
			show_404();
		}
		$good = 'Телефоны';
		// $data['title'] = ucfirst($page);
		$data['categories'] = $this->categories_model->get_categories();
		$data['advantages'] = $this->advantages_model->get_advantages();
		$data['goods'] = $this->goods_model->get_goods($good);

		$this->load->view('mobile-menu');
		$this->load->view('templates/header', $data);
		$this->load->view('top-pannel/top-pannel');
		$this->load->view('pages/main', $data);
		$this->load->view('categories/index', $data);
		$this->load->view('templates/welcome');
		$this->load->view('advantages/advantages');
		$this->load->view('slider-categories/slider-Categories');
		$this->load->view('goods/goods');
		$this->load->view('news_form/news_form');
		$this->load->view('templates/footer', $data);
	}

	public function changeActiveCategory($goodType) {
		$good = 'Товары';
		$decodeGoodName = urldecode($goodType);
		!$decodeGoodName ? $good  : $good = $decodeGoodName;
		// echo urldecode($goodType);
		// echo "good: $good";
		if (! file_exists(APPPATH.'/views/pages/main.php')) {
			show_404();
		}

		// $data['title'] = ucfirst($page);
		$data['categories'] = $this->categories_model->get_categories();
		$data['advantages'] = $this->advantages_model->get_advantages();
		$data['goods'] = $this->goods_model->get_goods($good);
		
		// !$goodType ? $data['styleLink'] = '../' : $data['styleLink'] = '../../';
		$this->load->view('mobile-menu');
		$this->load->view('templates/header', $data);
		$this->load->view('top-pannel/top-pannel');
		$this->load->view('pages/main', $data);
		$this->load->view('categories/index', $data);
		$this->load->view('templates/welcome');
		$this->load->view('advantages/advantages');
		$this->load->view('slider-categories/slider-Categories');
		$this->load->view('goods/goods', $data);
		$this->load->view('news_form/news_form');
		$this->load->view('templates/footer', $data);
	}
}
