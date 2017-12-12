<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function index() {
		$this->template->title = 'MFI';
		$data = '';
		$this->template->content->view('vlayanan', $data);
		$this->template->publish();
	}
}