<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h3 class="m-0 text-dark">Form Edit Data Bobot</h3>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>

<section class="content">
	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Mengedit Data Bobot</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open('tbl_bobot/edit/' . $tbl_bobot['id_bobot']); ?>
			<div class="card-body">
				<label for="bobot_keriteria1" class="control-label"><span class="text-danger">*</span>Bobot Keriteria1<small>(Harga)</small></label>
				<div class="form-group">
					<input type="text" name="bobot_keriteria1" value="<?php echo ($this->input->post('bobot_keriteria1') ? $this->input->post('bobot_keriteria1') : $tbl_bobot['bobot_keriteria1']); ?>" class="form-control" id="bobot_keriteria1" />
					<span class="text-danger"><?php echo form_error('bobot_keriteria1'); ?></span>
				</div>
				<label for="bobot_keriteria2" class="control-label"><span class="text-danger">*</span>Bobot Keriteria2<small>(Kamera Belakang)</small></label>
				<div class="form-group">
					<input type="text" name="bobot_keriteria2" value="<?php echo ($this->input->post('bobot_keriteria2') ? $this->input->post('bobot_keriteria2') : $tbl_bobot['bobot_keriteria2']); ?>" class="form-control" id="bobot_keriteria2" />
					<span class="text-danger"><?php echo form_error('bobot_keriteria2'); ?></span>
				</div>
				<label for="bobot_keriteria3" class="control-label"><span class="text-danger">*</span>Bobot Keriteria3<small>(Kamera Depan)</small></label>
				<div class="form-group">
					<input type="text" name="bobot_keriteria3" value="<?php echo ($this->input->post('bobot_keriteria3') ? $this->input->post('bobot_keriteria3') : $tbl_bobot['bobot_keriteria3']); ?>" class="form-control" id="bobot_keriteria3" />
					<span class="text-danger"><?php echo form_error('bobot_keriteria3'); ?></span>
				</div>
				<label for="bobot_keriteria4" class="control-label"><span class="text-danger">*</span>Bobot Keriteria4<small>(Memori)</small></label>
				<div class="form-group">
					<input type="text" name="bobot_keriteria4" value="<?php echo ($this->input->post('bobot_keriteria4') ? $this->input->post('bobot_keriteria4') : $tbl_bobot['bobot_keriteria4']); ?>" class="form-control" id="bobot_keriteria4" />
					<span class="text-danger"><?php echo form_error('bobot_keriteria4'); ?></span>
				</div>
				<label for="id_user" class="control-label"><span class="text-danger">*</span>Id User</label>
				<div class="form-group">
					<input type="text" name="id_user" value="<?php echo ($this->input->post('id_user') ? $this->input->post('id_user') : $tbl_bobot['id_user']); ?>" class="form-control" id="id_user" />
					<span class="text-danger"><?php echo form_error('id_user'); ?></span>
				</div>
			</div>

			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div><!-- /.container-fluid -->
</section>