<div id="container-fluid">
    <h1>Detail Data Alternatif</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Kriteria</th>
                                    <th>Nilai masing-masing kriteria</th>
                                </tr>
                            </thead>
                            <?php echo form_open('tbl_bobot/add'); ?>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>id alternatif</td>
                                    <td><?= $tbl_alternatif['alternatif_id']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Nama Alternatif</td>
                                    <td><?= $tbl_alternatif['alternatif_nama']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Harga</td>
                                    <td><?= $tbl_alternatif['kriteria_1']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Kamera Belakang</td>
                                    <td><?= $tbl_alternatif['kriteria_2']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Kamera depan</td>
                                    <td><?= $tbl_alternatif['kriteria_3']; ?></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Memori</td>
                                    <td><?= $tbl_alternatif['kriteria_4']; ?></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>id user</td>
                                    <td><?= $tbl_alternatif['id_user']; ?></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <th>Aksi</th>
                                    <td>
                                        <a href="<?php echo site_url('tbl_alternatif/'); ?>" class="btn btn-secondary"><span class="fa fa-pencil"></span> Kembali</a>
                                        <a href="<?php echo site_url('tbl_alternatif/edit/' . $tbl_alternatif['alternatif_id']); ?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span> Edit Data</a></td>
                                </tr>
                            </tbody>
                            <?php echo form_close(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>