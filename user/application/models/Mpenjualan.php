<?php 
class Mpenjualan extends CI_Model
{
    function tampil()
	{
		$q = $this->db->get("penjualan");

		$d = $q->result_array();

		return $d;
	}



    
	public function get_all_kategori($id_kategori) {
        $this->db->select('id_kategori, nama_kategori, harga_perkilo');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function tambah($inputan)
    {
        // Konfigurasi upload
        $config['upload_path'] = './uploads/'; // Sesuaikan dengan direktori yang diinginkan
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';

        $this->load->library('upload', $config);

        // Lakukan upload foto_sampah
        if ($this->upload->do_upload("foto_sampah")) {
            $inputan['foto_sampah'] = $this->upload->data("file_name");
        } else {
            // Handle jika upload gagal
            $error = array('error' => $this->upload->display_errors());
            $inputan['foto_sampah'] = ''; // Atau berikan nilai default jika perlu
        }

        // Pastikan ID user ada dalam inputan
        if (!isset($inputan['id_user'])) {
            // Atur ID user dari sesi atau dari data yang ada
            $inputan['id_user'] = $this->session->userdata('id_user'); // Sesuaikan dengan cara Anda mengambil ID user
        }

        // Hanya kirim field yang valid ke tabel penjualan
        $data = [
            'id_kategori' => $inputan['id_kategori'],
            'nama_kategori' => $inputan['kategori'], // Pastikan field ini benar sesuai kebutuhan Anda
            'wa_user' => $inputan['wa_user'],
            'tanggal_penjemputan_sampah' => $inputan['tanggal_penjemputan_sampah'],
            'berat_sampah' => $inputan['berat_sampah'],
            'metode_bayar' => $inputan['metode_bayar'],
            'foto_sampah' => $inputan['foto_sampah'],
            'harga_perkilo' => $inputan['harga_perkilo'],
            'sub_total' => $inputan['sub_total'],
            'id_user' => $inputan['id_user'] // Masukkan ID user ke dalam data
        ];

        $this->db->insert('penjualan', $data);
    }


	public function getHargaPerKiloById($kategoriId) {
        // Query untuk mengambil harga_perkilo berdasarkan kategori_id
        $query = $this->db->select('harga_perkilo')
                          ->where('id_kategori', $kategoriId)
                          ->get('kategori');
        
        // Mengembalikan harga_perkilo jika data ditemukan
        if ($query->num_rows() > 0) {
            return $query->row()->harga_perkilo;
        }
        
        // Mengembalikan null jika data tidak ditemukan
        return null;
    }
	



	
    function edit($inputan) {
        $this->db->update('penjualan', $inputan);
    }
}