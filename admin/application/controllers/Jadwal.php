<?php 
	class Jadwal extends CI_Controller
	{
        function __construct() {
            parent::__construct();
    
            if (!$this->session->userdata("id_admin")) {
                redirect('/','refresh');
            }
        }
		function index()
		{
			$this->load->model("Mjadwal");
	
			$data["jadwal"] = $this->Mjadwal->tampil();

			$this->load->view('header');
            $this->load->view("jadwal", $data);
            $this->load->view('footer');
		}

        function edit($id_jadwal) {
            $inputan = $this->input->post();
            
            log_message('debug', 'Input data: ' . print_r($inputan, TRUE));
        
            if ($inputan) {
                $this->load->model("Mjadwal");
        
                $this->Mjadwal->edit($inputan, $id_jadwal);

                redirect('jadwal', 'refresh');
            } else {
                log_message('error', 'No input data received in edit method of controller.');
            }

            $this->load->view('header');
            $this->load->view('jadwal_edit');
            $this->load->view('footer');
        }
        

        function hapus($id_jadwal) {
            $this->load->model('Mjadwal');
            $this->Mjadwal->hapus($id_jadwal);
            $this->session->set_flashdata('pesan_sukses', 'jadwal telah terhapus');
    
            redirect('jadwal','refresh');
        }
	}
 ?>