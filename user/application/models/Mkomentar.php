<?php 
class Mkomentar extends CI_Model
{
    function tampil()
	{
		$q = $this->db->get("komentar");

		$d = $q->result_array();

		return $d;
	}

	function detail($id_komentar) {
		$this->db->where('id_komentar', $id_komentar);
		$q = $this->db->get('komentar');
		$d = $q->row_array();

		return $d;
	}

	function hapus($id_penilaian) {
		$this->db->where('id_penilaian', $id_penilaian);
		$this->db->delete('komentar');
	}

	function tambah($inputan) {
		$this->db->insert('komentar', $inputan);
	}
}