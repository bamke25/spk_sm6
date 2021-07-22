<?php

/**
 * 
 */
class DataUji extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Uji_Model');
		$this->load->model('Training_Model');
		$this->load->library('form_validation');
	}

	function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['training'] = $this->Uji_Model->getAllData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('uji/index', $data);
		$this->load->view('templates/footer');
	}

	function pengujian()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['training'] = $this->Training_Model->getAllData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('uji/pengujian', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->Uji_Model->hapus_data($id);
		$this->session->set_flashdata('flash_uji', 'Dihapus');
		redirect('DataUji');
	}

	public function detail($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['detail'] = $this->Uji_Model->detail_data($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('uji/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules("nama", "Nama ", "required");
		$this->form_validation->set_rules("kesejahteraan_sosial", "Kesejahteraan Sosial ", "required");
		$this->form_validation->set_rules("pekerjaan", "Pekerjaan", "required");
		$this->form_validation->set_rules("berobat", "Berobat", "required");
		$this->form_validation->set_rules("pengeluaran", "Pengeluaran", "required");
		$this->form_validation->set_rules("pakaian", "Pakaian", "required");
		$this->form_validation->set_rules("pendidikan_anak", "Pendidikan anak", "required");
		$this->form_validation->set_rules("kondisi_dinding_rumah", "Kondisi dinding rumah", "required");
		$this->form_validation->set_rules("kondisi_lantai_rumah", "Kondisi lantai rumah", "required");
		$this->form_validation->set_rules("kondisi_atap_rumah", "Kondisi atap rumah", "required");
		$this->form_validation->set_rules("penerangan", "Penerangan", "required");
		$this->form_validation->set_rules("luas_lantai_rumah", "Luas lantai rumah", "required");
		$this->form_validation->set_rules("sumber_air_minum", "Sumber air minum", "required");
		// $this->form_validation->set_rules("status_kelayakan", "Status Kelayakan", "required");

		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();
			$data['ubah'] = $this->Uji_Model->detail_data($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('uji/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Uji_Model->ubah_data();
			$this->session->set_flashdata('flash_uji', 'DiUbah');
			redirect('DataUji');
		}
	}

	function hitung()
	{
		$this->form_validation->set_rules("nama", "Nama ", "required");
		$this->form_validation->set_rules("kesejahteraan_sosial", "Kesejahteraan Sosial ", "required");
		$this->form_validation->set_rules("pekerjaan", "Pekerjaan", "required");
		$this->form_validation->set_rules("berobat", "Berobat", "required");
		$this->form_validation->set_rules("pengeluaran", "Pengeluaran", "required");
		$this->form_validation->set_rules("pakaian", "Pakaian", "required");
		$this->form_validation->set_rules("pendidikan_anak", "Pendidikan anak", "required");
		$this->form_validation->set_rules("kondisi_dinding_rumah", "Kondisi dinding rumah", "required");
		$this->form_validation->set_rules("kondisi_lantai_rumah", "Kondisi lantai rumah", "required");
		$this->form_validation->set_rules("kondisi_atap_rumah", "Kondisi atap rumah", "required");
		$this->form_validation->set_rules("penerangan", "Penerangan", "required");
		$this->form_validation->set_rules("luas_lantai_rumah", "Luas lantai rumah", "required");
		$this->form_validation->set_rules("sumber_air_minum", "Sumber air minum", "required");
		if ($this->form_validation->run() == FALSE) {
			$data['ubah'] = $this->db->get_where('tbl_training2', ['id_training'])->row_array();
			//$this->Uji_Model->detail_data();
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('uji/ubahsaja', $data);
			$this->load->view('templates/footer');
		} else {
			$kesejahteraan_sosial = array();
			$pekerjaan = array();
			$berobat = array();
			$pengeluaran = array();
			$pakaian = array();
			$pendidikan_anak = array();
			$kondisi_dinding_rumah = array();
			$kondisi_lantai_rumah = array();
			$kondisi_atap_rumah = array();
			$penerangan = array();
			$luas_lantai_rumah = array();
			$sumber_air_minum = array();

			$jumlah_layak = $this->Training_Model->count_layak();
			$jumlah_tidak_layak = $this->Training_Model->count_tidaklayak();
			$total_training = $jumlah_layak + $jumlah_tidak_layak;
			$kesejahteraan_sosial = $this->Training_Model->kesejahteraan_sosial($this->input->post('kesejahteraan_sosial'));
			$pekerjaan = $this->Training_Model->pekerjaan($this->input->post('pekerjaan'));
			$berobat = $this->Training_Model->berobat($this->input->post('berobat'));
			$pengeluaran = $this->Training_Model->pengeluaran($this->input->post('pengeluaran'));
			$pakaian = $this->Training_Model->pakaian($this->input->post('pakaian'));
			$pendidikan_anak = $this->Training_Model->pendidikan_anak($this->input->post('pendidikan_anak'));
			$kondisi_dinding_rumah = $this->Training_Model->kondisi_dinding_rumah($this->input->post('kondisi_dinding_rumah'));
			$kondisi_lantai_rumah = $this->Training_Model->kondisi_lantai_rumah($this->input->post('kondisi_lantai_rumah'));
			$kondisi_atap_rumah = $this->Training_Model->kondisi_atap_rumah($this->input->post('kondisi_atap_rumah'));
			$penerangan = $this->Training_Model->penerangan($this->input->post('penerangan'));
			$luas_lantai_rumah = $this->Training_Model->luas_lantai_rumah($this->input->post('luas_lantai_rumah'));
			$sumber_air_minum = $this->Training_Model->sumber_air_minum($this->input->post('sumber_air_minum'));

			//perhitungan //Step 1
			$output = "";
			$output .= "
			<table hidden id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>Jumlah Data</th>
			<th>Kelas PC1(Layak)</th>
			<th>Kelas PC0(Tidak Layak)</th>
			</tr>
			<tr>
			<td>" . $total_training . "</td>
			<td>" . $jumlah_layak . "</td>
			<td>" . $jumlah_tidak_layak . "</td>
			</tr>
			</thead>
			</table>
			";



			//Step 1
			//tampil
			$PC1 = round($jumlah_layak / ($jumlah_tidak_layak + $jumlah_layak), 2);
			$PC0 = round($jumlah_tidak_layak / ($jumlah_tidak_layak + $jumlah_layak), 2);

			$kelas_layak = round($kesejahteraan_sosial['layak'], 2) * round($pekerjaan['layak'], 2) * round($berobat['layak'], 2) * round($pengeluaran['layak'], 2) * round($pakaian['layak'], 2) * round($pendidikan_anak['layak'], 2) * round($kondisi_dinding_rumah['layak'], 2) * round($kondisi_lantai_rumah['layak'], 2) * round($kondisi_atap_rumah['layak'], 2) * round($penerangan['layak'], 2) * round($luas_lantai_rumah['layak'], 2) * round($sumber_air_minum['layak'], 2) * $PC1;

			$kelas_tidak_layak = round($kesejahteraan_sosial['tidaklayak'], 2) * round($pekerjaan['tidaklayak'], 2) * round($berobat['tidaklayak'], 2) * round($pengeluaran['tidaklayak'], 2) * round($pakaian['tidaklayak'], 2) * round($pendidikan_anak['tidaklayak'], 2) * round($kondisi_dinding_rumah['tidaklayak'], 2) * round($kondisi_lantai_rumah['tidaklayak'], 2) * round($kondisi_atap_rumah['tidaklayak'], 2) * round($penerangan['tidaklayak'], 2) * round($luas_lantai_rumah['tidaklayak'], 2) * round($sumber_air_minum['tidaklayak'], 2) * $PC0;

			$output .= "----Hasil Probabilitas----<br>";
			$output .= "
			<table border='1' id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>PC1(Layak)</th>
			<th>PC0(Tidak Layak)</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td>" . $kelas_layak . "</td>
			<td>" . $kelas_tidak_layak . "</td>
			</tr>
			</tbody>
			</table>";


			//step 3
			$output .= "----Probabilitas Data Uji----<br>";
			$output .= "
			<table border='1' width='250px' id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th> </th>
			<th>Kesejahteraan Sosial</th>
			<th>Pekerjaan</th>
			<th>Berobat</th>
			<th>Pengeluaran</th>
			<th>Pakaian</th>
			<th>Pendidikan Anak</th>
			<th>Kondisi Dinding Rumah</th>
			<th>Kondisi Lantai Rumah</th>
			<th>Kondisi Atap Rumah</th>
			<th>Penerangan</th>
			<th>Luas Lantai Rumah</th>
			<th>Sumber Air Minum</th>
			<th>Hasil Probabilitas</th>
			</tr>
			<tr>
			<td>PC1 (Layak)</th>
			<td>" . round($kesejahteraan_sosial['layak'], 2) . "</td>
			<td>" . round($pekerjaan['layak'], 2) . "</td>
			<td>" . round($berobat['layak'], 2) . "</td>
			<td>" . round($pengeluaran['layak'], 2) . "</td>
			<td>" . round($pakaian['layak'], 2) . "</td>
			<td>" . round($pendidikan_anak['layak'], 2) . "</td>
			<td>" . round($kondisi_dinding_rumah['layak'], 2) . "</td>
			<td>" . round($kondisi_lantai_rumah['layak'], 2) . "</td>
			<td>" . round($kondisi_atap_rumah['layak'], 2) . "</td>
			<td>" . round($penerangan['layak'], 2) . "</td>
			<td>" . round($luas_lantai_rumah['layak'], 2) . "</td>
			<td>" . round($sumber_air_minum['layak'], 2) . "</td>
			
			<td>" . $kelas_layak . "</td>
			</tr>

			<tr>
			<td>PC0 (Tidak Layak)</th>
			<td>" . round($kesejahteraan_sosial['tidaklayak'], 2) . "</td>
			<td>" . round($pekerjaan['tidaklayak'], 2) . "</td>
			<td>" . round($berobat['tidaklayak'], 2) . "</td>
			<td>" . round($pengeluaran['tidaklayak'], 2) . "</td>
			<td>" . round($pakaian['tidaklayak'], 2) . "</td>
			<td>" . round($pendidikan_anak['tidaklayak'], 2) . "</td>
			<td>" . round($kondisi_dinding_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($kondisi_lantai_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($kondisi_atap_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($penerangan['tidaklayak'], 2) . "</td>
			<td>" . round($luas_lantai_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($sumber_air_minum['tidaklayak'], 2) . "</td>

			<td>" . $kelas_tidak_layak . "</td>
			</tr>
			</thead>
			</table>";

			$kesimpulan = "";
			$operator = "";

			//echo "kelas layak" . $kelas_layak . "<br>";
			//echo "kelas tidak layak" . $kelas_tidak_layak . "<br>";

			echo "<br>";
			if ($kelas_layak >= $kelas_tidak_layak) {
				$kesimpulan = "layak";
				$operator = ">=";
			} else {
				$kesimpulan = "Tidak layak";
				$operator = "<=";
			}


			$output .= "Kelas Layak(PC1)" . ' ' . $operator . ' ' . "Kelas Tidak Layak(PC0)
			<br>Dapat disimpulkan Bahwa Data Uji tersebut <b><u>" . $kesimpulan . "</u></b> Untuk menerima bantuan PKH
			<br> 
			";

			// masukan hasil kesimpulan dalam parameter untuk di save
			//$data = $this->Uji_Model->tambah_data($kesimpulan);
			 $this->session->set_flashdata('flash_uji', 'dihitung');
			// $this->session->set_flashdata('flash_hitung', $output);
			echo $output;
			//redirect('DataUji/pengujian');
		}
	}


	function hitungsimpan()
	{
		$this->form_validation->set_rules("nama", "Nama ", "required");
		$this->form_validation->set_rules("kesejahteraan_sosial", "Kesejahteraan Sosial ", "required");
		$this->form_validation->set_rules("pekerjaan", "Pekerjaan", "required");
		$this->form_validation->set_rules("berobat", "Berobat", "required");
		$this->form_validation->set_rules("pengeluaran", "Pengeluaran", "required");
		$this->form_validation->set_rules("pakaian", "Pakaian", "required");
		$this->form_validation->set_rules("pendidikan_anak", "Pendidikan anak", "required");
		$this->form_validation->set_rules("kondisi_dinding_rumah", "Kondisi dinding rumah", "required");
		$this->form_validation->set_rules("kondisi_lantai_rumah", "Kondisi lantai rumah", "required");
		$this->form_validation->set_rules("kondisi_atap_rumah", "Kondisi atap rumah", "required");
		$this->form_validation->set_rules("penerangan", "Penerangan", "required");
		$this->form_validation->set_rules("luas_lantai_rumah", "Luas lantai rumah", "required");
		$this->form_validation->set_rules("sumber_air_minum", "Sumber air minum", "required");
		if ($this->form_validation->run() == FALSE) {
			$data['ubah'] = $this->db->get_where('tbl_training2', ['id_training'])->row_array();
			//$this->Uji_Model->detail_data();
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('uji/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$kesejahteraan_sosial = array();
			$pekerjaan = array();
			$berobat = array();
			$pengeluaran = array();
			$pakaian = array();
			$pendidikan_anak = array();
			$kondisi_dinding_rumah = array();
			$kondisi_lantai_rumah = array();
			$kondisi_atap_rumah = array();
			$penerangan = array();
			$luas_lantai_rumah = array();
			$sumber_air_minum = array();

			$jumlah_layak = $this->Training_Model->count_layak();
			$jumlah_tidak_layak = $this->Training_Model->count_tidaklayak();
			$total_training = $jumlah_layak + $jumlah_tidak_layak;
			$kesejahteraan_sosial = $this->Training_Model->kesejahteraan_sosial($this->input->post('kesejahteraan_sosial'));
			$pekerjaan = $this->Training_Model->pekerjaan($this->input->post('pekerjaan'));
			$berobat = $this->Training_Model->berobat($this->input->post('berobat'));
			$pengeluaran = $this->Training_Model->pengeluaran($this->input->post('pengeluaran'));
			$pakaian = $this->Training_Model->pakaian($this->input->post('pakaian'));
			$pendidikan_anak = $this->Training_Model->pendidikan_anak($this->input->post('pendidikan_anak'));
			$kondisi_dinding_rumah = $this->Training_Model->kondisi_dinding_rumah($this->input->post('kondisi_dinding_rumah'));
			$kondisi_lantai_rumah = $this->Training_Model->kondisi_lantai_rumah($this->input->post('kondisi_lantai_rumah'));
			$kondisi_atap_rumah = $this->Training_Model->kondisi_atap_rumah($this->input->post('kondisi_atap_rumah'));
			$penerangan = $this->Training_Model->penerangan($this->input->post('penerangan'));
			$luas_lantai_rumah = $this->Training_Model->luas_lantai_rumah($this->input->post('luas_lantai_rumah'));
			$sumber_air_minum = $this->Training_Model->sumber_air_minum($this->input->post('sumber_air_minum'));

			//perhitungan //Step 1
			$output = "";
			$output .= "
			<table hidden id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>Jumlah Data</th>
			<th>Kelas PC1(Layak)</th>
			<th>Kelas PC0(Tidak Layak)</th>
			</tr>
			<tr>
			<td>" . $total_training . "</td>
			<td>" . $jumlah_layak . "</td>
			<td>" . $jumlah_tidak_layak . "</td>
			</tr>
			</thead>
			</table>
			";



			//Step 1
			//tampil
			$PC1 = round($jumlah_layak / ($jumlah_tidak_layak + $jumlah_layak), 2);
			$PC0 = round($jumlah_tidak_layak / ($jumlah_tidak_layak + $jumlah_layak), 2);

			$kelas_layak = round($kesejahteraan_sosial['layak'], 2) * round($pekerjaan['layak'], 2) * round($berobat['layak'], 2) * round($pengeluaran['layak'], 2) * round($pakaian['layak'], 2) * round($pendidikan_anak['layak'], 2) * round($kondisi_dinding_rumah['layak'], 2) * round($kondisi_lantai_rumah['layak'], 2) * round($kondisi_atap_rumah['layak'], 2) * round($penerangan['layak'], 2) * round($luas_lantai_rumah['layak'], 2) * round($sumber_air_minum['layak'], 2) * $PC1;

			$kelas_tidak_layak = round($kesejahteraan_sosial['tidaklayak'], 2) * round($pekerjaan['tidaklayak'], 2) * round($berobat['tidaklayak'], 2) * round($pengeluaran['tidaklayak'], 2) * round($pakaian['tidaklayak'], 2) * round($pendidikan_anak['tidaklayak'], 2) * round($kondisi_dinding_rumah['tidaklayak'], 2) * round($kondisi_lantai_rumah['tidaklayak'], 2) * round($kondisi_atap_rumah['tidaklayak'], 2) * round($penerangan['tidaklayak'], 2) * round($luas_lantai_rumah['tidaklayak'], 2) * round($sumber_air_minum['tidaklayak'], 2) * $PC0;

			$output .= "----Hasil Probabilitas----<br>";
			$output .= "
			<table border='1' id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>PC1(Layak)</th>
			<th>PC0(Tidak Layak)</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td>" . $kelas_layak . "</td>
			<td>" . $kelas_tidak_layak . "</td>
			</tr>
			</tbody>
			</table>";




			//STEP 2
			// $output .= "----Probabilitas Posterior----<br>";
			// $output .= "pekerjaan : ";
			// $output .= var_dump($pekerjaan);
			// $output .= "<br>";
			// $output .= "jumlah tanggungan : ";
			// $output .= var_dump($berobat);
			// $output .= "<br>";
			// $output .= "pengeluaran : ";
			// $output .= var_dump($pengeluaran);
			// $output .= "<br>";
			// $output .= "pakaian : ";
			// $output .= var_dump($pakaian);
			// $output .= "<br>";
			// $output .= "pendidikan_anak : ";
			// $output .= var_dump($pendidikan_anak);
			// $output .= "<br>";
			// $output .= "kondisi_dinding_rumah : ";
			// $output .= var_dump($kondisi_dinding_rumah);
			// $output .= "<br><br>";


			//step 3
			$output .= "----Probabilitas Data Uji----<br>";
			$output .= "
			<table border='1' width='250px' id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th> </th>
			<th>Kesejahteraan Sosial</th>
			<th>Pekerjaan</th>
			<th>Berobat</th>
			<th>Pengeluaran</th>
			<th>Pakaian</th>
			<th>Pendidikan Anak</th>
			<th>Kondisi Dinding Rumah</th>
			<th>Kondisi Lantai Rumah</th>
			<th>Kondisi Atap Rumah</th>
			<th>Penerangan</th>
			<th>Luas Lantai Rumah</th>
			<th>Sumber Air Minum</th>
			<th>Hasil Probabilitas</th>
			</tr>
			<tr>
			<td>PC1 (Layak)</th>
			<td>" . round($kesejahteraan_sosial['layak'], 2) . "</td>
			<td>" . round($pekerjaan['layak'], 2) . "</td>
			<td>" . round($berobat['layak'], 2) . "</td>
			<td>" . round($pengeluaran['layak'], 2) . "</td>
			<td>" . round($pakaian['layak'], 2) . "</td>
			<td>" . round($pendidikan_anak['layak'], 2) . "</td>
			<td>" . round($kondisi_dinding_rumah['layak'], 2) . "</td>
			<td>" . round($kondisi_lantai_rumah['layak'], 2) . "</td>
			<td>" . round($kondisi_atap_rumah['layak'], 2) . "</td>
			<td>" . round($penerangan['layak'], 2) . "</td>
			<td>" . round($luas_lantai_rumah['layak'], 2) . "</td>
			<td>" . round($sumber_air_minum['layak'], 2) . "</td>
			
			<td>" . $kelas_layak . "</td>
			</tr>

			<tr>
			<td>PC0 (Tidak Layak)</th>
			<td>" . round($kesejahteraan_sosial['tidaklayak'], 2) . "</td>
			<td>" . round($pekerjaan['tidaklayak'], 2) . "</td>
			<td>" . round($berobat['tidaklayak'], 2) . "</td>
			<td>" . round($pengeluaran['tidaklayak'], 2) . "</td>
			<td>" . round($pakaian['tidaklayak'], 2) . "</td>
			<td>" . round($pendidikan_anak['tidaklayak'], 2) . "</td>
			<td>" . round($kondisi_dinding_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($kondisi_lantai_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($kondisi_atap_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($penerangan['tidaklayak'], 2) . "</td>
			<td>" . round($luas_lantai_rumah['tidaklayak'], 2) . "</td>
			<td>" . round($sumber_air_minum['tidaklayak'], 2) . "</td>

			<td>" . $kelas_tidak_layak . "</td>
			</tr>
			</thead>
			</table>";


			// $output .= "----Probabilitas Data Uji----<br>";
			// $output .= "-PCO (Tidak Layak) <br> ";

			// $output .= "Status PKH: ".round($pekerjaan['tidaklayak'],2);
			// $output .= "<br>Jumlah Tanggungan: ".round($berobat['tidaklayak'], 2);
			// $output .= "<br>Kepala Rumah Tangga: ".round($pengeluaran['tidaklayak'], 2);
			// $output .= "<br>Kondisi Rumah: ".round($pakaian['tidaklayak'], 2);
			// $output .= "<br>Jumlah Penghasilan: ".round($pendidikan_anak['tidaklayak'], 2);
			// $output .= "<br>Status Rumah: ".round($kondisi_dinding_rumah['tidaklayak'], 2);
			// $output .= "<br>Hasil Probabilitas: ";

			// $output .= $kelas_tidak_layak = round($pekerjaan['tidaklayak'],2)*round($berobat['tidaklayak'], 2)*round($pengeluaran['tidaklayak'], 2)*round($pakaian['tidaklayak'], 2)*round($pendidikan_anak['tidaklayak'], 2)*round($kondisi_dinding_rumah['tidaklayak'], 2)*$PC0;

			// $output .= " </br><br>";
			// $output .= "-PC1 (Layak)<br>";

			// $output .= "Status PKH: ".round($pekerjaan['layak'],2);
			// $output .= "<br>Jumlah Tanggungan: ".round($berobat['layak'], 2);
			// $output .= "<br>Kepala Rumah Tangga: ".round($pengeluaran['layak'], 2);
			// $output .= "<br>Kondisi Rumah: ".round($pakaian['layak'], 2);
			// $output .= "<br>Jumlah Penghasilan: ".round($pendidikan_anak['layak'], 2);
			// $output .= "<br>Status Rumah: ".round($kondisi_dinding_rumah['layak'], 2);
			// $output .= "<br> Hasil Probabilitas: ";
			// $output .= $kelas_layak = round($pekerjaan['layak'],2)*round($berobat['layak'], 2)*round($pengeluaran['layak'], 2)*round($pakaian['layak'], 2)*round($pendidikan_anak['layak'], 2)*round($kondisi_dinding_rumah['layak'], 2)*$PC1;

			$kesimpulan = "";
			$operator = "";

			//echo "kelas layak" . $kelas_layak . "<br>";
			//echo "kelas tidak layak" . $kelas_tidak_layak . "<br>";

			echo "<br>";
			if ($kelas_layak >= $kelas_tidak_layak) {
				$kesimpulan = "layak";
				$operator = ">=";
			} else {
				$kesimpulan = "Tidak layak";
				$operator = "<=";
			}


			$output .= "Kelas Layak(PC1)" . ' ' . $operator . ' ' . "Kelas Tidak Layak(PC0)
			<br>Dapat disimpulkan Bahwa Data Uji tersebut <b><u>" . $kesimpulan . "</u></b> Untuk menerima bantuan PKH
			<br> 
			";

			// masukan hasil kesimpulan dalam parameter untuk di save
			$data = $this->Uji_Model->tambah_data($kesimpulan);
			// $this->session->set_flashdata('flash_uji', 'dihitung');
			// $this->session->set_flashdata('flash_hitung', $output);
			echo $output;
			// redirect('DataUji');
		}
	}
}
