<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Form Tambah Data User</h1>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>

<section class="content">
	<div class="container-fluid">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Menambah Data User</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open('tbl_user/add'); ?>
			<div class="card-body">
				<label for="user_password" class="control-label"><span class="text-danger">*</span>User Password</label>
				<div class="form-group">
					<input type="password" name="user_password" value="<?php echo $this->input->post('user_password'); ?>" class="form-control" id="user_password" />
					<span class="text-danger"><?php echo form_error('user_password'); ?></span>
				</div>
				<label for="user_name" class="control-label"><span class="text-danger">*</span>User Name</label>
				<div class="form-group">
					<input type="text" name="user_name" value="<?php echo $this->input->post('user_name'); ?>" class="form-control" id="user_name" />
					<span class="text-danger"><?php echo form_error('user_name'); ?></span>
				</div>
				<label for="user_email" class="control-label"><span class="text-danger">*</span>User Email</label>
				<div class="form-group">
					<input type="text" name="user_email" value="<?php echo $this->input->post('user_email'); ?>" class="form-control" id="user_email" />
					<span class="text-danger"><?php echo form_error('user_email'); ?></span>
				</div>
				<label for="user_level" class="control-label"><span class="text-danger">*</span>User Level</label>
				<div class="form-group">
					<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="user_level" data-select2-id="1" tabindex="-1" aria-hidden="true" id="user_level">
						<option selected="selected" data-select2-id="admin" value="admin">Admin</option>
						<option data-select2-id="30" value="user">User</option>
					</select>
				</div>
				<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
				<div class="form-group">
					<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="status" data-select2-id="1" tabindex="-1" aria-hidden="true" id="user_level">
						<option selected="selected" data-select2-id="3" value="1">Aktif</option>
						<option data-select2-id="30" value="0">tidak aktif</option>
					</select>
				</div>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Simpan Data</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div><!-- /.container-fluid -->
</section>