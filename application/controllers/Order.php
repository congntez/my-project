<?php

class Order extends Manager_base {

	function __construct() {
		parent::__construct();
		$this->load->model("m_order");
		$this->set_data_part("title", "Quản lý đơn hàng", FALSE);
		$this->load->library('Excel_lib');
	}

	function setting_class() {
		$this->name = array(
			"class"  => "order",
			"view"   => "order",
			"model"  => "m_order",
			"object" => "Đặt hàng"
		);
	}

	public function index() {
		$data["export_order"] = site_url('order/export_order');
		$data["export_product"] = site_url('order/export_product');
		return parent::manager($data);
	}

	public function export_order() {
		$data_return['callback'] = "responseExportOrder";

		$data_excel = $this->model->get_all();
		$data['excel_data'] = $data_excel;

		$file = $this->excel_lib->_export_order($data);

		$data_return["state"] = 1;
		$data_return["file"] = $file;

		echo json_encode($data_return);

		return !0;
	}

}

?>