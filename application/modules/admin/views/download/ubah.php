
<script type="text/javascript">
	$(function () {

		$("#data_form").submit( function() {    
			$.ajax( {  
				type :"post",  
				url : "<?php echo base_url() . 'admin/download/simpan_ubah' ?>",  
				cache :false,  
				data :$(this).serialize(),
				success : function(data) {  
					$(".sukses").html(data);   
					setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/download/daftar' ?>";},1500);              
				},  
				error : function() {  
					alert("Data gagal dimasukkan.");  
				}  
			});
			return false;                          
		});   

		$("#upload_foto").click( function() {    
			$.ajax( {  
				type :"post",  
				url : "<?php echo base_url() . 'component/upload/foto' ?>",  
				cache :false,  
				data :$(this).serialize(),
				success : function(data) {  
					$(".box_upload").html(data);           
				},  
				error : function() {  
					alert("Data gagal dimasukkan.");  
				}  
			});
			return false;                          
		}); 

	});
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Download
			<small></small>
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
						<i class="fa fa-download"></i>
						<h3 class="box-title">Edit Download</h3>
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
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<br>
								<label>Jenis Dokumen</label>
								<select name="jenis_dokumen" class="form-control" tabindex="-1" aria-hidden="true">
									<option value="Hukum" <?php if ($hasil->jenis_dokumen == '1'){echo'selected="true"';} ?>>Hukum</option>
									<option value="Umum" <?php if ($hasil->jenis_dokumen == '0'){echo'selected="true"';} ?>>Umum</option>
									<option value="Humas" <?php if ($hasil->jenis_dokumen == '0'){echo'selected="true"';} ?>>Humas</option>	
								</select>
							</div>
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<label>Judul</label>
								<input type="text" class="form-control" name="judul" value="<?php echo $hasil->judul; ?>" />
							</div>
							<div class="box-footer clearfix">
								<a class="btn btn-app blue" id="upload_foto">
									<i class="fa fa-edit"></i> Files Input
								</a>
							</div>
							<div class="box_upload"></div>
							<div class="foto_upload"></div>
							<label></label>
							<div class="form-group">
								<label>Isi</label>
								<textarea name="isi" placeholder="Deskripsi Data" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $hasil->isi?></textarea>
							</div>
							<div class="box-footer clearfix">
								<button type="submit" class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
							</div>
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->


