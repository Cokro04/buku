<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Alternatif</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Alternatif<small>( berupa handphone )</small></h3>
                <div class="float-right">
                    <a href="<?php echo site_url('tbl_alternatif/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Alternatif Nama</th>
                            <th>Harga</th>
                            <th>kamera belakang</th>
                            <th>Kamera depan</th>
                            <th>memory</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tbl_alternatif as $t) { ?>
                            <tr>
                                <td><?php echo $t['alternatif_nama']; ?></td>
                                <td><?php echo $t['kriteria_1']; ?></td>
                                <td><?php echo $t['kriteria_2']; ?></td>
                                <td><?php echo $t['kriteria_3']; ?></td>
                                <td><?php echo $t['kriteria_4']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('tbl_alternatif/detail/' . $t['alternatif_id']); ?>" class="btn btn-info btn-xs"><span class="fas fa-info"> </span> Detail Data</a>
                                    <a href="<?php echo site_url('tbl_alternatif/edit/' . $t['alternatif_id']); ?>" class="btn btn-warning btn-xs"><span class="fas fa-pencil-alt"> </span> Edit</a>
                                    <a href="<?php echo site_url('tbl_alternatif/remove/' . $t['alternatif_id']); ?>" class="btn btn-danger btn-xs"><span class="fas fa-trash"> </span> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Alternatif Nama</th>
                            <th>Harga</th>
                            <th>kamera belakang</th>
                            <th>Kamera depan</th>
                            <th>memory</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>