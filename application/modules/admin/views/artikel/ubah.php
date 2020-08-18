<script type="text/javascript">
	$(function () {

		$("#data_form").submit( function() {    
			$.ajax( {  
				type :"post",  
				url : "<?php echo base_url() . 'admin/artikel/simpan_ubah' ?>",  
				cache :false,  
				data :$(this).serialize(),
				success : function(data) {  
					$(".sukses").html(data);   
					setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/artikel/daftar' ?>";},1500);              
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
			Edit Artikel
			<!-- <small>Edit Edit Artikel</small> -->
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Edit Artikel</li>
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
						<h3 class="box-title">Edit Artikel</h3>
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
								<label>Nama Kategori</label>
								<?php
								$unit =$this->db->get('kategori_artikel');
								$hasil_unit = $unit->result();
								?>
								<select onchange="get_kode()" class="form-control" name="kode_kategori" id="kode_kategori" >
									
									<!-- <option value="<?php echo  $hasil->kode_kategori;?>"><?php echo $hasil->nama_kategori;?></option> -->

									<option value="<?php if(!empty($paramaeter)){echo @$hasil->nama_kategori;}?>"><?php echo $hasil->nama_kategori;?></option>
									
									<?php foreach($hasil_unit as $item){ ?>
									<option  <?php if (@$hasil->kode_kategori == $item->kode_kategori){echo'selected';} ?> value="<?php echo $item->kode_kategori ?>" ><?php echo $item->nama_kategori ?></option>
									<?php } ?>
								</select>
							</div> 



					<div class="form-group">
								<label>Nama Kategori</label>
								<input type="hidden" class="form-control" id="nama_kategori" name="nama_kategori" value="<?php echo $hasil->nama_kategori;?>" />
							</div> 


							<div class="form-group">
								<label>Judul Agenda</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<input type="text" class="form-control" name="judul" value="<?php echo $hasil->judul; ?>" />
							</div> 
							<div>
								<label>Isi Artikel</label>
								<textarea name="isi" class="textarea" placeholder="" style="width: 100%; height: 255px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
									<?php echo $hasil->isi; ?>
								</textarea>
							</div>
							<br>
							<!-- <div class="form-group">
								<label>Kode Petugas</label>
								<input type="text" class="form-control" name="kode_petugas" value="<?php echo $hasil->kode_petugas; ?>" />
							</div> 
							<div class="form-group">
								<label>Nama Petugas</label>
								<input type="text" class="form-control" name="nama_petugas" value="<?php echo $hasil->nama_petugas; ?>" />
							</div>  -->
							<div class="box-footer clearfix">
								<a class="btn btn-app blue" id="upload_foto">
									<i class="fa fa-edit"></i> Image 
								</a>
							</div>
							<div class="box_upload"></div>
							<div class="foto_upload"></div>
							 <label> Keterangan : Ukuran gambar untuk upload foto 555x350</label> 
							
							<div class="box-footer clearfix">
								<button type="submit" class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
								<input type="button" class="btn default pull-right btn " value="Kembali"  style="margin-right: 5px;" onclick="history.go(-1);">
							</div>
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->


<script type="text/javascript">
	
	$("#kode_kategori").change( function() {
		var kode_kategori = $('#kode_kategori').val();
		$.ajax( {  
			type :"post",  
			url :"<?php echo base_url().'admin/artikel/get_kode' ?>",  
			cache: false,
			dataType: 'json',
			data:{kode_kategori: kode_kategori},
			success : function(data) { 
				$('#nama_kategori').val(data.nama_kategori);
			},  
		});
		return false;
	});

</script>