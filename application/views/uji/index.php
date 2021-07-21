<br>
<br>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Uji</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Uji</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <!-- NOTIFIKASI -->


    <!-- /.row -->
    <!-- list data -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- card-body -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <!-- <th>Pekerjaan</th>
                  <th>Berobat</th>
                  <th>Pengeluaran</th>
                  <th>Pakaian</th>
                  <th>Pendidikan Anak</th>
                  <th>Kondisi Dinding Rumah</th>
                  <th>Kondisi Atap Rumah</th>
                  <th>Kondisi Lantai Rumah</th>
                  <th>Penerangan</th>
                  <th>Luas Lantai Rumah</th>
                  <th>Sumber Air Minum</th> -->
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
                    <!-- <td><?= $row['Pekerjaan']; ?></td>
                    <td><?= $row['Berobat']; ?></td>
                    <td><?= $row['Pengeluaran']; ?></td>
                    <td><?= $row['Pakaian']; ?></td>
                    <td><?= $row['Pendidikan_Anak']; ?></td>
                    <td><?= $row['Kondisi_Dinding_Rumah']; ?></td>
                    <td><?= $row['Kondisi_Atap_Rumah']; ?></td>
                    <td><?= $row['Kondisi_Lantai_Rumah']; ?></td>
                    <td><?= $row['Penerangan']; ?></td>
                    <td><?= $row['Luas_Lantai_Rumah']; ?></td>
                    <td><?= $row['Sumber_Air_Minum']; ?></td> -->
                    <td><?= $row['status_kelayakan']; ?></td>
                    <td>
                      
                        <div class="btn-group">
                          <a class='btn btn-success btn-xs' title='Detail Data' href="<?= base_url('DataUji/detail/'); ?><?= $row['id_training']; ?>"><span class='glyphicon glyphicon-search'></span>Detail</a>
                          <a class='btn btn-warning btn-xs' title='Edit Data' href="<?= base_url('DataUji/ubah/'); ?><?= $row['id_training']; ?>"><span class='glyphicon glyphicon-edit'></span>edit</a>
                          <a class='btn btn-danger btn-xs' title='Delete Data' href="<?= base_url('DataUji/hapus/'); ?><?= $row['id_training']; ?>" onclick="return confirm('Apa anda yakin untuk hapus Data ini?')"><span class='glyphicon glyphicon-remove'></span>hapus</a>
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