<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Detail Video			
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Detail Video</li>
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
						<h3 class="box-title">Detail Video</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM video where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
							<label>Judul</label>
								<input disabled type="hidden" class="form-control" name="id" value="<?php echo $hasil->id; ?>" />
								<input disabled type="text" class="form-control" name="judul" value="<?php echo $hasil->judul; ?>" />
							</div> 

							<div class="form-group">
							<label>Link</label>
								<input disabled type="text" class="form-control" name="link" value="<?php echo $hasil->link; ?>" />
							</div> 
							
							
							<form method="post" id="data_form">
								<div class="form-group">
                            <!-- <div class="form-group">
                            <p><?php echo $hasil->harga;?></p>
                        </div>  -->
							<!-- <div class="form-group">
								<br/>
                                <label>Status Produk</label>
                                <label><?php echo $hasil->status_produk;?></label>
                                <br />
								<label>Status : </label>
								<label><?php echo cek_status($hasil->status);?></label>
							</div>	 -->					
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

