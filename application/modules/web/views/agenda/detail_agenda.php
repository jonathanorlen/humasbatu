<div class="clearfix"></div>
<div class="main-content" style="margin-top: 20px;">		
	<div class="col-md-9 total-news">

		<div class="posts">
			<div class="col-md-12">
				<div class="world-news">
					<div class="main-title-head">
						<?php
						$id = $this->uri->segment(3);
						$hasil = $this->db->query(" SELECT * FROM agenda where id= '$id' ");
						$hasil_ambil = $hasil->row();

						?>
						<h3 style="text-align:left">
							<?php echo $hasil_ambil ->judul_kegiatan ?>

						</h3>
						<div class="clearfix"></div>
						<div class="grid-header">

							<ul>
								<li>
									<!-- <span>Post by <?php echo ($hasil_ambil->nama_petugas); ?> on <?php echo TanggalIndo($hasil_ambil->tanggal); ?> </span> -->


								</li>
								<?php
								$get_komentar = $this->db->query("SELECT * FROM komentar_artikel WHERE id_artikel='$id'");
								$hasil_get_komentar = $get_komentar->result_array();
								?>
								<li>
									<span class="fa fa-comments"><?php echo count($hasil_get_komentar);?></span>
								</li>
								<!--	 <li>
									<span class="fa fa-eye"><?php echo $hasil_ambil->jumlah_view; ?> Views</span>
								</li> -->
							</ul>
						</div>
					</div>


<!-- 					<?php
					$string_foto = $hasil_ambil->foto;
					list($name_img) = (explode('|',$string_foto));			
					?> -->
					<div>
						<!-- <img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="380" style="margin:20px;margin-top:20;align-self:center"/> -->
						

						<div style="text-align:justify;
						">
						<?php echo $hasil_ambil ->isi ?>
					</div>
				</div>

			</div>
			<div class="world-news" style="margin-top: 25px;">
				<div class="main-title-head">
					<h3>Agenda lainnya</h3>
					<a href="<?php echo base_url().'web/agenda/' ?>">Agenda Lainnya +</a>
					<div class="clearfix"></div>
				</div>
				<div class="world-news-grids">
					<?php
					
					
					$agenda = $this->db->get('agenda');
					foreach($agenda->result() as $daftar){


						?>
						<div class="world-news-grid">
							<!-- <img src="<?php echo base_url().'component/upload/foto/uploads/'.str_replace('|',"",$daftar->foto); ?>" alt="" /> -->
							<a href="<?php echo base_url().'web/detail_agenda/'.$daftar->id; ?>" class="title"><?php echo substr($daftar->judul_kegiatan,0,10); ?>..</a>
							<p><?php echo substr($daftar->isi,0,20);?>..</p>

						</div>

						<?php } ?>
						<div class="clearfix"></div>
					</div>
				</div><br />
				

				



			</div>
		</div>

		
							<!-- <div class="search" style="width: 230px; align-content: center;">
								<form>
									<input type="text" value="" placeholder="to search something" />
								</form>
							</div>
							<br><br><br>

								<br>
								
								<div class="clearfix"></div> -->	
							</div>
						</div>	
						<div class="col-md-3 side-bar" >
							<div class="clearfix"></div>
							<?php
							$get = $this->db->get('video');
							$hasil_video = $get->row();
							?>
							<div class="popular" style="margin-bottom: 20px;">
								<iframe width="100%" height="auto" src="https://www.youtube.com/embed/<?php echo $hasil_video->link;?> " frameborder="0" allowfullscreen></iframe>
								
							</div>

							<div class="popular">
								<div class="main-title-head" style="border-color:#333">
									<h5 style="color:black;font-size:16px;font-family:arial,Georgia, serif;font-weight:555">DAFTAR AGENDA KAMI</h5>
									<div class="clearfix"></div>
								</div>			
								<div class="popular-news">
									<?php
									$this->db->limit(3, 0);
									$agenda = $this->db->get_where('agenda',array('status'=>'1'));
									foreach($agenda->result() as $daftar){
										?>
										<div class="popular-grid">
											<i><?php echo TanggalIndo($daftar->tanggal_mulai); ?></i>
											<p><?php echo $daftar->judul_kegiatan; ?> <a href="<?php echo base_url().'web/detail_agenda/'.$daftar->id; ?>">Read More</a></p>
										</div>

										<?php } ?>
										<a class="more" href="<?php echo base_url().'web/agenda/'; ?>">More  +</a>
									</div>
								</div><br />
								<div class="popular">
									
									<div class="main-title-head" style="border-color:#333">
										<h5 style="color:black;font-size:16px;font-family:arial,Georgia, serif;font-weight:555">Hotel Di Batu</h5>
										<h4></h4>
										<div class="clearfix"></div>
									</div>		

									<?php
									$this->db->limit(5, 0);
									$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Hotel'));
									$hasil_get = $get->result_array();
									foreach ($hasil_get as $item) {
										?>
										<?php
										$string_foto = $item['foto'];
										list($name_img) = (explode('|', $string_foto));
										?>

										<div class="popular-news">
											<div class="popular-grid">
												<div class="world-news-grid">
													<img style="width: 100%; height: 10%;max-width: 110px; max-height: 70px;" src="<?php echo
													base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
												</div>
												<i><?php echo $item['tanggal'];?> </i>
												<p><?php echo substr($item['judul'],0,35);?><br><a style="cursor: pointer;" class="informasi" key="<?php echo $item['id']?>">Read More</a></p>
											</div>

											<!-- <a class="more" href="<?php echo base_url().'web/informasi/005'?>">More  +</a> -->
										</div>
										<?php } ?>
									</div>
									<br>
									<div class="clearfix"></div>
								</div>		
								<div class="clearfix"></div>

								<script>
									$("#data_form").submit(function(){
										var url = "<?php echo base_url(). 'web/simpan_komentar'; ?>";
										$.ajax( {
											type:"POST", 
											url : url,  
											cache :false,  
											data :$(this).serialize(),
											success : function(data) {  
												window.location.reload();           
											},  
											error : function(data) {  
												alert(data);  
											}  
										}); 
									});

									$("a.informasi").click(function(){
										var id = $(this).attr('key');
										$.ajax( {
											type:"POST", 
											url : '<?php echo base_url().'web/tambah_view' ?>',  
											cache :false,  
											data :{id:id},
											beforeSend:function(){
												$(".tunggu").show();  
											},
											success : function(data) {  
												window.location = "<?php echo base_url().'web/detail_informasi/'; ?>"+id;  


												$(".loading").hide();             
											},  
											error : function(data) {  
												alert(data);  
											}  
										}); 
									});

									$("a.informasi").click(function(){
										var id = $(this).attr('key');
										$.ajax( {
											type:"POST", 
											url : '<?php echo base_url().'web/tambah_view' ?>',  
											cache :false,  
											data :{id:id},
											beforeSend:function(){
												$(".tunggu").show();  
											},
											success : function(data) {  
												window.location = "<?php echo base_url().'web/detail_informasi/'; ?>"+id;  


												$(".loading").hide();             
											},  
											error : function(data) {  
												alert(data);  
											}  
										}); 
									});
									
								</script>