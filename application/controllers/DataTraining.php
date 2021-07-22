<?php 

/**
 * 
 */
class DataTraining extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Training_Model');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$data['title'] = 'Data Training';
		$data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
		$data['training'] = $this->Training_Model->getAllData();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('training/index', $data);
		$this->load->view('templates/footer');
	}

	public function validation_form(){
		$this->form_validation->set_rules("nama", "Nama ", "required");
		$this->form_validation->set_rules("kesejahteraan_sosial", "Kesejahteraan Sosial", "required");
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
		$this->form_validation->set_rules("status_kelayakan", "Status Kelayakan", "required");

		if ($this->form_validation->run() == FALSE)
		{
			// $data = $this->Training_Model->tambah_data();
			// var_dump($data); die;
			$this->index(); 
		}
		else
		{
			$this->Training_Model->tambah_data();
			$this->session->set_flashdata('flash_training', 'Disimpan');
			redirect('DataTraining');
		}	
	}

	public function hapus($id)
	{
		$this->Training_Model->hapus_data($id);
		$this->session->set_flashdata('flash_training', 'Dihapus');
		redirect('DataTraining');
	}

	public function ubah($id)
	{
		$data['title'] = 'Update Data';
		// $this->form_validation->set_rules("id_training", "Id Training", "required|max_length[5]");
		$this->form_validation->set_rules("nama", "Nama ", "required");
		$this->form_validation->set_rules("kesejahteraan_sosial", "Kesejahteraan Sosial", "required");
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
		$this->form_validation->set_rules("status_kelayakan", "Status Kelayakan", "required");


		if ($this->form_validation->run() == FALSE)
		{
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();
			$data['ubah']= $this->Training_Model->detail_data($id);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('training/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Training_Model->ubah_data();
			$this->session->set_flashdata('flash_training', 'DiUbah');
			redirect('DataTraining');
		}	
	}


}
