
<script type="text/javascript">
$(function () {

	$(".select2").select2();

	$("#data_form").submit( function() {    
		$.ajax( {  
			type :"post",  
			url : "<?php echo base_url() . 'admin/user/simpan_ubah' ?>",  
			cache :false,  
			data :$(this).serialize(),
			success : function(data) {  
				$(".sukses").html(data);   
				setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/user/daftar' ?>";},1500);              
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
			User
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">user</li>
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
						<h3 class="box-title">Tambah User</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">              
						</div><!-- /. tools -->
					</div>
					<div class="box-body">            
						<div class="sukses" ></div>
						<form method="post" id="data_form">

							<?php 
							$id = $this->uri->segment(4);
							$get = $this->db->query("SELECT * FROM user where id='$id'");
							$user = $get->row();							
							?>


								<input type="hidden" class="form-control" name="id" placeholder="Nama" value="<?php echo $user->id;?>" />
							<!-- <div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $user->nama;?>" />
							</div>                                    
							<div>
								<br>
								<label>Jenis Kelamin</label>
								<select name="jenis_kelamin" class="form-control" tabindex="-1" aria-hidden="true">
									<option value="L" <?php if ($user->jenis_kelamin == 'L'){echo'selected="true"';} ?>>Laki-laki</option>
									<option value="P" <?php if ($user->jenis_kelamin == 'P'){echo'selected="true"';} ?>>Perempuan</option>                      
								</select>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" class="form-control" name="telp" placeholder="Telepon / HP" value="<?php echo $user->telp;?>"/>
							</div>                                 
							<div class="form-group">
								<label>Alamat</label>
								<textarea name="alamat" class="textarea" placeholder="Alamat" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $user->alamat;?></textarea>
							</div>  -->             
							<div class="form-group">
								<label>Login</label>
								<input type="text" class="form-control" name="user" placeholder="Username" value="<?php echo $user->uname;?>"/>
								<br>
								<input type="password" class="form-control" name="pass" placeholder="Password" value="<?php echo $user->upass;?>"/>
							</div>                                                  
							 <!-- <div class="form-group">                
				                <label>Akses</label><br>
                                <?php
                                $string_akses = $user->akses;
      							//echo $string_akses;
     							$list_akses = (explode('|',$string_akses));  
								$no = 1;
      							foreach ($list_akses as $item_akses) {
									//echo $item_akses;
      							?>
                                <?php 
								if ($item_akses == 'page') {
								?>
                                <input name="akses_page" type="checkbox" id="akses_page"  value="page" checked="CHECKED">			Page<br>
                                <?php
								}else if($item_akses == 'product'){
								?>
                            	<input type="checkbox" id="akses_product"  value="product" 			name="akses_product" checked="checked" > 					Product<br>
								<?php
								}else if ($item_akses == 'promo') {
								?>
                                <input type="checkbox" id="akses_promo"  			name="akses_promo"  value="promo" checked="checked"> 			Promo<br>
								<?php
								}else if ($item_akses == 'berita') {
								?>
                                <input type="checkbox" id="akses_news" value="berita"  			name="akses_news" checked="checked"> 				News<br>
								<?php
								}else if ($item_akses == 'galery') {
								?>
                                <input type="checkbox" id="akses_galery"  value="galery"          name="akses_galery" checked="checked">            		Gallery<br>
								<?php
								}else if ($item_akses == 'contact') {
								?>
								<input type="checkbox" id="akses_contact"   value="contact"          name="akses_contact" checked="checked">  
								          		Contact<br>
								<?php
								}else if ($item_akses == 'tentang') {
								?>
								<input type="checkbox" id="akses_tentang"   value="tentang"          name="akses_contact" checked="checked">            		Tentang<br>
								<?php
								}else if ($item_akses == 'paket') {
								?>
								<input type="checkbox" id="akses_paket"   value="paket"          name="akses_paket" checked="checked">            		Paket<br>
								<?php
								}else if($item_akses == 'email') {
								?>
                                <input type="checkbox" id="akses_email"     value="email"       name="akses_email" checked="checked">            		Email<br>
								<?php
								}else if($item_akses == 'user') {
								?>
                                <input type="checkbox" id="akses_user"      value="user"         name="akses_user" checked="checked">              		User<br>
								<?php
								}else if($item_akses == 'slider') {
								?>
                                <input type="checkbox" id="akses_slider"   value="slider"         name="akses_slider" value="slider" checked="checked">            		Slider<br> 
								<?php
								}else if($item_akses == 'kritik') {
								?>
                                <input type="checkbox" id="akses_kritik"   value="kritik"         name="akses_kritik" value="kritik" checked="checked">            		Kritik & Saran<br> 
								<?php
								}else{
								
                                
									if($no==3){
									?>
                                    <input type="checkbox" id="akses_product"  value="product" 			name="akses_product" > 					Product<br>
                                    <?php
									}else if($no==5){
									?>
                                    <input type="checkbox" id="akses_news" value="berita"  			name="akses_news"> 				News<br>
                                    <?php
									}else if($no==6){
									?>
                                    <input type="checkbox" id="akses_galery"  value="galery"          name="akses_galery">            		Gallery<br>
                                    <?php
									}else if($no==7){
									?>
                                    <input type="checkbox" id="akses_contact"   value="contact"          name="akses_contact">            		Contact<br>
                                    <?php
									}else if($no==8){
									?>
                                    <input type="checkbox" id="akses_email"     value="email"       name="akses_email">            		Email<br>
                                    <?php
									}else if($no==9){
									?>
                                    <input type="checkbox" id="akses_user"      value="user"         name="akses_user">              		User<br>
                                    <?php
									}else if($no==10){
									?>
                                    <input type="checkbox" id="akses_slider"   value="slider"         name="akses_slider" value="slider">            		Slider<br> 
                                    <?php
									}
									?>
								<?php
								}
								?>

                               <?php 
							   $no++;
								}
								?>             
			              </div>
							  
							<div>
								<br>
								<label>Status</label>
								<select name="status" class="form-control" tabindex="-1" aria-hidden="true">
									<option value="1" <?php if ($user->status == '1'){echo'selected="true"';} ?>>Aktif</option>
									<option value="0" <?php if ($user->status == '0'){echo'selected="true"';} ?>>Tidak Aktif</option>                      
								</select>
							</div> -->

							<div class="box-footer clearfix">
								<button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan <i class="fa fa-arrow-circle-right"></i></button>
							</div>
						</form>
					</div>
				</div>
			</section><!-- /.Left col -->      
		</div><!-- /.row (main row) -->

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
