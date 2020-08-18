<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Download			
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Download</li>
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
						<h3 class="box-title">Detail Download</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM download where id='$id'");
						$hasil = $get->row();

						$string_foto = $hasil->foto; 
						list($name_img) = (explode('|',$string_foto));
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<br>
								<label>Jenis Dokumen</label>
								<select name="jenis_dokumen" class="form-control" tabindex="-1" aria-hidden="true" disabled="">
									<option value="hukum" <?php if ($hasil->jenis_dokumen == '1'){echo'selected="true"';} ?>>Hukum</option>
									<option value="umum" <?php if ($hasil->jenis_dokumen == '0'){echo'selected="true"';} ?>>Umum</option>
									<option value="humas" <?php if ($hasil->jenis_dokumen == '0'){echo'selected="true"';} ?>>Humas</option>	
								</select>
							</div>
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<label>Judul</label>
								<input type="text" disabled="" class="form-control" name="judul" value="<?php echo $hasil->judul; ?>" />
							</div>
							<div class="form-group">
								<label>Isi</label>
								<textarea name="isi" disabled="" placeholder="Deskripsi Data" class="form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $hasil->isi?></textarea>
							</div>
							<div class="form-group">
								<label>Foto</label>
								<h2><img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" width="200" height="200"/></h2>								
							</div>
							<div class="box-footer clearfix" style="margin-top: 1px;float: left; ">
								<div class="box-footer clearfix">
									<input type="button" class="btn default pull-right btn " value="Kembali"  style="margin-right: 5px;" onclick="history.go(-1);">
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

