<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Komentar Artikel
			<small>Detail Komentar Artikel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Detail Komentar Artikel</li>
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
						<h3 class="box-title">Detail Komentar Artikel</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM komentar_artikel where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control" name="id_artikel"  id="id_artikel" value="<?php echo $hasil->id_artikel; ?>" readonly/>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<input type="text" class="form-control" name="nama" value="<?php echo $hasil->nama; ?>" readonly/>
							</div>
							<div class="form-group">
								<label>Komentar</label>
								<p style="font-family: arial black;">
									<?php echo $hasil->komentar; ?>
								</p>
							</div>
							<div class="form-group">
								<label>Komentar Balasan</label>
								<textarea name="komentar_balasan" id="komentar_balasan" class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
								</textarea>
							</div>
							<hr>
							<div class="form-actions" style="float: left;margin-left: -26px;" >
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<input type="button" class="btn default" value="Kembali" onclick="history.go(-1);">
										<a href="#" onclick="simpan()" style="margin-left: 90px; margin-top: -33px;" class="pull-right btn btn-default" id="sendEmail">Simpan <i class="fa fa-arrow-circle-right"></i></a>
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
<script type="text/javascript">

	function simpan() {
		var id_artikel = $('#id_artikel').val();
		var komentar_balasan = $('#komentar_balasan').val();
		var url = "<?php echo base_url().'admin/komentar_artikel/simpan_komentar'?> ";

		$.ajax({
			type: "POST",
			url: url,
			data: { 
				id_artikel:id_artikel,
				komentar_balasan:komentar_balasan,
			},
			beforeSend:function(){
				$(".tunggu").show();  
			},
			success: function(data)
			{
				$(".sukses").html(data);   
				setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/komentar_artikel/daftar' ?>";},1500);    
			}
		});
	}
</script>


