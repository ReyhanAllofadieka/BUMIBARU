<?php 
class Madmin extends CI_Model
{
    function ubah($inputan, $id_admin) {
        if (!empty($inputan["username"])) {
            $inputan['username'] = ($inputan['username']);
        } else {
            unset($inputan['username']);
        }

        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $inputan);

        $this->db->where('id_admin', $id_admin);
        $q = $this->db->get('admin');
        $cekadmin = $q->row_array();

        $this->session->set_userdata("id_admin", $cekadmin["id_admin"]);
        $this->session->set_userdata("username", $cekadmin["username"]);
        $this->session->set_userdata("nama", $cekadmin["nama"]);
    }

    function ubahpass($inputan, $id_admin) {
        if (!empty($inputan["password"])) {
            $inputan['password'] = sha1($inputan['password']);
        } else {
            unset($inputan['password']);
        }

        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $inputan);

    }
}
 ?>