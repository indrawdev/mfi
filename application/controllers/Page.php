<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index() {
		$this->template->title = 'MFI';
		$this->template->stylesheet->add('assets/css/home.css', array('media' => 'all'));
		$data = '';
		$this->template->content->view('vpage', $data);
		$this->template->publish();
	}
}
