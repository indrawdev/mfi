<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index() {
		$this->template->title = 'Daftar | Mandiri Finance';
		$this->template->javascript->add('assets/js/include/login.js');
		$data = '';
		$this->template->content->view('vdaftar', $data);
		$this->template->publish();
	}

}