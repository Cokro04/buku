<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h3 class="m-0 text-dark">Form tampah Data Alternatif</h3>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>

<section class="content">
	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Menambah Data Alternatif</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open('tbl_alternatif/add'); ?>
			<div class="card-body">
				<label for="alternatif_nama" class="control-label"><span class="text-danger">*</span>Nama Alternatif</label>
				<div class="form-group">
					<input type="text" name="alternatif_nama" value="<?php echo $this->input->post('alternatif_nama'); ?>" class="form-control" id="alternatif_nama" />
					<span class="text-danger"><?php echo form_error('alternatif_nama'); ?></span>
				</div>
				<label for="kriteria_1" class="control-label"><span class="text-danger">*</span>Harga</label>
				<div class="form-group">
					<input type="text" name="kriteria_1" value="<?php echo $this->input->post('kriteria_1'); ?>" class="form-control" id="kriteria_1" />
					<span class="text-danger"><?php echo form_error('kriteria_1'); ?></span>
				</div>
				<label for="kriteria_2" class="control-label"><span class="text-danger">*</span>Kamera belakang</label>
				<div class="form-group">
					<input type="text" name="kriteria_2" value="<?php echo $this->input->post('kriteria_2'); ?>" class="form-control" id="kriteria_2" />
					<span class="text-danger"><?php echo form_error('kriteria_2'); ?></span>
				</div>
				<label for="kriteria_3" class="control-label"><span class="text-danger">*</span>Kamera depan</label>
				<div class="form-group">
					<input type="text" name="kriteria_3" value="<?php echo $this->input->post('kriteria_3'); ?>" class="form-control" id="kriteria_3" />
					<span class="text-danger"><?php echo form_error('kriteria_3'); ?></span>
				</div>
				<label for="kriteria_4" class="control-label"><span class="text-danger">*</span>Memori</label>
				<div class="form-group">
					<input type="text" name="kriteria_4" value="<?php echo $this->input->post('kriteria_4'); ?>" class="form-control" id="kriteria_4" />
					<span class="text-danger"><?php echo form_error('kriteria_4'); ?></span>
				</div>
				<label for="id_user" class="control-label"><span class="text-danger">*</span>Id User</label>
				<?php if ($this->session->userdata('user_level') === 'admin') { 	?>
					<div class="form-group">
						<input type="text" name="id_user" value="<?php echo $this->session->userdata('user_id') ?>" class="form-control" id="id_user" />
						<span class="text-danger"><?php echo form_error('id_user'); ?></span>
					</div>
				<?php } else { 	?>
					<div class="form-group">
						<input type="text" name="id_user" value="<?php echo $this->session->userdata('user_id') ?>" class="form-control" id="id_user" readonly />
						<span class="text-danger"><?php echo form_error('id_user'); ?></span>
					</div>
				<?php } ?>
			</div>

			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Simpan Data</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div><!-- /.container-fluid -->
</section>