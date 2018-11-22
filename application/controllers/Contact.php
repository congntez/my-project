<?php

class Contact extends Homepage_layout {

	function __construct() {
		parent::__construct();
		$this->set_data_part("title", "Liên hệ", FALSE);

		$this->load_more_css("public/assets/plugins-bower/wow/css/libs/animate.css");
		$this->load_more_css("public/assets/css/builder/materialize_custom.css");
		$this->load_more_css("public/assets/plugins-bower/owl.carousel/dist/assets/owl.carousel.css");
		$this->load_more_css("public/assets/css/homepage/homepage.css");
		$this->load_more_css("public/assets/css/homepage/website.css");

		$this->load_more_js("public/assets/js/homepage/homepage.js", TRUE);
		$this->load_more_js("public/assets/plugins-bower/owl.carousel/dist/owl.carousel.js", TRUE);

	}

	public function index() {
		$data = array();
		$this->load->model('m_products_management');
		$this->load->model('m_categories_management');


		$data['categories'] = $this->m_categories_management->get_all();
		$data['products'] = $this->m_products_management->get_all();
		$data['accessories'] = $this->m_products_management->get_many_by('cat_id', '2');
		$data['glasses'] = $this->m_products_management->get_many_by('cat_id', '1');
		$data_menu = array();
		$data_menu['link_login'] = site_url('login');

		$this->load->model('m_user_management');
		$this->load->model('m_order');

		if (!empty($this->session->userdata('user_id'))) {
			$user_id = $this->session->userdata('user_id');
			$data_menu['count_cart'] = count($this->m_order->get_many_by('customer_id', $user_id));
		}
		else {
			$data_menu['count_cart'] = 0;
		}

		if (!isset($_SESSION['username_sess'])) {
			$data_menu['link_register'] = site_url('login');
		}
		else {
			$data_menu['link_register'] = site_url('tour');
		}

		$data_footer = array();
		$data_menu['path_image'] = base_url('public/assets/images/');
		$data_menu['categories'] = $this->m_categories_management->get_all();
		foreach ($data['categories'] as $value) {
			$value->count_prod = $this->m_products_management->count_by(['cat_id' => $value->id]);
		}
		$data_footer['path_image'] = base_url('public/assets/images/homepage/');

		$data['menu'] = $this->load->view("homepage/menu", $data_menu, TRUE);
		$data['ft'] = $this->load->view("homepage/footer", $data_footer, TRUE);
		$content = $this->load->view("homepage/contact", $data, TRUE);

		$this->show_page($content);
	}
}

?>