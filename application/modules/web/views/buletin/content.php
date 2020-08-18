<div class="clearfix"></div>
<div class="main-content" style="margin-top: 20px;">		
	<div class="col-md-9 total-news">
		<div class="posts">
			<div class="col-md-12">
				<div class="world-news">
					<div class="main-title-head">
						<h3>Buletin</h3>
						<div class="clearfix"></div>
					</div>
					<div class="world-news-grids">
						<?php
						$no = $this->uri->segment(2) + 1;
						// $this->db->limit(3, 0);
						// $get = $this->db->get_where('artikel', array('nama_kategori' => 'Buletin'));
						// $hasil_get = $get->result_array();
						foreach ($buletine as $daftar) {
							?>

							<div style="margin-left: 20px;text-align: justify;" class="world-news-grids">
								<div class="grid box">
									<div class="grid-header">
										<a class="gotosingle" href="singlepage.html"><?php echo ($daftar['judul']); ?> </a>
										<ul>
											<li><span>Post by<a href="#"><?php echo ($daftar['nama_kategori']); ?></a> on <?php echo TanggalIndo($daftar['tanggal']); ?></span></li>

										</ul>
									</div>
									<div class="grid-img-content">
										<p><?php echo substr($daftar['isi'],0,300); ?></p>
										<div class="clearfix"> </div>
									</div>
									<div class="comments">
										<ul>


											<li>
												<a href="#">
													<img src="<?php echo base_url().'component/web/'; ?>images/link.png" title="link" />
												</a>
											</li>
											<li style="cursor: pointer;">
												<a class="readmore tambah" key="<?php echo $daftar['id']?>">ReadMore
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<?php } ?>
							<div class="pagination">
								<?php 
								echo $this->pagination->create_links();
								?>
							</div>
							<style type="text/css">
								.pagination{
									color: green;
									float: left;
									padding: 40px;
									transition: background-color .3s;
									font-size: 20px;
									font-weight: bolder;
									text-decoration: none;
									font-family: monospace;
								}

								.pagination a.active {
									background-color: #4CAF50;
									color: white;
								}

								.pagination a:hover:not(.active) {background-color: #ddd;}
							</style>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>	
		<div class="col-md-3 side-bar">
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
					$this->db->order_by("tanggal_mulai",'DATE_SUB(NOW(), INTERVAL 1 MONTH)', "desc");
					$get = $this->db->get_where('agenda');
					$hasil_get = $get->result_array();
					foreach($hasil_get as $item){
						?>
						<div class="popular-grid">
							<i><?php echo $item ['tanggal_mulai'];?> </i>
							<p><?php echo substr($item['judul_kegiatan'],0,35);?><br><a href="<?php echo base_url().'web/detail_agenda/'.$item['id']; ?>"">Read More</a></p>
							<!-- <a href="<?php echo base_url().'web/detail_agenda/'.$item['id']; ?>">Read More</a></p> -->
						</div>

						<?php } ?>
						<a class="more" href="<?php echo base_url().'web/agenda/'; ?>">More  +</a>
					</div>
				</div>
				<div class="popular" style="margin-top: 30px;">
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
				</div>
				<script>
					$("a.tambah").click(function(){
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
								window.location = "<?php echo base_url().'web/detail_buletin/'; ?>"+id;  


								$(".loading").hide();             
							},  
							error : function(data) {  
								alert(data);  
							}  
						}); 
					});

					$("a.terbaru").click(function(){
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
								window.location = "<?php echo base_url().'web/detail_berita/'; ?>"+id;  


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