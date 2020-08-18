<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Kategori Artikel
			<small>Detail Kategori Artikel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Detail Kategori Artikel</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">             
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->

				<!-- TO DO List -->

				<!-- quick email widget -->
				<div class="box box-info">
					<div class="box-header">
						<i class="fa fa-envelope"></i>
						<h3 class="box-title">Detail Kategori Artikel</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM kategori_artikel where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<label>Kode Kategori</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<input type="text" class="form-control" name="kode_kategori" value="<?php echo $hasil->kode_kategori; ?>" readonly/>
							</div>
							<div>
								<label>Nama Kategori</label>
								<input type="text" class="form-control" name="nama_kategori" value="<?php echo $hasil->nama_kategori; ?>" readonly />
							</div>
							<br>
							<div class="form-actions" style="float: left;margin-left: -26px;" >
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<input type="button" class="btn default" value="Kembali" onclick="history.go(-1);">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->


