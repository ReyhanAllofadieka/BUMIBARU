<?php 
	class Logout extends CI_Controller
	{
		function index()
		{
			$this->session->unset_userdata("id_user");
			$this->session->unset_userdata("nama_user");
			$this->session->unset_userdata("password_user");
			$this->session->unset_userdata("nama_user");

			$this->session->set_flashdata('pesan_sukses', 'Anda telah logout');
			redirect('welcome','refresh');
		}
	}
 ?>