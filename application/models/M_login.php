<?php
/**
 * Created by IntelliJ IDEA.
 * User: TienCongKT
 * Date: 8/10/2017
 * Time: 8:47 AM
 */
class M_login extends Crud_model {

	protected $_table = 'customer';
	public function __construct() {
		parent::__construct();

	}

//	public function select_user($username, $password) {
//		$data = array(
//			'username' => $username,
//			'password' => $password
//		);
//
//		$this->db->select('customer', $data);
//	}
//
//	public function check_name($username) {
//		$check = $this->db->select("*")
//			->where('username', $username)
//			->get('users');
//		// nếu username tồn tại thì return false;
//		if ($check->num_rows() == 0) {
//			return FALSE;
//		}
//		else {
//			return TRUE;
//		}
//	}
//
//	public function check_pass($password_md5) {
//		$check = $this->db->select("*")
//			->where('password', $password_md5)
//			->get('users');
//		// nếu email tồn tại thì return false;
//		if ($check->num_rows() == 0) {
//			return FALSE;
//		}
//		else {
//			return TRUE;
//		}
//	}
	public function get_info($username) {
		$user = $this->db->select("*")
			->where('username', $username)
			->get('users');
		// nếu email tồn tại thì return false;
		if ($user->num_rows() == 0) {
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
}