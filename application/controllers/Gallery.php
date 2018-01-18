<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index() {
		$this->template->title = 'Gallery | Mandiri Finance';
		$data = '';
		$this->template->content->view('vgallery', $data);
		$this->template->publish();
	}

}