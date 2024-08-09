<?php 
class Mjadwal extends CI_Model
{
    function tampil()
	{
		$q = $this->db->get("jadwal");

		$d = $q->result_array();

		return $d;
	}

	function detail($id_jadwal) {
		$this->db->where('id_jadwal', $id_jadwal);
		$q = $this->db->get('jadwal');
		$d = $q->row_array();

		return $d;
	}

	function hapus($id_jadwal) {
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->delete('jadwal');
	}

	function edit($inputan, $id_jadwal) {
		log_message('debug', 'Input data in model: ' . print_r($inputan, TRUE));
		log_message('debug', 'ID Jadwal: ' . $id_jadwal);

		if (!empty($inputan) && is_array($inputan)) {
			$this->db->where('id_jadwal', $id_jadwal);
			
			$this->db->set($inputan);

			if ($this->db->update('jadwal')) {
				log_message('debug', 'Data successfully updated.');
			} else {
				log_message('error', 'Failed to update data.');
			}
		} else {
			log_message('error', 'Input data is empty or invalid in edit method of Mjadwal model.');
		}
	}
}