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
                    <h1>Detail data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <a class="btn btn-info" href="<?= base_url('User'); ?>">Cancel</a>
                        <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Detail</li> -->
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">


        <table class='table table-condensed table-bordered'>
            <tbody>
            <tr><th scope='row'>Nama</th> <td><?php echo $detail['Nama']?></td></tr>
            <tr><th scope='row'>Kesejahteraan Sosial</th> <td><?php echo $detail['Kesejahteraan_Sosial']?></td></tr>
            <tr><th scope='row'>Pekerjaan</th> <td><?php echo $detail['Pekerjaan']?></td></tr>
            <tr><th scope='row'>Berobat</th> <td><?php echo $detail['Berobat']?></td></tr>
            <tr><th scope='row'>Pengeluaran</th> <td><?php echo $detail['Pengeluaran']?></td></tr>
            <tr><th scope='row'>Pakaian</th> <td><?php echo $detail['Pakaian']?></td></tr>
            <tr><th scope='row'>Pendidikan anak</th> <td><?php echo $detail['Pendidikan_Anak']?></td></tr>
            <tr><th scope='row'>Kondisi dinding rumah</th> <td><?php echo $detail['Kondisi_Dinding_Rumah']?></td></tr>
            <tr><th scope='row'>Kondisi atap rumah</th> <td><?php echo $detail['Kondisi_Atap_Rumah']?></td></tr>
            <tr><th scope='row'>Kondisi lantai rumah</th> <td><?php echo $detail['Kondisi_Lantai_Rumah']?></td></tr>
            <tr><th scope='row'>Penerangan</th> <td><?php echo $detail['Penerangan']?></td></tr>
            <tr><th scope='row'>Luas lantai rumah</th> <td><?php echo $detail['Luas_Lantai_Rumah']?></td></tr>
            <tr><th scope='row'>Sumber air minum</th> <td><?php echo $detail['Sumber_Air_Minum']?></td></tr>
            <tr><th scope='row'>Status kelayakan</th> <td><?php echo $detail['status_kelayakan']?></td></tr>
            </tbody>
        </table>


    </section>
    <!-- /.content -->
</div>