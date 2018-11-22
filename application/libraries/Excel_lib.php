<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Libary handle action about Excel
 *
 * @author: DownK
 * @date  : 25/08/2017
 * @time  : 09:25 PM
 */
require_once APPPATH . "/third_party/PHPExcel/PHPExcel.php";

class Excel_lib extends PHPExcel {
	protected $_ci;

	public function __construct() {
		$this->_ci = &get_instance();

		parent::__construct();
	}

	public function _export_order($data = array()) {
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator('CockStock')
			->setLastModifiedBy('Ezimar')
			->setKeywords('Danh sách đơn đặt hàng')
			->setDescription('Danh sách đơn đặt hàng');

		// Set font
		$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');

		$objPHPExcel->getActiveSheet()->mergeCells('A1:K1');
		$objPHPExcel->getActiveSheet()->mergeCells('A2:K2');
		$objPHPExcel->getActiveSheet()->mergeCells('A3:K3');

		$style = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			)
		);
		$sheet = $objPHPExcel->getActiveSheet();
		$sheet->setTitle("Danh sách");
		$sheet->getStyle("A1:K1")->applyFromArray($style);
		$sheet->getStyle("A2:K2")->applyFromArray($style);
		$sheet->getStyle("A3:K3")->applyFromArray($style);

		$sheet->getColumnDimension('A')->setWidth(5);
		$sheet->getColumnDimension('B')->setWidth(20);
		$sheet->getColumnDimension('C')->setWidth(10);
		$sheet->getColumnDimension('D')->setWidth(10);
		$sheet->getColumnDimension('E')->setWidth(10);
		$sheet->getColumnDimension('F')->setWidth(10);
		$sheet->getColumnDimension('G')->setWidth(20);
		$sheet->getColumnDimension('H')->setWidth(20);
		$sheet->getColumnDimension('I')->setWidth(20);
		$sheet->getColumnDimension('J')->setWidth(20);
		$sheet->getColumnDimension('K')->setWidth(20);

		// Row tiêu đề
		$sheet->setCellValue('A1', 'Danh sách đơn hàng Cobee Shop')
			->setCellValue('A2', 'Cobee Shop')
			->setCellValue('A3', 'Số điện thoại: 0972898496 - Email: doanphuong1996.hp@gmail.com')
			->setCellValue('A4', 'STT')
			->setCellValue('B4', 'Tên sản phẩm')
			->setCellValue('C4', 'Size')
			->setCellValue('D4', 'Số lượng')
			->setCellValue('E4', 'Đơn giá')
			->setCellValue('F4', 'Thành tiền')
			->setCellValue('G4', 'Tên khách hàng')
			->setCellValue('H4', 'Số điện thoại')
			->setCellValue('I4', 'Địa chỉ')
			->setCellValue('J4', 'Tình trạng đơn')
			->setCellValue('K4', 'Thời gian đặt hàng');

		$row = 5;
		$total_record = 0;

		foreach ($data['excel_data'] as $key => $value) {
			$sheet->setCellValue('A' . $row, $value->id)
				->setCellValue('B' . $row, $value->prod_name)
				->setCellValue('C' . $row, $value->size)
				->setCellValue('D' . $row, $value->count)
				->setCellValue('E' . $row, $value->prod_price)
				->setCellValue('F' . $row, $value->total_price)
				->setCellValue('G' . $row, $value->customer_name)
				->setCellValue('H' . $row, $value->customer_phone)
				->setCellValue('I' . $row, $value->customer_address)
				->setCellValue('J' . $row, $value->status)
				->setCellValue('K' . $row, date("d/m/Y | H:i:s", strtotime($value->time)));

			$row++;
			$total_record++;
		}

		$row++;
		$sheet->setCellValue('A' . $row, "Tổng")
			->setCellValue('B' . $row, $total_record);

		// Xuất ra file excel
		$sheet_writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		ob_start();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="danh-sach-don-hang' . '.xls"');
		header('Cache-Control: max-age=0');
		$sheet_writer->save('php://output');
		$xlsData = ob_get_contents();
		ob_end_clean();

		$result = "data:application/vnd.ms-excel;base64," . base64_encode($xlsData);

		return $result;
	}

	public function _export_product($data = array()) {
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator('CockStock')
			->setLastModifiedBy('Ezimar')
			->setKeywords('Danh sách đơn đặt hàng')
			->setDescription('Danh sách đơn đặt hàng');

		// Set font
		$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');

		$objPHPExcel->getActiveSheet()->mergeCells('A1:K1');
		$objPHPExcel->getActiveSheet()->mergeCells('A2:K2');
		$objPHPExcel->getActiveSheet()->mergeCells('A3:K3');

		$style = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			)
		);
		$sheet = $objPHPExcel->getActiveSheet();
		$sheet->setTitle("Danh sách");
		$sheet->getStyle("A1:K1")->applyFromArray($style);
		$sheet->getStyle("A2:K2")->applyFromArray($style);
		$sheet->getStyle("A3:K3")->applyFromArray($style);

		$sheet->getColumnDimension('A')->setWidth(5);
		$sheet->getColumnDimension('B')->setWidth(20);
		$sheet->getColumnDimension('C')->setWidth(20);
		$sheet->getColumnDimension('D')->setWidth(10);
		$sheet->getColumnDimension('E')->setWidth(10);
		$sheet->getColumnDimension('F')->setWidth(10);
		$sheet->getColumnDimension('G')->setWidth(20);
		$sheet->getColumnDimension('H')->setWidth(20);
		$sheet->getColumnDimension('I')->setWidth(20);
		$sheet->getColumnDimension('J')->setWidth(20);
		$sheet->getColumnDimension('K')->setWidth(20);

		// Row tiêu đề
		$sheet->setCellValue('A1', 'Danh sách đơn hàng Cobee Shop')
			->setCellValue('A2', 'Cobee Shop')
			->setCellValue('A3', 'Số điện thoại: 0972898496 - Email: doanphuong1996.hp@gmail.com')
			->setCellValue('A4', 'STT')
			->setCellValue('B4', 'Tên sản phẩm')
			->setCellValue('C4', 'Tính trạng')
			->setCellValue('D4', 'Mô tả')
			->setCellValue('E4', 'Giá cũ')
			->setCellValue('F4', 'Giá khuyến mãi');
		$row = 5;
		$total_record = 0;

		foreach ($data['excel_data_product'] as $key => $value) {
			if($value->status == 0) {
				$status = 'Còn hàng';
			}
			else {
				$status = 'Tạm hết hàng';
			}
			$sheet->setCellValue('A' . $row, $value->id)
				->setCellValue('B' . $row, $value->name)
				->setCellValue('C' . $row, $status)
				->setCellValue('D' . $row, $value->description)
				->setCellValue('E' . $row, $value->old_price)
				->setCellValue('F' . $row, $value->price);
			$row++;
			$total_record++;
		}

		$row++;
		$sheet->setCellValue('A' . $row, "Tổng")
			->setCellValue('B' . $row, $total_record);

		// Xuất ra file excel
		$sheet_writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		ob_start();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="danh-sach-don-hang' . '.xls"');
		header('Cache-Control: max-age=0');
		$sheet_writer->save('php://output');
		$xlsData = ob_get_contents();
		ob_end_clean();

		$result = "data:application/vnd.ms-excel;base64," . base64_encode($xlsData);

		return $result;
	}
}