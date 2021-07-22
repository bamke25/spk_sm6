<?php

/**
 * 
 */
class Training_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_training')->result_array();
	}

	public function tambah_data()
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
			'status_kelayakan' => $this->input->post('status_kelayakan', true)
		);

		$this->db->insert('tbl_training', $data);
	}

	public function ubah_data()
	{
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
			'status_kelayakan' => $this->input->post('status_kelayakan', true)
		);
		$this->db->where('id_training', $this->input->post('id_training', true));
		$this->db->update('tbl_training', $data);
	}

	public function hapus_data($id)
	{
		$this->db->delete('tbl_training', ['id_training' => $id]);
	}

	public function detail_data($id)
	{
		return $this->db->get_where('tbl_training', ['id_training' => $id])->row_array();
	}

	public function count_layak()
	{
		$this->db->where('status_kelayakan', 'Layak');
		$this->db->from('tbl_training');
		return $this->db->count_all_results();
	}

	public function count_tidaklayak()
	{
		$this->db->where('status_kelayakan', 'Tidak Layak');
		$this->db->from('tbl_training');
		return $this->db->count_all_results();
	}

	// ambil probabilitas
	public function kesejahteraan_sosial($status)
	{
		$this->db->where('Kesejahteraan_Sosial', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Kesejahteraan_Sosial', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}
	public function pekerjaan($status)
	{
		$this->db->where('Pekerjaan', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Pekerjaan', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function berobat($status)
	{
		$this->db->where('Berobat', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Berobat', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function pengeluaran($status)
	{
		//$status = "Batu Permanen";
		$this->db->where('Pengeluaran', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Pengeluaran', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function pakaian($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Pakaian', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Pakaian', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function pendidikan_anak($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Pendidikan_Anak', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Pendidikan_Anak', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function kondisi_dinding_rumah($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Kondisi_Dinding_Rumah', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Kondisi_Dinding_Rumah', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function kondisi_lantai_rumah($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Kondisi_Lantai_Rumah', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Kondisi_Lantai_Rumah', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function kondisi_atap_rumah($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Kondisi_Atap_Rumah', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Kondisi_Atap_Rumah', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function penerangan($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Penerangan', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Penerangan', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function luas_lantai_rumah($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Luas_Lantai_Rumah', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Luas_Lantai_Rumah', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}

	public function sumber_air_minum($status)
	{
		// $status = "Milik Sendiri";
		$this->db->where('Sumber_Air_Minum', $status);
		$this->db->where('status_kelayakan', "Layak");
		$this->db->from('tbl_training');
		$layak = $this->db->count_all_results() / $this->count_layak();
		$this->db->where('Sumber_Air_Minum', $status);
		$this->db->where('status_kelayakan', "Tidak Layak");
		$this->db->from('tbl_training');
		$tidak = $this->db->count_all_results() / $this->count_tidaklayak();
		return array('layak' => $layak, 'tidaklayak' => $tidak);
	}
}
