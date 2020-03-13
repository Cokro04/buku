<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Bobot</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Bobot Menggunakan Entropy</h3>
                <div class="float-right">
                    <?php if ($this->session->userdata('user_level') === 'admin') { ?>
                        <a href="<?php echo site_url('tbl_bobot/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    <?php } ?>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id Bobot</th>
                            <th>Bobot Harga</th>
                            <th>Bobot Kamera belakang</th>
                            <th>Bobot Kamera depan</th>
                            <th>Bobot Memori</th>
                            <th>Id User</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tbl_bobot as $t) { ?>
                            <tr>
                                <td><?php echo $t['id_bobot']; ?></td>
                                <td><?php echo $t['bobot_keriteria1']; ?></td>
                                <td><?php echo $t['bobot_keriteria2']; ?></td>
                                <td><?php echo $t['bobot_keriteria3']; ?></td>
                                <td><?php echo $t['bobot_keriteria4']; ?></td>
                                <td><?php echo $t['id_user']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('tbl_bobot/edit/' . $t['id_bobot']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                    <a href="<?php echo site_url('tbl_bobot/remove/' . $t['id_bobot']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id Bobot</th>
                            <th>Bobot Harga</th>
                            <th>Bobot Kamera belakang</th>
                            <th>Bobot Kamera depan</th>
                            <th>Bobot Memori</th>
                            <th>Id User</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>