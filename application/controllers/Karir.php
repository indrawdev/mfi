<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

	public function index() {
		$this->template->title = 'MFI';
		$data = '';
		$this->template->content->view('vkarir', $data);
		$this->template->publish();
	}
}