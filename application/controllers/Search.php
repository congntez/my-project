<?php

class Search extends Homepage_layout {

	function __construct() {
		parent::__construct();
		if (!isset($_SESSION['username_sess'])) {
			$data_menu['link_register'] = site_url('register');
		}
		else {
			$data_menu['link_register'] = site_url('tour');
		}

		$this->load_more_css("public/assets/plugins-bower/wow/css/libs/animate.css");
		$this->load_more_css("public/assets/css/builder/materialize_custom.css");
		$this->load_more_css("public/assets/plugins-bower/owl.carousel/dist/assets/owl.carousel.css");
		$this->load_more_css("public/assets/css/homepage/homepage.css");
		$this->load_more_css("public/assets/css/homepage/website.css");

		$this->load_more_js("public/assets/js/homepage/homepage.js", TRUE);
		$this->load_more_js("public/assets/plugins-bower/owl.carousel/dist/owl.carousel.js", TRUE);
		$this->load->model('m_products_management');
		$this->load->model('m_user_management');
		$this->load->model('m_order');
	}

	public function index() {
		$data = array();

		$search = $this->input->post('search');
		$result = $this->m_products_management->get_search($search);
		$data['result'] = $result;
		$data_return['html'] = $this->load->view("homepage/search", $data, TRUE);

		echo json_encode($data_return);

		return !0;
	}
}

?>