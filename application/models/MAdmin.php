<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function validUserPass($sEmail, $sPass)
	{
		$xSQL = ("
			SELECT fs_email, fs_password
			FROM tm_admin
			WHERE fs_email = '".trim($sEmail)."'
			AND fs_password = '".trim($sPass)."'
		");

		$sSQL = $this->db->query($xSQL);
		return $sSQL->row();
	}

}