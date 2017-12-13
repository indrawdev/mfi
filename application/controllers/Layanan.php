<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function index() {
		$this->template->title = 'Layanan | Mandiri Finance';
		$data = '';
		$this->template->content->view('vlayanan', $data);
		$this->template->publish();
	}
}