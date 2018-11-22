<?php

/**
 * Created by IntelliJ IDEA.
 * User: downk
 * Date: 25/08/2017
 * Time: 09:25 PM
 */
class Categories_management extends Manager_base {
	function __construct() {
		parent::__construct();
		$this->load->model("m_categories_management");
		$this->set_data_part("title", "Quản lý danh mục", FALSE);
	}

	function setting_class() {
		$this->name = array(
			"class"  => "categories_management",
			"view"   => "categories_management",
			"model"  => "m_categories_management",
			"object" => "Danh mục"
		);
	}

	public function index() {
		$data["export_order"] = site_url('order/export_order');
		$data["export_product"] = site_url('products_management/export_product');
		return parent::manager($data);
	}
}