<?php 
    class AdminPage extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('admin_model');
            // $this->load->model('categories_model');
        }

        public function index() {
            $data['categories'] = $this->admin_model->get_categories();
            $tables_array = $this->db->list_tables();

            // $goods = [];
            // foreach($data['categories'] as $name => $value) {
            //     if (in_array($value['title'], $tables_array)) {
            //         $currentDBCategory = $this->admin_model->get_one_categoty($value['title']);
            //         $goods[$value['title']] = $currentDBCategory;
            //     }

            // }
            // print_r($goods);
            // $goods['Смартфоны'] = $this->admin_model->get_one_categoty('Смартфоны');
            // $goods['Ноутбуки'] = $this->admin_model->get_one_categoty('Ноутбуки');
            $data['goods'] = $this->admin_model->get_one_categoty('Товары');

            $this->load->view('templates/header');
            $this->load->view('pages/admin', $data);
            $this->load->view('templates/admin_footer');
        }

        public function update_delete($value) {

            if ($value === 'categories') {
                $query = $this->db->get(urldecode($value));
                $update_data = array('id' => $_POST['category__id'], 
                                     'title' => $_POST['category__name'],
                                     'description' => $_POST['category__desc'],
                                     'img' => $_POST['category__img'],
                                    'parent' => $_POST['category__parent']);
    
                    switch ($_POST['button']) {
                        case 'изменить':
                            $id = $_POST['category__id'];
                            $where = "id = $id";
                            $this->db->where('id', $id);
                            $string = $this->db->update('categories', $update_data);
                            header('Location: http://rudzpark-codeigniter/adminPage');
                            break;
                        case 'удалить':
                            $this->db->delete('categories', array('id' => $_POST['category__id']));
                            header('Location: http://rudzpark-codeigniter/adminPage');
                            break;
                    }
            } else {
                // print_r($_POST);
                $query = $this->db->get('Товары');
                $update_data = array('id' => $_POST['goods__id'], 
                                     'img' => $_POST['goods__img'],
                                     'rate' => $_POST['goods__rate'],
                                     'inStock' => $_POST['goods__in-stock'],
                                     'text' => $_POST['goods__text'],
                                     'price' => $_POST['goods__price'],
                                     'category' => $_POST['goods__category'] 
                                     );
    
                    switch ($_POST['button']) {
                        case 'изменить':
                            $id = $_POST['goods__id'];
                            // $where = "id = $id";
                            $this->db->where('id', $id);
                            $string = $this->db->update('Товары', $update_data);
                            header('Location: http://rudzpark-codeigniter/adminPage');
                            break;
                        case 'удалить':
                            $this->db->delete('Товары', array('id' => $_POST['goods__id']));
                            header('Location: http://rudzpark-codeigniter/adminPage');
                            break;
                    }
            }
            // echo var_dump($_POST);
            // echo '<br>';
            // echo var_dump(urldecode($value));

        }

        public function add($arg) {
            // echo print_r($_POST);
            // echo "<br>";
            // echo "arg: ".urldecode($arg);
            if ($_POST['button'] === 'Добавить запись' && urldecode($arg) === 'categories') {
                // echo 'categ-s';
                // if($_POST['category__name'] && $_POST['category__desc'] && $_POST['category__img']) {
                    $insert_data = array('title' => $_POST['category__name'],
                                         'description' => $_POST['category__desc'],
                                         'img' => $_POST['category__img'],
                                        'parent' => $_POST['category__parent']);
                    $this->db->insert('categories', $insert_data);
                    header('Location: http://rudzpark-codeigniter/adminPage');
                // }
            }

            if ($_POST['button'] === 'Добавить запись' && urldecode($arg) !== 'categories') {
                // echo 'Smartphones';
                $nameOfRow = urldecode($arg);
                if($_POST['img'] && $_POST['rate'] && $_POST['in-stock'] && $_POST['text'] && $_POST['price']) {
                    $insert_data = array('rate' => $_POST['rate'],
                                         'inStock' => $_POST['in-stock'],
                                         'text' => $_POST['text'],
                                         'price' => $_POST['price'],
                                         'img' => $_POST['img'],
                                         'category' => $nameOfRow);

                    $this->db->insert('Товары', $insert_data);
                    header('Location: http://rudzpark-codeigniter/adminPage');
                }
            }
        }
    }

    