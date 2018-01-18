<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlpanel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('admin') <> TRUE) {
			redirect('admin');
		}
	}

	public function index() {
		$this->template->title = 'Control Panel | Mandiri Finance';
		$data = '';
		$this->template->content->view('vcontrolpanel', $data);
		$this->template->publish();
	}

	public function news() {
		$this->template->title = 'Control Panel | Mandiri Finance';
		$data = '';
		$this->template->content->view('admin/vnews', $data);
		$this->template->publish();
	}

	public function gallery() {
		$this->template->title = 'Control Panel | Mandiri Finance';
		$this->template->stylesheet->add('assets/css/jquery.dm-uploader.min.css');
		$this->template->javascript->add('assets/js/jquery.dm-uploader.min.js');
		$this->template->javascript->add('assets/js/ui-multiple.js');
		$this->template->javascript->add('assets/js/include/basic.js');
		$data = '';
		$this->template->content->view('admin/vgallery', $data);
		$this->template->publish();
	}

	public function submitnews() {

	}

	public function uploadphoto() {
		if(!empty($_FILES['filePhoto']['name'])) {
			$config['upload_path'] = './uploads/';
			$config['max_size'] = 1000;
			$config['allowed_types'] = 'png|jpg|jpeg';
			$config['file_name'] = $_FILES['filePhoto']['name'];
			$config['encrypt_name'] = TRUE;
			$config['file_ext_tolower'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('filePhoto')) {
				$file = $this->upload->data();
				$filename = $file['file_name'];
			} else {
				$response = array(
					'success' => false,
					'msg' => $this->upload->display_errors()
				);
				echo json_encode($response);
			}
		}
	}
}