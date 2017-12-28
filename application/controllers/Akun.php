<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login') <> TRUE) {
			redirect('login');
		}
	}

	public function index() {
		$this->template->title = 'Akun | Mandiri Finance';
		$data = '';
		$this->template->content->view('vakun', $data);
		$this->template->publish();
	}
}