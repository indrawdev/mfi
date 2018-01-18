<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$this->template->title = 'Admin Masuk | Mandiri Finance';
		$this->template->javascript->add('assets/js/include/admin.js');
		$data = '';
		$this->template->content->view('vadmin', $data);
		$this->template->publish();
	}

	public function islogin() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fs_email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('fs_password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['response'] = 'failed';
			$data['message'] = validation_errors();
			echo json_encode($data);
		} else {
			$email = $this->input->post('fs_email');
			$password = $this->input->post('fs_password');

			// ENCYRPT MD5
			$xpass = md5($password.$email);
			// CHECK EMAIL & PASSWORD

			$this->load->model('MAdmin');
			$sSQL = $this->MAdmin->validUserPass($email, $xpass);
			if (!empty($sSQL)) {
				$session = array(
					'admin' => TRUE,
					'username' => $this->encryption->encrypt($sSQL->fs_email),
					'password' => $this->encryption->encrypt($sSQL->fs_password)
				);
				$this->session->set_userdata($session);
				$data['response'] = 'success';
				$data['redirect'] = 'controlpanel';

				$data['message'] = 'Please wait...';
				echo json_encode($data);
			} else {
				$data['response'] = 'failed';
				$data['message'] = 'Akun tidak ada...';
				echo json_encode($data);
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('admin');
	}

}