<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Agenda 
			<small>Agenda</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Agenda</li>
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
						<h3 class="box-title">Detail Agenda</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>

						<?php
						$id = $this->uri->segment(4);
						$get = $this->db->query("SELECT * FROM agenda where id='$id'");
						$hasil = $get->row();
						?>

						<form method="post" id="data_form">
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?php echo $hasil->id?>" placeholder="Judul Agenda" required/>
								<label>Judul Agenda</label>
								<input type="text" class="form-control" name="judul_kegiatan" value="<?php echo $hasil->judul_kegiatan?>" placeholder="Judul Agenda" readonly=""/>
							</div>
							<div class="form-group">
								<label>Tanggal Mulai</label>
								<input type="date" class="form-control" name="tanggal_mulai" placeholder="" readOnly value="<?php echo $hasil->tanggal_mulai?>" required="" />
							</div>
							<div class="form-group">
								<label>Tanggal Selesai</label>
								<input type="date" class="form-control" name="tanggal_selesai" placeholder="" readOnly value="<?php echo $hasil->tanggal_selesai?>" required="" />
							</div>
							<div>
								<label>Isi</label>
								<textarea name="isi" class="form-control" placeholder="Deskripsi Agenda" readonly="" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $hasil->isi?>"</textarea>
							</div>
							<div class="form-group">
								<label>Jam Mulai</label>
								<input type="time" class="form-control" name="jam_mulai" placeholder="" required="" readonly="" value="<?php echo $hasil->jam_mulai?>"/>
							</div>
							<div class="form-group">
								<label>Jam Selesai</label>
								<input type="time" class="form-control" name="jam_selesai" placeholder="" required="" readonly="" value="<?php echo $hasil->jam_selesai?>" />
							</div>
							<div class="form-group">
								<br>
								<label>Status</label>
								<select name="status" class="form-control" tabindex="-1" aria-hidden="true" disabled="">
									<option value="1" <?php if ($hasil->status == '1'){echo'selected="true"';} ?>>Aktif</option>
									<option value="0" <?php if ($hasil->status == '0'){echo'selected="true"';} ?>>Tidak Aktif</option>            </select>
								</div>	
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


