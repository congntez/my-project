<?php

class Home extends Homepage_layout {

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

	public function index() {
		$data = array();
		$this->load->model('m_products_management');
		$this->load->model('m_categories_management');


		$data['categories'] = $this->m_categories_management->get_all();
		foreach ($data['categories'] as $value) {
			$value->count_prod = $this->m_products_management->count_by(['cat_id' => $value->id]);
		}
		$data['products'] = $this->m_products_management->get_all();
		foreach ($data['products'] as $value) {
			$old_price = floatval(str_replace(',', '',$value->old_price));
			$price = floatval(str_replace(',', '',$value->price));
			$sale = ceil((($old_price - $price) / $old_price) * 100);
			$value->sale = 'sale off ' . $sale . '%';
		}
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
		$data_footer['path_image'] = base_url('public/assets/images/homepage/');

		$data['menu'] = $this->load->view("homepage/menu", $data_menu, TRUE);
		$data['ft'] = $this->load->view("homepage/footer", $data_footer, TRUE);
		$content = $this->load->view("homepage/home", $data, TRUE);

		$this->show_page($content);
	}

	public function add_to_cart($pro_id = 0) {

		$data_post = $this->input->post();

		$count = $data_post['count'];
		$count = (int)$count;
		$name = $data_post['name'];
		$address = $data_post['address'];
		$phone = $data_post['phone'];
		$size = $data_post['size'];

		$this->load->model('m_products_management');
		$this->load->model('m_user_management');
		$this->load->model('m_order');
		$product_info = $this->m_products_management->get($pro_id);
		$product_price = str_replace('.', '', $product_info->price);
		$product_price = str_replace(',', '', $product_price);
		$product_price = (int)$product_price;
		$total_price = $product_price * $count;
		$total_price = number_format($total_price) . ' ' . 'VNĐ';
		$time = new DateTime();
		$time = $time->format('Y-m-d H:i:s');

		$user_order_id = $this->session->userdata('user_id');
//		$user_info = $this->m_user_management->get($user_order_id);

		$data_insert = array(
			'customer_id'      => $user_order_id,
			'prod_name'        => $product_info->name,
			'prod_code'        => $product_info->code,
			'count'            => $count,
			'size'            => $size,
			'prod_price'       => $product_info->price . ' ' . 'VNĐ',
			'total_price'      => $total_price,
			'customer_name'    => $name,
			'customer_phone'   => $phone,
			'customer_address' => $address,
			'time'             => $time,
			'status'           => 'Đang chờ liên hệ',
		);

		$insert_id = $this->m_order->insert($data_insert, TRUE);
		if ($insert_id) {
			$data_return['redirect_url'] = site_url('cart');
			$data_return['msg'] = 'Đặt hàng thành công!';
			$data_return["state"] = 1;
			echo json_encode($data_return);

			return TRUE;
		}
		else {
			// fail
			$data_return['msg'] = 'Đặt hàng thất bại!';
			$data_return["state"] = 0;
			echo json_encode($data_return);

			return TRUE;
		}
	}
}

?>