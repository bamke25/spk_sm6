<?php

/**
 * 
 */
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Uji_Model');
        $this->load->model('Training_Model');
        $this->load->library('form_validation');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }

    public function editprofile()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/editprofile', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //Cek jika ada gambar yg akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your profile has been update!</div>');
            redirect('User/profile');
        }
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['training'] = $this->Uji_Model->getAllData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function changepassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('currentpassword', 'current password', 'required|trim');
        $this->form_validation->set_rules('newpassword1', 'new password', 'required|trim|min_length[5]|matches[newpassword2]');
        $this->form_validation->set_rules('newpassword2', 'repeat password', 'required|trim|min_length[5]|matches[newpassword1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $currentpassword = $this->input->post('currentpassword');
            $newpassword = $this->input->post('newpassword1');
            if (!password_verify($currentpassword, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password</div>');
                redirect('User/changepassword');
            } else {
                if ($currentpassword == $newpassword) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    new password cannot be the same as a current password!</div>');
                    redirect('User/changepassword');
                } else {
                    //password bagus
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password change!</div>');
                    redirect('User/profile');
                }
            }
        }
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
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules("nama", "Nama ", "required");
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

    function pengujian()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['training'] = $this->Training_Model->getAllData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/pengujian', $data);
        $this->load->view('templates/footer');
    }


    function hitung()
    {
        $this->form_validation->set_rules("nama", "Nama ", "required");
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
            $data['ubah'] = $this->db->get_where('tbl_training', ['id_training'])->row_array();
            //$this->Uji_Model->detail_data();
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('uji/ubah', $data);
            $this->load->view('templates/footer');
        } else {
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

            $kelas_layak = round($pekerjaan['layak'], 2) * round($berobat['layak'], 2) * round($pengeluaran['layak'], 2) * round($pakaian['layak'], 2) * round($pendidikan_anak['layak'], 2) * round($kondisi_dinding_rumah['layak'], 2) * round($kondisi_lantai_rumah['layak'], 2) * round($kondisi_atap_rumah['layak'], 2) * round($penerangan['layak'], 2) * round($luas_lantai_rumah['layak'], 2) * round($sumber_air_minum['layak'], 2) * $PC1;

            $kelas_tidak_layak = round($pekerjaan['tidaklayak'], 2) * round($berobat['tidaklayak'], 2) * round($pengeluaran['tidaklayak'], 2) * round($pakaian['tidaklayak'], 2) * round($pendidikan_anak['tidaklayak'], 2) * round($kondisi_dinding_rumah['tidaklayak'], 2) * round($kondisi_lantai_rumah['tidaklayak'], 2) * round($kondisi_atap_rumah['tidaklayak'], 2) * round($penerangan['tidaklayak'], 2) * round($luas_lantai_rumah['tidaklayak'], 2) * round($sumber_air_minum['tidaklayak'], 2) * $PC0;

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
			<br>Dapat disimpulkan Bahwa Data Uji tersebut <b><u>" . $kesimpulan . "</u></b> Untuk menerima Beras Rastra
			<br> 
			";

            // masukan hasil kesimpulan dalam parameter untuk di save
            $data = $this->Uji_Model->tambah_data($kesimpulan);
            // $this->session->set_flashdata('flash_uji', 'dihitung');
            // $this->session->set_flashdata('flash_hitung', $output);
            //echo $output;
            redirect('User');
        }
    }
}
