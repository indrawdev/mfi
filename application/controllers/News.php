<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index() {
		$this->template->title = 'Berita | Mandiri Finance';
		$data = '';
		$this->template->content->view('vnews', $data);
		$this->template->publish();
	}

}