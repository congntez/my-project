<?php

class Product_detail extends Homepage_layout {

	function __construct() {
		parent::__construct();
		$this->set_data_part("title", "Chi tiết sản phẩm", FALSE);
//		if (!isset($_SESSION['username_sess'])) {
//			$data_menu['link_register'] = site_url('register');
//		}
//		else {
//			$data_menu['link_register'] = site_url('tour');
//		}
	}

	public function buy($id, $name) {
//		$this->check_login();
		$this->load->model('m_products_management');

		$data = array();
		$data['products_detail'] = $this->m_products_management->get_by([
			'id' => $id
		]);
		$old_price = floatval(str_replace(',', '',$data['products_detail']->old_price));
		$price = floatval(str_replace(',', '',$data['products_detail']->price));
		$sale = ceil((($old_price - $price) / $old_price) * 100);
		$data['products_detail']->sale = 'sale off ' . $sale . '%';

		if (!empty($data['products_detail']) && $data['products_detail'] !== '') {
			$data['categories_id'] = $data['products_detail']->cat_id;
		}
		else {
			$data['categories_id'] = '';
		}
		$this->load->model('m_categories_management');
		$data['categories'] = $this->m_categories_management->get_all();

		$data['categories_prod'] = $this->m_categories_management->get_by('id', $data['products_detail']->cat_id);

		$this->load_more_css("public/assets/plugins-bower/wow/css/libs/animate.css");
		$this->load_more_css("public/assets/css/builder/materialize_custom.css");
		$this->load_more_css("public/assets/plugins-bower/owl.carousel/dist/assets/owl.carousel.css");
		$this->load_more_css("public/assets/css/homepage/homepage.css");
		$this->load_more_css("public/assets/css/homepage/website.css");

		$this->load_more_js("public/assets/js/homepage/homepage.js", TRUE);
		$this->load_more_js("public/assets/plugins-bower/owl.carousel/dist/owl.carousel.js", TRUE);

		$data_menu = array();
		$this->load->model('m_user_management');
		$this->load->model('m_order');
		$this->load->model('m_products_management');
		$this->load->model('m_categories_management');

		$data['products'] = $this->m_products_management->get_all();
		foreach ($data['products'] as $value) {
			$old_price = floatval(str_replace(',', '',$value->old_price));
			$price = floatval(str_replace(',', '',$value->price));
			$sale = ceil((($old_price - $price) / $old_price) * 100);
			$value->sale = 'sale off ' . $sale . '%';
		}

		if (!empty($this->session->userdata('user_id'))) {
			$user_id = $this->session->userdata('user_id');
			$data_menu['count_cart'] = count($this->m_order->get_many_by('customer_id', $user_id));
		}
		else {
			$data_menu['count_cart'] = 0;
		}
		$data_menu['link_login'] = site_url('login');
		$data_menu['link_register'] = site_url('register');

		$data_footer = array();
		$data_menu['path_image'] = base_url('public/assets/images/');


		$data['menu'] = $this->load->view("homepage/menu", $data_menu, TRUE);
		$data['ft'] = $this->load->view("homepage/footer", $data_footer, TRUE);
		$data_footer['path_image'] = base_url('assets/images/homepage/');
		$data['products'] = $this->m_products_management->get_all();
		foreach ($data['categories'] as $value) {
			$value->count_prod = $this->m_products_management->count_by(['cat_id' => $value->id]);
		}
		$content = $this->load->view("homepage/products_detail", $data, TRUE);

		$this->show_page($content);
	}
}

?>