<?php 
	class Home extends CI_Controller
	{
		function __construct() {
			parent::__construct();
	
			if (!$this->session->userdata("id_admin")) {
				redirect('/','refresh');
			}
		}
		function index()
		{
			$this->load->model("Mkategori");
			$this->load->model("Mkomentar");
	
			$data["kategori"] = $this->Mkategori->tampil();
			$data["komentar"] = $this->Mkomentar->tampil();

			$this->load->view('header');
            $this->load->view("home", $data);
            $this->load->view('footer');
		}
	}
 ?>