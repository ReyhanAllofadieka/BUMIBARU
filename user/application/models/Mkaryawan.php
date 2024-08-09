<?php 
class Mkaryawan extends CI_Model
{
    function tampil()
	{
		$q = $this->db->get("karyawan");

		$d = $q->result_array();

		return $d;
	}

    function tambah($inputan) {
            $this->db->insert('karyawan', $inputan);
    }

    function edit($inputan) {
        $this->db->update('karyawan', $inputan);
    }
}