<br>
<br>
<title><?= $title ?></title>
<!-- Content Wrapper. Contains page content  -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Ubah Data Training</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('DataChart'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('DataTraining'); ?>">Data Training</a></li>
            <li class="breadcrumb-item active">Ubah Data Training</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Ubah Data</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <?= validation_errors(); ?>
                <form action="" method="post" accept-charset="utf-8">
                  <div class="card-body">
                    <div hidden class="form-group">
                      <label for="exampleInputEmail1">id Training</label>
                      <input type="text" class="form-control disabled" name="id_training" value="<?= $ubah['id_training'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="<?= $ubah['Nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Kesejahteraan Sosial</label>
                      <select class="form-control" name="kesejahteraan_sosial">
                        <option value="Ibu hamil, maksimal dua kali kehamilan">Ibu hamil, maksimal dua kali kehamilan</option>
                        <option value="Seorang Ibu yg memiliki anak usia 0 sampai dengan 6 tahun, maksimal dua anak">Seorang Ibu yg memiliki anak usia 0 sampai dengan 6 tahun, maksimal dua anak</option>
                        <option value="Lanjut usia mulai 60 tahun ke atas, maksimal 1 orang dan berada dalam keluarga">Lanjut usia mulai 60 tahun ke atas, maksimal 1 orang dan berada dalam keluarga</option>
                        <option value="Penyandang disabilitas diutamakan penyandang disabilitas berat, maksimal 1 orang dan berada dalam keluarga">Penyandang disabilitas diutamakan penyandang disabilitas berat, maksimal 1 orang dan berada dalam keluarga</option>
                        <option value="Bukan seorang ibu rumah tangga">Bukan seorang ibu rumahtangga</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <select class="form-control" name="pekerjaan" value="<?= $ubah['Pekerjaan'] ?>">
                        <option >Tidak Memiliki Pekerjaan</option>
                        <option >Memiliki Pekerjaan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Berobat</label>
                      <select class="form-control" name="berobat" value="<?= $ubah['Berobat'] ?>">
                        <option value="Tidak mampu berobat">Tidak mampu berobat</option>
                        <option value="Mampu berobat">Mampu berobat</option>
                        <option value="Mendapat subsidi dari pemerintah">Mendapat subsidi dari pemerintah</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pengeluaran</label>
                      <select class="form-control" name="pengeluaran" value="<?= $ubah['Pengeluaran'] ?>">
                        <option value="Hanya makanan pokok secara sederhana">Hanya makanan pokok secara sederhana</option>
                        <option value="Mampu untuk kebutuhan lainnya">Mampu untuk kebutuhan lainnya</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pakaian</label>
                      <select class="form-control" name="pakaian" value="<?= $ubah['Pakaian'] ?>">
                        <option value="Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga">Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga</option>
                        <option value="Mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga">Mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pendidikan Anak</label>
                      <select class="form-control" name="pendidikan_anak">
                        <option value="Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama">Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama</option>
                        <option value="Mampu menyekolahkan anak di atas sekolah lanjutan tingkat pertama">Mampu menyekolahkan anak di atas sekolah lanjutan tingkat pertama</option>
                        <option value="Anak Sekolah Dasar(SD), Madrasah Ibtidaiyah(MI) atau sederajat">Anak Sekolah Dasar(SD), Madrasah Ibtidaiyah(MI) atau sederajat</option>
                        <option value="Anak Sekolah Menengah Pertama(SMP), Madrasah Tsanawiyah(Mts) atau sederajat">Anak Sekolah Menengah Pertama(SMP), Madrasah Tsanawiyah(Mts) atau sederajat</option>
                        <option value="Anak Sekolah Menengah Atas(SMA), Madrasah Aliyah atau sederajat">Anak Sekolah Menengah Atas(SMA), Madrasah Aliyah atau sederajat</option>
                        <option value="Anak usia 6 s/d 21 tahun yang belum menyelesaikan wajib belajar 12 tahun">Anak usia 6 s/d 21 tahun yang belum menyelesaikan wajib belajar 12 tahun</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Dinding Rumah</label>
                      <select class="form-control" name="kondisi_dinding_rumah" value="<?= $ubah['Kondisi_Dinding_Rumah'] ?>">
                        <option value="Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik">Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik</option>
                        <option value="Tembok rumah sudah usang/berlumut atau tembok tidak diplester">Tembok rumah sudah usang/berlumut atau tembok tidak diplester</option>
                        <option value="Kondisi dinding rumah baik">Kondisi dinding rumah baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Lantai Rumah</label>
                      <select class="form-control" name="kondisi_lantai_rumah" value="<?= $ubah['Kondisi_Lantai_Rumah'] ?>">
                        <option value="Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik">Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik</option>
                        <option value="Lantai dari keramik dengan kondisi baik">Lantai dari keramik dengan kondisi baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Atap Rumah</label>
                      <select class="form-control" name="kondisi_atap_rumah" value="<?= $ubah['Kondisi_Atap_Rumah'] ?>">
                        <option value="Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik">Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik</option>
                        <option value="Atap dari genteng/seng/asbes dengan kondisi baik ">Atap dari genteng/seng/asbes dengan kondisi baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Penerangan</label>
                      <select class="form-control" name="penerangan" value="<?= $ubah['Penerangan'] ?>">
                        <option value="Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran">Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran</option>
                        <option value="Mempunyai penerangan dari listrik dengan meteran">Mempunyai penerangan dari listrik dengan meteran</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Luas Lantai Rumah</label>
                      <select class="form-control" name="luas_lantai_rumah" value="<?= $ubah['Luas_Lantai_Rumah'] ?>">
                        <option value="Luas lantai rumah kecil kurang dari 8m/orang">Luas lantai rumah kecil kurang dari 8m/orang</option>
                        <option value="Luas lantai rumah lebih dari 8m/orang">Luas lantai rumah lebih dari 8m/orang</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Sumber Air Minum</label>
                      <select class="form-control" name="sumber_air_minum" value="<?= $ubah['Sumber_Air_Minum'] ?>">
                        <option value="Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya">Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya</option>
                        <option value="Mempunyai sumber air minum PDAM">Mempunyai sumber air minum PDAM</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Status Kelayakan</label>
                      <select class="form-control" name="status_kelayakan" value="<?= $ubah['status_kelayakan'] ?>">
                        <option value="layak">Layak</option>
                        <option value="tidak layak">Tidak Layak</option>
                      </select>
                    </div>






                    <!-- <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?= $ubah['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label>PKH</label>
                      <select class="form-control" name="pkh">
                        <option value="non">Non PKH</option>
                        <option value="1">PKH</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Tanggungan</label>
                      <input type="text" class="form-control" name="jml_tanggungan" value="<?= $ubah['jml_tanggungan'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Kepala Rumah Tangga</label>
                      <select class="form-control" name="kepala_rt">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Rumah</label>
                      <select class="form-control" name="kondisi_rumah">
                        <option value="batu permanen">Batu Permanen</option>
                        <option value="bambu anyam">Bambu Anyam</option>
                        <option value="papan">Papan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jumlah Penghasilan</label>
                      <input type="text" class="form-control" name="jml_penghasilan" value="<?= $ubah['jml_penghasilan'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Status Pemilik Rumah</label>
                      <select class="form-control" name="status_rumah">
                        <option value="milik sendiri">Milik Sendiri</option>
                        <option value="sewa">Sewa</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Status Kelayakan</label>
                      <select class="form-control" name="status_kelayakan">
                        <option value="layak">Layak</option>
                        <option value="tidak layak">Tidak Layak</option>
                      </select>
                    </div> -->


                    <input type="submit" name="save" class="btn btn-primary" value="Save">
                  </div>
                  <!-- /.card-body -->
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper