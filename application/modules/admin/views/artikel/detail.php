<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Detail Artikel			
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Detail Artikel</li>
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
						<i class="fa fa-search"></i>
						<h3 class="box-title">Detail Artikel</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM artikel where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							
							<div class="form-group">
								<label>Kode Kategori</label>
								<input disabled type="text" class="form-control" name="kode_kategori" value="<?php echo $hasil->kode_kategori; ?>" />
							</div>
							<br>
							<div class="form-group">
								<label>Nama Kategori</label>
								<input disabled type="text" class="form-control" name="nama_kategori" value="<?php echo $hasil->nama_kategori; ?>" />
							</div>
							<br>
							<div class="form-group">
								<label>Judul</label>
								<input disabled type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<input disabled type="text" class="form-control" name="judul" value="<?php echo $hasil->judul; ?>" />
							</div>
							<br> 
							<div>
								<label>Isi</label>
								<textarea disabled readonly="" name="isi" class="textarea" tabindex="-1" placeholder="" style="width: 100%; height: 255px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; word-break: normal;word-wrap:break-word; word-spacing:0px; text-rendering: auto; font-style: normal; font-weight: normal; letter-spacing: normal;font-variant-ligatures:normal;font-variant-caps:normal;">
									<?php echo $hasil->isi; ?>
								</textarea>
							</div>
							<br>
				<!-- 			<div class="form-group">
								<label>Kode Petugas</label>
								<input disabled type="text" class="form-control" name="kode_petugas" value="<?php echo $hasil->kode_petugas; ?>" />
							</div>
							<br>
							<div class="form-group">
								<label>Nama Petugas</label>
								<input disabled type="text" class="form-control" name="nama_petugas" value="<?php echo $hasil->nama_petugas; ?>" />
							</div>

							<br>
							<div class="form-group">
								<label>Tanggal</label>
								<input disabled type="text" class="form-control" name="tanggal" value="<?php echo $hasil->tanggal; ?>" />
							</div> --> 
							<div style="margin-top: 30px;">
								<label>Gambar : </label>	
								<?php
								$string_foto = $hasil->foto;
								list($name_img) = (explode('|',$string_foto));			
								?><center><img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="300" style="float:left; margin:20px;margin-top:0;"/></center>

							</div>
							<br />
							<div class="box-footer clearfix"">
								<div class="box-footer clearfix" style="margin-top: 220px; float: left; margin-left:-350px;">
									<input type="button" class="btn default pull-right btn " value="Kembali"  style="margin-right: 5px;" onclick="history.go(-1);">
								</div>
							</div>
						</div>
					</div>
				</section><!-- /.Left col -->      
			</div><!-- /.row (main row) -->

		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->

