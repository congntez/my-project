<?php

class All_collection extends Homepage_layout {

	function __construct() {
		parent::__construct();
		$this->set_data_part("title", "Trang chủ", FALSE);
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

	public function categories($categories) {
		$data = array();
		$this->load->model('m_products_management');
		$this->load->model('m_categories_management');

		$data['categories'] = $this->m_categories_management->get_all();
		foreach ($data['categories'] as $value) {
			$value->count_prod = $this->m_products_management->count_by(['cat_id' => $value->id]);
		}

		$data['products'] = $this->m_products_management->get_all();
		$data['products'] = $this->m_products_management->get_many_by([
			'cat_id'=> $categories,
		]);

		if (!empty($data['products']) && $data['products'] !== '') {
			foreach (($data['products']) as $value) {
				$old_price = floatval(str_replace(',', '',$value->old_price));
				$price = floatval(str_replace(',', '',$value->price));
				$sale = ceil((($old_price - $price) / $old_price) * 100);
				$value->sale = 'sale off ' . $sale . '%';

				$data['categories_id'] = $value->cat_id;
				$data['supply_id'] = '';
				$value->convert_name = $this->_utf_convert($value->name);
			}
		}
		else {
			$data['categories_id'] = '';
			$data['supply_id'] = '';
		}

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
		$data_footer['path_image'] = base_url('public/assets/images/homepage/');

		$data['menu'] = $this->load->view("homepage/menu", $data_menu, TRUE);
		$data['ft'] = $this->load->view("homepage/footer", $data_footer, TRUE);
		$content = $this->load->view("homepage/all_collection", $data, TRUE);

		$this->show_page($content);
	}

	protected function _utf_convert($str) {
		if (!$str) return FALSE;
		$utf8 = array(
			'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'd' => 'đ|Đ',
			'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'i' => 'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
			'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			'y' => 'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
		);
		foreach ($utf8 as $ascii => $uni) {
			$str = preg_replace("/($uni)/i", $ascii, $str);
		}
		$str = preg_replace('/[^A-Za-z0-9\-]/', '-', $str);
		$str = str_replace("--", "-", $str);
		$str = str_replace("---", "-", $str);
		$str = strtolower($str);

		return $str;
	}

//	public function categories_details($categories, $manufacturer) {
//		$data = array();
//		$this->load->model('m_products_management');
//		$this->load->model('m_categories_management');
//		$this->load->model('m_supplier_management');
//
//		$data['categories'] = $this->m_categories_management->get_all();
//		$data['type'] = $this->m_supplier_management->get_all();
//
//		$data['products'] = $this->m_products_management->get_all();
//		$data['products'] = $this->m_products_management->get_many_by([
//			'cat_id'=> $categories,
//			'sup_id'=> $manufacturer,
//		]);
//
//		if (!empty($data['products']) && $data['products'] !== '') {
//			foreach (($data['products']) as $value) {
//				$data['categories_id'] = $value->cat_id;
//				$data['supply_id'] = $value->sup_id;
//			}
//		}
//		else {
//			$data['categories_id'] = '';
//			$data['supply_id'] = '';
//		}
//
//		$data_menu = array();
//		$data_menu['link_login'] = site_url('login');
//
//		$this->load->model('m_user_management');
//		$this->load->model('m_order');
//
//		if(!empty($this->session->userdata('user_id'))) {
//			$user_id = $this->session->userdata('user_id');
//			$data_menu['user'] = $this->m_user_management->get_by('id', $user_id);
//			$data_menu['count_cart'] = count($this->m_order->get_many_by('customer_name', $data_menu['user']->username));
//		}
//		else {
//			$data_menu['count_cart'] = 0;
//		}
//
//		if (!isset($_SESSION['username_sess'])) {
//			$data_menu['link_register'] = site_url('login');
//		}
//		else {
//			$data_menu['link_register'] = site_url('tour');
//		}
//
//		$data_footer = array();
//		$data_menu['path_image'] = site_url('public/assets/images/');
//		$data_footer['path_image'] = site_url('public/assets/images/homepage/');
//
//		$data['menu'] = $this->load->view("homepage/menu", $data_menu, TRUE);
//		$data['ft'] = $this->load->view("homepage/footer", $data_footer, TRUE);
//		$content = $this->load->view("homepage/all_collection", $data, TRUE);
//
//		$this->show_page($content);
//	}

}

?>