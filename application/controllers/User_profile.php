<?php

class User_profile extends Homepage_layout {

	function __construct() {
		parent::__construct();
		$this->set_data_part("title", "Thông tin tài khỏan", FALSE);
		if (!isset($_SESSION['username_sess'])) {
			$data_menu['link_register'] = site_url('register');
		}
		else {
			$data_menu['link_register'] = site_url('tour');
		}
	}

	public function index() {
		$data = array();

		$this->load->model('m_user_management');
		$user_book_id = $this->session->userdata('user_id');
		$data['user_info'] = $this->m_user_management->get($user_book_id);

		$this->load_more_css("public/assets/plugins-bower/wow/css/libs/animate.css");
		$this->load_more_css("public/assets/css/builder/materialize_custom.css");
		$this->load_more_css("public/assets/css/homepage/homepage.css");

		$this->load_more_js("public/assets/js/homepage/homepage.js", TRUE);
		$this->load_more_js("public/assets/js/homepage/user_action.js", TRUE);
		$this->load_more_js("public/assets/js/homepage/user_function.js", TRUE);

		$data_menu = array();
		$data_menu['link_login'] = site_url('login');
		if (!isset($_SESSION['username_sess'])) {
			$data_menu['link_register'] = site_url('login');
		}
		else {
			$data_menu['link_register'] = site_url('tour');
		}

		$data_footer = array();
		$data_menu['path_image'] = base_url('public/assets/images/');
		$data_footer['path_image'] = base_url('public/assets/images/homepage/');

		$data['menu'] = $this->load->view("homepage/menu", $data_menu, TRUE);
		$data['ft'] = $this->load->view("homepage/footer", $data_footer, TRUE);
		$content = $this->load->view("homepage/user_profile", $data, TRUE);

		$this->show_page($content);
	}
}

?>