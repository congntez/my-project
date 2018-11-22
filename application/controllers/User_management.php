<?php

/**
 * Created by IntelliJ IDEA.
 * User: downk
 * Date: 25/08/2017
 * Time: 09:25 PM
 */
class User_management extends Manager_base {
	function __construct() {
		parent::__construct();
		$this->load->model("m_user_management");
		$this->set_data_part("title", "Quản lý người dùng", FALSE);
	}

	function setting_class() {
		$this->name = array(
			"class"  => "user_management",
			"view"   => "user_management",
			"model"  => "m_user_management",
			"object" => "Người dùng"
		);
	}
	public function index() {
		$data["export_order"] = site_url('order/export_order');
		$data["export_product"] = site_url('products_management/export_product');
		return parent::manager($data);
	}
}