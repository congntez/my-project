<?php

class Register extends Login_layout {

	function __construct() {
		parent::__construct();
		$this->set_data_part("title", "Cobee Shop đăng ký", FALSE);
		$this->set_layout_body("homepage/layout_login_register");

		$this->load->model('M_register');
		$this->load->model('m_role');
	}

	public function index() {
		$this->load->model('m_role');
		$this->load_more_css("public/assets/plugins-bower/wow/css/libs/animate.css");
		$this->load_more_css("public/assets/css/homepage/homepage.css");
		$this->load_more_js("public/assets/js/homepage/homepage.js");

		$data = array();
		$data['role'] = $this->m_role->get_all();
		$data['path_image'] = base_url("public/assets/images/homepage/");
		$data['get_user'] = $this->input->get('newname');

		$content = $this->load->view("homepage/register", $data, TRUE);
		$this->show_page($content);
	}

	public function data_submitted() {
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$check_name = $this->M_register->check_name($username);
		$check_email = $this->M_register->check_email($email);

		if ($check_name == FALSE) {
			$data = array('status' => 'error_name');
		}
		else {
			if ($check_email == FALSE) {
				$data = array('status' => 'error_email');
			}
			else {
				$password_md5 = md5($password);
				$data = array('status' => 'success');
				$this->M_register->insert_user($username, $email, '1', $password_md5);
				$data['redirect'] = site_url('login');
				Header( "Location:" .  site_url('login'));
			}
		}

		echo json_encode($data);// trả kết quả trở dang json
		die;
	}
}

?>