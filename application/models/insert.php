<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insert extends CI_Model {
	public function GetUser(){
		$arrData = array(
			'First' => $_POST['first'],
			'Last' => $_POST['last'],
			'gender' => $_POST['Gender'],
			'Alamat' => $_POST['alamat'],
			'Handphone' => $_POST['handphone'],
			'Password' => $_POST['password'],
		);
		$this->db->insert('user',$arrData);
	}
}
?>
