<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">User</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data User</h3>
                <div class="float-right">
                    <a href="<?php echo site_url('tbl_user/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tbl_user as $t) { ?>
                            <tr>
                                <td><?php echo $t['user_name']; ?></td>
                                <td><?php echo $t['user_email']; ?></td>
                                <td><?php echo $t['user_level']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('tbl_user/detail/' . $t['user_id']); ?>" class="btn btn-info btn-xs"><span class="fas fa-info"> </span> Detail Data</a>
                                    <a href="<?php echo site_url('tbl_user/edit/' . $t['user_id']); ?>" class="btn btn-warning btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a>
                                    <a href="<?php echo site_url('tbl_user/remove/' . $t['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Level</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>