<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

	public function index() {
		$this->template->title = 'MFI';
		$data = '';
		$this->template->content->view('vhubungi', $data);
		$this->template->publish();
	}
}