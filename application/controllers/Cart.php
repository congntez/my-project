<?php

class Cart extends Homepage_layout {

	function __construct() {
		parent::__construct();

		$this->load->model('m_categories_management');
		$this->set_data_part("title", "Giỏ hàng", FALSE);
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

	}

	public function index() {
		$data = array();

		$this->load->model('m_order');
		$this->load->model('m_user_management');

		if(!empty($this->session->userdata('user_id'))) {
			$user_id = $this->session->userdata('user_id');
//			$data['user'] = $this->m_user_management->get_by('id', $user_id);
			$data['cart'] = $this->m_order->get_many_by('customer_id', $user_id);
		}
		else {
			$data['user'] = '';
			$data['cart'] = '';
		}


		$data_menu = array();

		if(!empty($this->session->userdata('user_id'))) {
			$user_id = $this->session->userdata('user_id');
//			$data_menu['user'] = $this->m_user_management->get_by('id', $user_id);
			$data_menu['count_cart'] = count($this->m_order->get_many_by('customer_id', $user_id));
		}
		else {
			$data_menu['user'] = '';
			$data_menu['count_cart'] = 0;
		}

		$data_menu['link_login'] = site_url('login');
		if (!isset($_SESSION['username_sess'])) {
			$data_menu['link_register'] = site_url('login');
		}
		else {
			$data_menu['link_register'] = site_url('tour');
		}

		$data_footer = array();
		$data_menu['path_image'] = base_url('public/assets/images/');
		$data_menu['categories'] = $this->m_categories_management->get_all();
		$data_footer['path_image'] = base_url('public/assets/images/homepage/');

		$data['menu'] = $this->load->view("homepage/menu", $data_menu, TRUE);
		$data['ft'] = $this->load->view("homepage/footer", $data_footer, TRUE);
		$content = $this->load->view("homepage/cart", $data, TRUE);

		$this->show_page($content);
	}

	public function delete($id) {
		$this->load->model('m_order');
		$affected_row = $this->m_order->delete_many($id);
		if ($affected_row) {
			$data_return["state"] = 1;
			$data_return["msg"] = "Hủy đơn hàng thành công";
			$data_return['redirect_url'] = site_url('cart');
		} else {
			$data_return["list_id"] = $id;
			$data_return["state"] = 0;
			$data_return["msg"] = "Hủy đơn hàng thất bại. Vui lòng tải lại trang!";
		}
		echo json_encode($data_return);
		return TRUE;
	}
}

?>