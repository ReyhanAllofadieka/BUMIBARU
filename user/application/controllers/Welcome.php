<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	// function __construct()
	// {
	// 	parent::__construct();

	// 	if ($this->session->userdata("id_user")) {
	// 		redirect('/', 'refresh');
	// 	}
	// }

	public function index()
	{
		$this->load->model("Martikel");

		$data['artikel'] = $this->Martikel->tampil();

		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}


}
