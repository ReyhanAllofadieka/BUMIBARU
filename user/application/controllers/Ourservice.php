<?php 
	class Ourservice extends CI_Controller
	{
		function __construct() {
			parent::__construct();
	
			if (!$this->session->userdata("id_user")) {
				redirect('/','refresh');
			}
		}
		function index()
		{
			$this->load->view('header');
            $this->load->view("our_service");
            $this->load->view('footer');
		}
	}
 ?>