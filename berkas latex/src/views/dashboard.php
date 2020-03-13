<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Dashboard</h1>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<?php if ($this->session->userdata('user_level') === 'admin') { ?>
			<div class="row">
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3></h3>

							<p>Data Alternatif</p>
						</div>
						<div class="icon">
							<i class="ion ion-document"></i>
						</div>
						<a href="<?= base_url('tbl_alternatif') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3></h3>

							<p>Data Bobot</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="<?= base_url('tbl_bobot') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3></h3>

							<p>Data User</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="<?= base_url('tbl_user'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
		<?php } elseif ($this->session->userdata('user_level') === 'user') { ?>
			<div class="row">
				<div class="col-lg-6 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3></h3>

							<p>Data Alternatif</p>
						</div>
						<div class="icon">
							<i class="ion ion-document"></i>
						</div>
						<a href="<?= base_url('tbl_alternatif/index_user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-6 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3></h3>

							<p>Data Bobot</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="<?= base_url('tbl_bobot') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
		<?php } ?>
	</div><!-- /.container-fluid -->
</section>