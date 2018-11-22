<?php

/**
 * Created by IntelliJ IDEA.
 * User: downk
 * Date: 25/08/2017
 * Time: 09:25 PM
 */
class Products_management extends Manager_base {
	function __construct() {
		parent::__construct();
		$this->load->model("m_products_management");
		$this->set_data_part("title", "Quản lý sản phẩm", FALSE);
		$this->load->library('Excel_lib');
	}

	function setting_class() {
		$this->name = array(
			"class"  => "products_management",
			"view"   => "products_management",
			"model"  => "m_products_management",
			"object" => "Danh mục"
		);
	}

	public function index() {
		$data["export_product"] = site_url('products_management/export_product');
		$data["export_order"] = site_url('order/export_order');
		return parent::manager($data);
	}

	public function export_product() {
		$data_return['callback'] = "responseExportProduct";

		$data_excel = $this->model->get_all();
		$data['excel_data_product'] = $data_excel;

		$file = $this->excel_lib->_export_product($data);

		$data_return["state"] = 1;
		$data_return["file"] = $file;

		echo json_encode($data_return);

		return !0;
	}

}