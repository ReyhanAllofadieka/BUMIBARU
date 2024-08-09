<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produklayanan extends CI_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();

	// 	if ($this->session->userdata("id_user")) {
	// 		redirect('/', 'refresh');
	// 	}
	// }

	function index()
	{
		$this->load->model("Mkategori");
		$this->load->model("Mkomentar");

		$data["komentar"] = $this->Mkomentar->tampil();
		$data["kategori"] = $this->Mkategori->tampil();

		$this->load->view("produklayanan", $data);
	}

	function tampil($id_kategori)
	{
	}
}
