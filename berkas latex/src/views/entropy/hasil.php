<div id="container-fluid">
    <h1>Entropy</h1>
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
                                    <th>Nilai Bobot masing-masing kriteria</th>
                                </tr>
                            </thead>
                            <?php echo form_open('tbl_bobot/add'); ?>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Keriteria 1</td>
                                    <td>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="bobot_keriteria1" value="<?= $c1 ?>" class="form-control" id="bobot_keriteria1" readonly />
                                                <span class="text-danger"><?php echo form_error('bobot_keriteria1'); ?></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Keriteria 2</td>
                                    <td>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="bobot_keriteria2" value="<?= $c2 ?>" class="form-control" id="bobot_keriteria2" readonly />
                                                <span class="text-danger"><?php echo form_error('bobot_keriteria2'); ?></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Keriteria 3</td>
                                    <td>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="bobot_keriteria3" value="<?= $c3 ?>" class="form-control" id="bobot_keriteria3" readonly />
                                                <span class="text-danger"><?php echo form_error('bobot_keriteria3'); ?></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Keriteria 4</td>
                                    <td>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="bobot_keriteria4" value="<?= $c4 ?>" class="form-control" id="bobot_keriteria4" readonly />
                                                <span class="text-danger"><?php echo form_error('bobot_keriteria4'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="id_user" value="<?= $id_user ?>" class="form-control" id="id_user" hidden />
                                                <span class="text-danger"><?php echo form_error('id_user'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="tipe" value="<?= $tipe ?>" class="form-control" id="tipe" hidden />
                                                <span class="text-danger"><?php echo form_error('tipe'); ?></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <th scope="col">Aksi</th>
                                    <th scope="col"><input type="submit" name="submit" value="Simpan Data Entropy" class="btn btn-success"></th>
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