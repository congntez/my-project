<?php
/**
 * Created by IntelliJ IDEA.
 * User: phamtrong
 * Date: 3/17/16
 * Time: 11:16
 */

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


abstract class Admin_layout extends Base_layout {

	protected $role_allow = 'admin';

	function __construct() {
		parent::__construct();
		$this->_set_side_bar_left();
		$this->_set_top_bar();
		$this->check_role();
		$this->check_login();
	}

	private function _set_side_bar_left() {
		if($this->session->userdata('role_id') == 2) {
			$menu[] = Array(
				"text" => "Quản lý đơn hàng",
				"icon" => "fa-file-text",
				"url"  => site_url('order')
			);
		}
		else {
			$menu[] = Array(
				"text" => "Quản lý người dùng",
				"icon" => "fa-user-circle",
				"url"  => site_url('user_management'),
			);

			$menu[] = Array(
				"text" => "Danh mục sản phẩm",
				"icon" => "fa-list-alt",
				"url"  => site_url('categories_management')
			);

			$menu[] = Array(
				"text" => "Quản lý sản phẩm",
				"icon" => "fa-cart-plus",
				"url"  => site_url('products_management')
			);

			$menu[] = Array(
				"text" => "Quản lý đơn hàng",
				"icon" => "fa-file-text",
				"url"  => site_url('order')
			);


			$menu[] = Array(
				"text" => "Quản lý video",
				"icon" => "fa-youtube",
				"url"  => site_url('video_management')
			);
		}

		$data = Array(
			'view_file' => "admin/base_layout/side_bar_left",
			'menu_data' => $menu,
		);
		$this->set_data_part('side_bar_left', $data, TRUE);
	}

	private function _set_top_bar() {
		$data = Array(
			'view_file' => "admin/base_layout/top_bar",
		);
		$this->set_data_part('top_bar', $data, TRUE);
	}

	public function check_role() {
		if (!empty($this->session->userdata('role_id'))) {
			if ($this->session->userdata('role_id') == '3' || $this->session->userdata('role_id') == 2) {
				return TRUE;
			}
			else {
				show_error('Bạn không có quyền truy cập!');
			}
		}
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
