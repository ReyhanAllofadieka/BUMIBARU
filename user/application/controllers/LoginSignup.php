<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginSignup extends CI_Controller
{


    // function __construct()
    // {
    // 	parent::__construct();

    // 	if ($this->session->userdata("id_user")) {
    // 		redirect('/', 'refresh');
    // 	}
    // }

  

    function login()
    {
        $inputan = $this->input->post();

        $this->form_validation->set_rules("email_user", "Email", "required");
        $this->form_validation->set_rules("password_user", "Password", "required");
        $this->form_validation->set_message("required", "%s wajib diisi");

        if ($inputan) {
            $this->load->model("Mlogin");
            $output = $this->Mlogin->login($inputan);

            if ($output == "ada") {
                $this->session->set_flashdata("pesan_sukses", "Berhasil Login");
                error_log("Berhasil Login"); // Logging for debugging
                redirect('Welcome', 'refresh');
            } else {
                $this->session->set_flashdata("pesan_gagal", "Gagal Login, Mohon Periksa Email Dan Password Anda");
                error_log("Gagal Login"); // Logging for debugging
                redirect('loginsignup/login', 'refresh');
            }
        }
        $this->load->view('login');
    }

    function signup()
    {

        $this->load->model("Mlogin");
        $this->form_validation->set_rules("nama_user", "Email", "required");
        $this->form_validation->set_rules("email_user", "Email", "required");
        $this->form_validation->set_rules("password_user", "Password", "required");
        $this->form_validation->set_rules("wa_user", "Whatsapp", "required");
        $this->form_validation->set_rules("alamat_user", "Alamat", "required");
        $this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run() == TRUE) {
            $m['email_user'] = $this->input->post("email_user");
            $m['password_user'] = $this->input->post("password_user");
            $m['password_user'] = sha1($m['password_user']);
            $m['nama_user'] = $this->input->post("nama_user");
            $m['alamat_user'] = $this->input->post("alamat_user");
            $m['wa_user'] = $this->input->post("wa_user");


            $this->Mlogin->register($m);
            $this->session->set_flashdata('pesan_sukses', 'Registrasi Berhasil Silahkan Login');

            redirect("loginsignup/login", "refresh");
        }
        $this->load->view('signup');
    }

    public function ubahprofil()
    {
        $this->load->model("Mlogin");
        $id_user = $this->session->userdata("id_user");
        $data["user"] = $this->Mlogin->get_user_by_id($id_user);

        if ($this->input->post()) {
            $input = $this->input->post();

            $this->form_validation->set_rules('nama_user', 'Username', 'required');
            $this->form_validation->set_rules('email_user', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('alamat_user', 'Alamat', 'required');
            $this->form_validation->set_rules('wa_user', 'WhatsApp', 'required');

            if ($this->form_validation->run() == TRUE) {
                $this->Mlogin->update_user($input, $id_user);
                $this->session->set_flashdata("pesan_sukses", "Akun berhasil diubah");
                redirect('produklayanan', 'refresh');
            }
        }

        $this->load->view('ubahprofil', $data);
    }
}
