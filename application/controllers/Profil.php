<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function mfi() {
		$this->template->title = 'Profil | Mandiri Finance';
		$data = '';
		$this->template->content->view('profil/vmfi', $data);
		$this->template->publish();
	}

	public function vm() {
		$this->template->title = 'Visi & Misi | Mandiri Finance';
		$data = '';
		$this->template->content->view('profil/vvm', $data);
		$this->template->publish();
	}

	public function pengurus() {
		$this->template->title = 'Pengurus | Mandiri Finance';
		$data = '';
		$this->template->content->view('profil/vpengurus', $data);
		$this->template->publish();
	}

	public function kantor() {
		$this->template->title = 'Kantor Cabang & Pusat | Mandiri Finance';
		$data = '';
		$this->template->content->view('profil/vkantor', $data);
		$this->template->publish();
	}
}
