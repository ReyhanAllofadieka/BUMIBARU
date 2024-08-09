
<?php
class Mlogin extends CI_Model
{
    function login($inputan)
    {
        $username = $inputan['email_user'];
        $password = $inputan['password_user'];
        $password = sha1($password);

        $this->db->where('email_user', $username);
        $this->db->where('password_user', $password);
        $q = $this->db->get('user');
        $cekadmin = $q->row_array();

        if (!empty($cekadmin)) {
            $this->session->set_userdata("id_user", $cekadmin["id_user"]);
            $this->session->set_userdata("nama_user", $cekadmin["nama_user"]);
            $this->session->set_userdata("email_user", $cekadmin["email_user"]);
            $this->session->set_userdata("alamat_user", $cekadmin["alamat_user"]);
            $this->session->set_userdata("wa_user", $cekadmin["wa_user"]);
          
            return "ada";
        } else {
            return "gak ada";
        }
    }
    function register($m)
    {
        $this->db->insert('user', $m);
    
    }

    public function get_user_by_id($id_user)
    {
        $this->db->where('id_user', $id_user);
        $q = $this->db->get('user');
        return $q->row();
    }

    public function update_user($input, $id_user)
    {
        if (!empty($input["password_user"])) {
            $input['password_user'] = sha1($input['password_user']);
        } else {
            unset($input['password_user']);
        }

        $this->db->where('id_user', $id_user);
        $this->db->update('user', $input);

        $this->db->where('id_user', $id_user);
        $q = $this->db->get('user');
        $cek = $q->row_array();

        $this->session->set_userdata("id_user", $cek['id_user']);
        $this->session->set_userdata("email_user", $cek['email_user']);
        $this->session->set_userdata("nama_user", $cek['nama_user']);
        $this->session->set_userdata("wa_user", $cek['wa_user']);
        $this->session->set_userdata("alamat_user", $cek['alamat_user']);
    }
}
?>