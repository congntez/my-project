<?php

class M_register extends Crud_manager {
	public function __construct() {
		parent::__construct();

	}

	public function insert_user($username, $email, $role_id, $password) {
		$data = array(
			'username' => $username,
			'email'    => $email,
			'role_id'  => $role_id,
			'password' => $password
		);

		$this->db->insert('users', $data);
	}

	public function check_name($username) {
		$check = $this->db->select("*")
			->where('username', $username)
			->get('users');
		// nếu username tồn tại thì return false;
		if ($check->num_rows() > 0) {
			return FALSE;
		}
		else {
			return TRUE;
		}
	}

	public function check_email($email) {
		$check = $this->db->select("*")
			->where('email', $email)
			->get('users');
		// nếu email tồn tại thì return false;
		if ($check->num_rows() > 0) {
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
}