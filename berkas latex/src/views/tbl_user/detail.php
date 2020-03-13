<div id="container-fluid">
    <h1>Detail Data User</h1>
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
                                    <th style="width: 250px">Nama Kriteria</th>
                                    <th>Nilai masing-masing kriteria</th>
                                </tr>
                            </thead>
                            <?php echo form_open('tbl_bobot/add'); ?>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>id user</td>
                                    <td><?= $tbl_user['user_id']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>User name</td>
                                    <td><?= $tbl_user['user_name']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>User Email</td>
                                    <td><?= $tbl_user['user_email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>User Password</td>
                                    <td>
                                        <?php echo $this->enkripsi->decryptIt($tbl_user['user_password']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Level User</td>
                                    <td><?= $tbl_user['user_level']; ?></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Status</td>
                                    <td>
                                        <?php if ($tbl_user['status'] === '1') {
                                            echo 'aktif';
                                        } else {
                                            echo 'tidak aktif';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <th>Aksi</th>
                                    <td>
                                        <a href="<?php echo site_url('tbl_user/'); ?>" class="btn btn-secondary"><span class="fa fa-pencil"></span> Kembali</a>
                                        <a href="<?php echo site_url('tbl_user/edit/' . $tbl_user['user_id']); ?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span> Edit Data</a></td>
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