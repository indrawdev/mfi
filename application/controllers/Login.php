<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->template->title = 'Masuk | Mandiri Finance';
		$this->template->javascript->add('assets/js/include/login.js');
		
		$this->load->helper('captcha');
		$this->load->database();

		$vals = array(
			'word' => 'Random word',
			'img_path' => './temp/captcha/',
			'img_url' => './temp/captcha/',
			'img_width' => 150,
			'img_height' => 30,
			'expiration' => 7200,
			'word_length' => 5,
			'img_id' => 'Imageid',
			'pool' => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
		);
		$cap = create_captcha($vals);

		if ($cap) {
			$dt = array(
				''
			);
		}

		$data['cap'] = $cap['image'];
		$this->template->content->view('vlogin', $data);
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
			$this->load->model('MLogin');
			$sSQL = $this->MLogin->validUserPass($email, $xpass);
			if (!empty($sSQL)) {
				// SET SESSION
				$session = array(
					'login'	=> TRUE,
					'username' => $this->encryption->encrypt($sSQL->fs_email),
					'password' => $this->encryption->encrypt($sSQL->fs_password)
				);
				$this->session->set_userdata($session);
				$data['response'] = 'success';
				$data['redirect'] = 'dashboard';

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
		redirect('login');
	}

}