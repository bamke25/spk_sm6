<?php 

/**
 * 
 */
class Uji_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_training2')->result_array();
	}

	public function tambah_data($kesimpulan)
	{
		$data = array(
			// 'id_training' => $this->input->post('id_training', true),
			'Nama' => $this->input->post('nama', true),
			'Kesejahteraan_Sosial' => $this->input->post('kesejahteraan_sosial', true),
			'Pekerjaan' => $this->input->post('pekerjaan', true),
			'Berobat' => $this->input->post('berobat', true),
			'Pengeluaran' => $this->input->post('pengeluaran', true),
			'Pakaian' => $this->input->post('pakaian', true),
			'Pendidikan_Anak' => $this->input->post('pendidikan_anak', true),
			'Kondisi_Dinding_Rumah' => $this->input->post('kondisi_dinding_rumah', true),
			'Kondisi_Atap_Rumah' => $this->input->post('kondisi_atap_rumah', true),
			'Kondisi_Lantai_Rumah' => $this->input->post('kondisi_lantai_rumah', true),
			'Penerangan' => $this->input->post('penerangan', true),
			'Luas_Lantai_Rumah' => $this->input->post('luas_lantai_rumah', true),
			'Sumber_Air_Minum' => $this->input->post('sumber_air_minum', true),
			'status_kelayakan' => $kesimpulan
		);

		$this->db->insert('tbl_training2', $data);
	}

	public function ubah_data($kesimpulan)
	{
		$pekerjaan = $this->input->post('pekerjaan');
		$data = array(
			'Nama' => $this->input->post('nama', true),
			'Kesejahteraan_Sosial' => $this->input->post('kesejahteraan_sosial', true),
			'Pekerjaan' => $this->input->post('pekerjaan', true),
			'Berobat' => $this->input->post('berobat', true),
			'Pengeluaran' => $this->input->post('pengeluaran', true),
			'Pakaian' => $this->input->post('pakaian', true),
			'Pendidikan_Anak' => $this->input->post('pendidikan_anak', true),
			'Kondisi_Dinding_Rumah' => $this->input->post('kondisi_dinding_rumah', true),
			'Kondisi_Atap_Rumah' => $this->input->post('kondisi_atap_rumah', true),
			'Kondisi_Lantai_Rumah' => $this->input->post('kondisi_lantai_rumah', true),
			'Penerangan' => $this->input->post('penerangan', true),
			'Luas_Lantai_Rumah' => $this->input->post('luas_lantai_rumah', true),
			'Sumber_Air_Minum' => $this->input->post('sumber_air_minum', true),
			'status_kelayakan' => $kesimpulan
		);
		$this->db->where('id_training', $this->input->post('id_training', true));
		$this->db->update('tbl_training2', $data);
	}

	public function hapus_data($id)
	{
		$this->db->delete('tbl_training2', ['id_training' => $id]);
	}

	public function detail_data($id)
	{
		return $this->db->get_where('tbl_training2', ['id_training' => $id])->row_array(); 
	}
}
