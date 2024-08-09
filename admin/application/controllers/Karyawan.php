<?php 
	class Karyawan extends CI_Controller
	{
        function __construct() {
            parent::__construct();
    
            if (!$this->session->userdata("id_admin")) {
                redirect('/','refresh');
            }
        }
		function index()
		{
            $this->load->model("Mkaryawan");
	
			$data["karyawan"] = $this->Mkaryawan->tampil();

			$this->load->view('header');
			$this->load->view('karyawan', $data);
			$this->load->view('footer');
		}

        function tambah() {
            $inputan = $this->input->post();
            $this->load->model("Mkaryawan");
        
            if ($inputan) {
                $this->Mkaryawan->tambah($inputan);
                redirect('karyawan','refresh');
            }
        
            $this->load->view('header');
            $this->load->view('tambah_karyawan');
            $this->load->view('footer');
        }

        function edit() {
            $inputan = $this->input->post();
            $this->load->model("Mkaryawan");
        
            if ($inputan) {
                $this->Mkaryawan->edit($inputan);
                redirect('karyawan','refresh');
            }

            $this->load->view('header');
            $this->load->view('edit_karyawan');
            $this->load->view('footer');
        }
	}
 ?>