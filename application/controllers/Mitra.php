<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

	public function index() {
		$this->template->title = 'MFI';
		$data = '';
		$this->template->content->view('vmitra', $data);
		$this->template->publish();
	}
}