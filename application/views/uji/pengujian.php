<br>
<br>
<title><?= $title ?></title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengujian</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('DataChart'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Pengujian</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <!-- NOTIFIKASI -->
    <?php
    if ($this->session->flashdata('flash_hitung')) { ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6>
          <i class="icon fas fa-check"></i>
          Data Berhasil
          <strong>
            <?= $this->session->flashdata('flash_hitung');   ?>
          </strong>
        </h6>
      </div>
    <?php } ?>
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title"> Proses </h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#proses" aria-expanded="false" aria-controls="proses">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="collapse" id="proses">
            <div class="row">
              <div class="col-md-8">
                <?= validation_errors(); ?>
                <form action="<?= base_url() ?>DataUji/hitung" target="_blank" method="post" accept-charset="utf-8">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama">
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
                      <select class="form-control" name="pekerjaan">
                        <option value="Tidak Memiliki Pekerjaan">Tidak Memiliki Pekerjaan</option>
                        <option value="Memiliki Pekerjaan">Memiliki Pekerjaan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Berobat</label>
                      <select class="form-control" name="berobat">
                        <option value="Tidak mampu berobat">Tidak mampu berobat</option>
                        <option value="Mampu berobat">Mampu berobat</option>
                        <option value="Mendapat subsidi dari pemerintah">Mendapat subsidi dari pemerintah</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pengeluaran</label>
                      <select class="form-control" name="pengeluaran">
                        <option value="Hanya makanan pokok secara sederhana">Hanya makanan pokok secara sederhana</option>
                        <option value="Mampu untuk kebutuhan lainnya">Mampu untuk kebutuhan lainnya</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pakaian</label>
                      <select class="form-control" name="pakaian">
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
                      <select class="form-control" name="kondisi_dinding_rumah">
                        <option value="Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik">Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik</option>
                        <option value="Tembok rumah sudah usang/berlumut atau tembok tidak diplester">Tembok rumah sudah usang/berlumut atau tembok tidak diplester</option>
                        <option value="Kondisi dinding rumah baik">Kondisi dinding rumah baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Lantai Rumah</label>
                      <select class="form-control" name="kondisi_lantai_rumah">
                        <option value="Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik">Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik</option>
                        <option value="Lantai dari keramik dengan kondisi baik">Lantai dari keramik dengan kondisi baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Atap Rumah</label>
                      <select class="form-control" name="kondisi_atap_rumah">
                        <option value="Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik">Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik</option>
                        <option value="Atap dari genteng/seng/asbes dengan kondisi baik ">Atap dari genteng/seng/asbes dengan kondisi baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Penerangan</label>
                      <select class="form-control" name="penerangan">
                        <option value="Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran">Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran</option>
                        <option value="Mempunyai penerangan dari listrik dengan meteran">Mempunyai penerangan dari listrik dengan meteran</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Luas Lantai Rumah</label>
                      <select class="form-control" name="luas_lantai_rumah">
                        <option value="Luas lantai rumah kecil kurang dari 8m/orang">Luas lantai rumah kecil kurang dari 8m/orang</option>
                        <option value="Luas lantai rumah lebih dari 8m/orang">Luas lantai rumah lebih dari 8m/orang</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Sumber Air Minum</label>
                      <select class="form-control" name="sumber_air_minum">
                        <option value="Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya">Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya</option>
                        <option value="Mempunyai sumber air minum PDAM">Mempunyai sumber air minum PDAM</option>
                      </select>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Proses">
                  </div>
                  <!-- /.card-body -->
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>

          <div class="card-header">
            <h5 class="card-title"> Proses dan simpan data </h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#prosesdansimpandata" aria-expanded="false" aria-controls="prosesdansimpandata">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="collapse" id="prosesdansimpandata">
            <div class="row">
              <div class="col-md-8">
                <?= validation_errors(); ?>
                <form action="<?= base_url() ?>DataUji/hitungsimpan" target="_blank" method="post" accept-charset="utf-8">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama">
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
                      <select class="form-control" name="pekerjaan">
                        <option value="Tidak Memiliki Pekerjaan">Tidak Memiliki Pekerjaan</option>
                        <option value="Memiliki Pekerjaan">Memiliki Pekerjaan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Berobat</label>
                      <select class="form-control" name="berobat">
                        <option value="Tidak mampu berobat">Tidak mampu berobat</option>
                        <option value="Mampu berobat">Mampu berobat</option>
                        <option value="Mendapat subsidi dari pemerintah">Mendapat subsidi dari pemerintah</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pengeluaran</label>
                      <select class="form-control" name="pengeluaran">
                        <option value="Hanya makanan pokok secara sederhana">Hanya makanan pokok secara sederhana</option>
                        <option value="Mampu untuk kebutuhan lainnya">Mampu untuk kebutuhan lainnya</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pakaian</label>
                      <select class="form-control" name="pakaian">
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
                      <select class="form-control" name="kondisi_dinding_rumah">
                        <option value="Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik">Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik</option>
                        <option value="Tembok rumah sudah usang/berlumut atau tembok tidak diplester">Tembok rumah sudah usang/berlumut atau tembok tidak diplester</option>
                        <option value="Kondisi dinding rumah baik">Kondisi dinding rumah baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Lantai Rumah</label>
                      <select class="form-control" name="kondisi_lantai_rumah">
                        <option value="Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik">Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik</option>
                        <option value="Lantai dari keramik dengan kondisi baik">Lantai dari keramik dengan kondisi baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kondisi Atap Rumah</label>
                      <select class="form-control" name="kondisi_atap_rumah">
                        <option value="Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik">Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik</option>
                        <option value="Atap dari genteng/seng/asbes dengan kondisi baik ">Atap dari genteng/seng/asbes dengan kondisi baik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Penerangan</label>
                      <select class="form-control" name="penerangan">
                        <option value="Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran">Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran</option>
                        <option value="Mempunyai penerangan dari listrik dengan meteran">Mempunyai penerangan dari listrik dengan meteran</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Luas Lantai Rumah</label>
                      <select class="form-control" name="luas_lantai_rumah">
                        <option value="Luas lantai rumah kecil kurang dari 8m/orang">Luas lantai rumah kecil kurang dari 8m/orang</option>
                        <option value="Luas lantai rumah lebih dari 8m/orang">Luas lantai rumah lebih dari 8m/orang</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Sumber Air Minum</label>
                      <select class="form-control" name="sumber_air_minum">
                        <option value="Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya">Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya</option>
                        <option value="Mempunyai sumber air minum PDAM">Mempunyai sumber air minum PDAM</option>
                      </select>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Proses dan simpan">
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
    <!-- list data -->
    <div hidden class="row">
      <div class="col-12">
        <div class="card">
          <!-- card-body -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Pekerjaan</th>
                  <th>Berobat</th>
                  <th>Pengeluaran</th>
                  <th>Pakaian</th>
                  <th>Pendidikan Anak</th>
                  <th>Kondisi Dinding Rumah</th>
                  <th>Kondisi Atap Rumah</th>
                  <th>Kondisi Lantai Rumah</th>
                  <th>Penerangan</th>
                  <th>Luas Lantai Rumah</th>
                  <th>Sumber Air Minum</th>
                  <th>Status Kelayakan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($training as $row) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['Nama']; ?></td>
                    <td><?= $row['Pekerjaan']; ?></td>
                    <td><?= $row['Berobat']; ?></td>
                    <td><?= $row['Pengeluaran']; ?></td>
                    <td><?= $row['Pakaian']; ?></td>
                    <td><?= $row['Pendidikan_Anak']; ?></td>
                    <td><?= $row['Kondisi_Dinding_Rumah']; ?></td>
                    <td><?= $row['Kondisi_Atap_Rumah']; ?></td>
                    <td><?= $row['Kondisi_Lantai_Rumah']; ?></td>
                    <td><?= $row['Penerangan']; ?></td>
                    <td><?= $row['Luas_Lantai_Rumah']; ?></td>
                    <td><?= $row['Sumber_Air_Minum']; ?></td>
                    <td><?= $row['status_kelayakan']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="<?= base_url('admin/hapus'); ?><?= $row['id_training']; ?>" class="btn btn-danger" onclick="return confirm('yakin ?')">Hapus</a>
                        <a href="<?= base_url('admin/ubah'); ?><?= $row['id_training']; ?>" class="btn btn-warning">update</a>
                      </div>
                    </td>
                  </tr>
                <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>