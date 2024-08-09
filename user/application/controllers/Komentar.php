<?php 
	class Komentar extends CI_Controller
	{
        function __construct() {
            parent::__construct();
    
            // if (!$this->session->userdata("id_user")) {
            //     redirect('/','refresh');
            // }
        }
		function index()
		{
			$this->load->model("Mkomentar");
	
			$data["komentar"] = $this->Mkomentar->tampil();

			$this->load->view('header');
            $this->load->view("komentar", $data);
            $this->load->view('footer');
		}

        // function hapus($id_penilaian) {
        //     echo $id_penilaian;
    
        //     $this->load->model('Mkomentar');
    
        //     $this->Mkomentar->hapus($id_penilaian);
    
        //     $this->session->set_flashdata('pesan_sukses', 'komentar telah terhapus');
    
        //     redirect('komentar','refresh');
        // }

        function tambah() {
            $inputan = $this->input->post();

            if ($inputan) {
                $this->load->model('Mkomentar');
                $this->Mkomentar->tambah($inputan);
                $this->session->set_flashdata('pesan_sukses', 'Data komentar tersimpan');
                redirect('produklayanan','refresh');
            }
        }
	}
 ?>