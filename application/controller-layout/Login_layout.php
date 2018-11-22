<?php 
abstract class Login_layout extends Base_layout {
	function __construct() {
		parent::__construct();
		$this->set_data_part("side_bar_left", "", FALSE);
		$this->set_data_part("footer", "", FALSE);
		$this->set_data_part("top_bar", "", FALSE);
        $this->set_data_part("assets_header", ['view_file' => "homepage/assets_header"], FALSE);
        $this->set_data_part("assets_footer", ['view_file' => "homepage/assets_footer"], FALSE);
	}

	protected function redirect_to_login() {
		$login_link = site_url("login");
		$this->session->set_userdata('redirect_login', current_url());
		$this->session->set_flashdata("msg", "<div class='alert alert-warning'>Required login!</div>");
		redirect($login_link);
	}

	public function check_login() {
		if (empty($this->session->userdata('user_id'))) {
			$this->redirect_to_login();
		}
		else {
			return TRUE;
		}
	}
}
?>