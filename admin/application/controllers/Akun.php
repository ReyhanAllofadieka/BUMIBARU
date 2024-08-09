<?php 

class Akun extends CI_Controller
{
	function __construct() {
		parent::__construct();

		if (!$this->session->userdata("id_admin")) {
			redirect('/','refresh');
		}
	}
	
	function index()
	{
		$inputan = $this->input->post();

		$this->load->view('header');
		$this->load->view('akun');
		$this->load->view('footer');
	}

	function ubah() {
		$inputan = $this->input->post();

		if ($inputan) {
			$this->load->model('Madmin');
			$id_admin = $this->session->userdata("id_admin");
			$this->Madmin->ubah($inputan,$id_admin);

			$this->session->set_flashdata('pesan_sukses', 'Akun telah diubah');
			redirect('akun','refresh');
		}
		$this->load->view('header');
		$this->load->view('ubah_akun');
		$this->load->view('footer');
	}

	function ubahpass() {
		$inputan = $this->input->post();

		if ($inputan) {
			$this->load->model('Madmin');
			$id_admin = $this->session->userdata("id_admin");
			$this->Madmin->ubahpass($inputan,$id_admin);

			$this->session->set_flashdata('pesan_sukses', 'Password telah diubah');
			redirect('home','refresh');
		}
	}
}
 ?>