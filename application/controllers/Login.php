<?php

class Login extends Login_layout {

	function __construct() {
		parent::__construct();
		$this->set_data_part("title", "Cobee Shop đăng nhập", FALSE);
		$this->set_layout_body("homepage/layout_login_register");

		$this->load->model('M_login');
		$this->load->model('M_user_management', 'm_user_management');
	}
	public function index() {
		if (!empty($this->session->userdata('user_id'))) {
			redirect(site_url("home"));
		}
		$this->load_more_css("public/assets/plugins-bower/wow/css/libs/animate.css");
		$this->load_more_css("public/assets/css/builder/materialize_custom.css");
		$this->load_more_css("public/assets/css/homepage/homepage.css");
		$this->load_more_js("public/assets/js/homepage/homepage.js", TRUE);

		$data = array();
		$data['path_image'] = base_url("public/assets/images/homepage/");

		$content = $this->load->view("homepage/login", $data, TRUE);
		$this->show_page($content);
	}

	public function check_login() {
		$data_post = $this->input->post();

		$username = $data_post['username'];
		$password = md5($data_post['password']);
		$check_exist = $this->m_user_management->get_by(['username' => $username, 'password' => $password]);
		$data_return = array();
		if (!empty($check_exist)) {
			$data_return['state'] = "1";
			$data_return['msg'] = 'Đăng nhập thành công!';
			// todo: luu session
			$user_id = $check_exist->id;
			$role_id = $check_exist->role_id;
			$username = $check_exist->username;
			$this->session->set_userdata('user_id', $user_id);
			$this->session->set_userdata('role_id', $role_id);
			$this->session->set_userdata('username', $username);
			if ($role_id == '1') {
				$data_return['redirect_url'] = site_url('home');
			}
			else if ($role_id == '2') {
				$data_return['redirect_url'] = site_url('order');
			}
			else if ($role_id == '3') {
				$data_return['redirect_url'] = site_url('user_management');
			}
			echo json_encode($data_return);

			return TRUE;
		}
		else {
			$data_return['msg'] = 'Tài khoản hoặc mật khẩu không đúng!';
			$data_return["state"] = '0';
			echo json_encode($data_return);

			return TRUE;
		}
	}

	public function logout() {
		// Destroy the session
		$this->session->sess_destroy();
		redirect(site_url("login"));
	}
}

?>