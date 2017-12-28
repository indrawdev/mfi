<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index() {
		$this->template->title = 'Mandiri Finance | Melayani Lebih Baik';
		$this->template->stylesheet->add('assets/css/home.css', array('media' => 'all'));
		$this->template->javascript->add('assets/js/jquery.glide.min.js');
		$this->template->javascript->add('assets/js/include/home.js');
		$data = '';
		$this->template->content->view('vpage', $data);
		$this->template->publish();
	}
}
