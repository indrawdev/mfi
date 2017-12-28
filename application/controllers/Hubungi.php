<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

	public function index() {
		$this->template->title = 'Hubungi Kami | Mandiri Finance';
		$this->template->javascript->add('assets/js/include/hubungi.js');
		$data = '';
		$this->template->content->view('vhubungi', $data);
		$this->template->publish();
	}

	public function iskirim() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fs_nama_lengkap', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('fs_email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('fs_subjek', 'Subjek', 'trim|required');
		$this->form_validation->set_rules('fs_pesan', 'Pesan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['response'] = 'failed';
			$data['message'] = validation_errors();
			echo json_encode($data);
		} else {
			$nama = $this->input->post('fs_nama_lengkap');
			$email = $this->input->post('fs_email');
			$subjek = $this->input->post('fs_subjek');
			$pesan = $this->input->post('fs_pesan');
			$ip_address = $this->input->ip_address();

			$insert = array(
				'fs_nama_lengkap' => trim($nama),
				'fs_email' => trim($email),
				'fs_subjek' => trim($subjek),
				'fs_pesan' => trim($pesan),
				'ip_address' => trim($ip_address),
				'fd_tanggal_buat' => date('Y-m-d H:i:s')
			);
			$this->load->database();
			$this->db->insert('tm_hubungi', $insert);

			$data['response'] = 'success';
			$data['message'] = 'Pesan telah dikirim...';
			echo json_encode($data);
		}
	}
}