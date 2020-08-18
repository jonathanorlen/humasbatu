<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Detail Sambutan Humas			
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Detail Sambutan Humas</li>
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
						<h3 class="box-title">Detail Sambutan Humas</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM sambutan where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							
							<div class="form-group">
								<label>Jenis Sambutan</label>
								<input disabled type="text" class="form-control" name="jenis_sambutan" value="<?php echo $hasil->jenis_sambutan; ?>" />
							</div>

							<div class="form-group">
								<label>Judul</label>
								<input disabled type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<input disabled type="text" class="form-control" name="judul" value="<?php echo $hasil->judul; ?>" />
							</div>
							<br> 
							<div>
								<label>Isi</label>
								<textarea disabled name="isi" class="" placeholder="" style="width: 100%; height: 255px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; ">
									<?php echo $hasil->isi; ?>
								</textarea>
							</div>
							<br>
							<div class="form-group">
								<label>Tanggal</label>
								<input disabled type="text" class="form-control" name="tanggal" value="<?php echo $hasil->tanggal; ?>" />
							</div> 
							<div style="margin-top: 30px;">
								<label>Gambar : </label>	
								<?php
								$string_foto = $hasil->foto;
								list($name_img) = (explode('|',$string_foto));			
								?><center><img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="300" style="float:left; margin:20px;margin-top:0;"/></center>

							</div><br />
							<div class="form-group">
								<div class="form-group">
									<div class="box-footer clearfix" style="margin-top: 150px;float: left; margin-left:-350px; ">
										<div class="box-footer clearfix">
											<input type="button" class="btn default pull-right btn " value="Kembali"  style="margin-right: 5px;" onclick="history.go(-1);">
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!-- /.Left col -->      
				</div><!-- /.row (main row) -->

			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

