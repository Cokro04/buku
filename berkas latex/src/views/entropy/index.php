<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Proses Entropy</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo form_open('proses_entropy/proses'); ?>
            <div class="card-body">
                <label for="parameter" class="control-label"><span class="text-danger">*</span>Masukan ID User</label>
                <div class="form-group">
                    <input type="text" name="parameter" value="<?php echo $this->input->post('parameter'); ?>" class="form-control" id="parameter" required />
                    <span class="text-danger"><?php echo form_error('parameter'); ?></span>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div><!-- /.container-fluid -->
</section>