<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mpenjualan');
    }

    //    public function index() {
    //         $this->load->model("Mkategori");

    //     	$data["kategori"] = $this->Mkategori->tampilall();

    //     	$this->load->view("produklayanan", $data);

    //     }

    public function tambah_proses()
    {
        $inputan = $this->input->post();

        // Set rules for form validation
        $this->form_validation->set_rules("wa_user", "Whatsapp", "required");
        $this->form_validation->set_rules("tanggal_penjemputan_sampah", "Tanggal Penjemputan", "required");
        $this->form_validation->set_rules("berat_sampah", "Berat Sampah", "required");
        $this->form_validation->set_message("required", "%s harus diisi");

        if ($inputan) {
            // Jika validasi berhasil
            $this->load->model('Mpenjualan');
            $this->Mpenjualan->tambah($inputan);
            $this->session->set_flashdata('pesan_sukses', 'Data penjualan sampah anda tersimpan, kami akan menuju ke tempat anda, terimakasih telah melakukan penjualan sampah di BumiBaru 😊');
            redirect('produklayanan', 'refresh');
       
        }
        else{
            $this->session->set_flashdata('pesan_gagal', 'Data penjualan gagal tersimpan');
            redirect('penjualan', 'refresh');
        }
    }



    
    
}
