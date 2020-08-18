<div class="clearfix"></div>
<div class="main-content" style="margin-top: 20px;">		
	<div class="col-md-9 total-news">
		<div class="posts">
			<div class="main-title-head">
				<h5>Tentang Kami</h5>
				<div class="clearfix"></div>
			</div>	
			<div style="margin-left: ;float:left; position: relative;" class="col-md-12">
				<h3 style="text-align: center;"><div class="google-map aligncenter"><iframe width="100%" height="80%" style="margin-right: 250px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15809.036085676275!2d112.517722!3d-7.867941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f43ccfb4b4fd7f4!2sSekretariat+Bagian+Humas+dan+Protokol+Kota+Batu!5e0!3m2!1sid!2sid!4v1468523262932&amp;output=embed"></iframe></div></h3>	
				<div class="clearfix"></div>
			</div>
			
							<!-- <div class="search" style="width: 230px; align-content: center; margin-top: -740PX;	">
								<form>
									<input type="text" value="" placeholder="to search something" />
								</form>
								<div class="clearfix"></div>
							</div> -->
							

							<div class="clearfix"></div>


							<div style="font-size: auto;" class="col-md-9">
								<br>
								<h3 style="text-align: left; font-size: 18;font-family: arial black;margin-right: ;">BAGIAN HUBUNGAN MASYARAKAT SEKRETARIAT<br> DAERAH KOTA BATU</h3>
								<p><strong>Mailing Address:</strong><br />
									Balaikota Among Tani, Block A, LT.III &#8211; <br>Jalan Panglima Sudirman No.507 Batu</p>
									<p><strong>Phone Numbers:</strong><br />
										0341-5025589</p>
										<p><strong>Email Addresses:</strong><br />
											<a href="mailto:humas.kotabatu@gmail.com">humas.kotabatu@gmail.com<br />
											</a><a href="mailto:info@companyname.com">majalahpanderman@gmail.com</a></p>
											<br>
											<p><span style="color: #339966;"><strong>"Monggo Berbagi Keluhan dan Saran Terkait<br>Pemerintah Kota Batu<br> bisa melalui Testimonial<br> Website ini ataupun Sosmed kami, Terimakasih"</strong></span></p>
											<br>
											<p><strong>Social Media:</strong></p>
											<br>
											<p>Instagram : humas_pemkotbatu<br />
												Facebook : Humas Kota Batu / Panderman Kota Wisata Batu<br />
												Twitter  : @humaskotabatu</p>
											</div>


										</div>
									</div>	
									<div class="col-md-3 side-bar" style="margin-top:-7px;">
										<div class="clearfix"></div>
										<?php
										$get = $this->db->get('video');
										$hasil_video = $get->row();
										?>
										<div class="popular" style="margin-bottom: 20px;">
											<iframe width="100%" height="auto" src="https://www.youtube.com/embed/<?php echo $hasil_video->link;?> " frameborder="0" allowfullscreen></iframe>
											
										</div>

										<div class="popular" style="width: 100%;">
											<div class="main-title-head" style="border-color:#333">
												<h5 style="color:black;font-size:16px;font-family:arial,Georgia, serif;font-weight:555">DAFTAR AGENDA KAMI</h5>
												<div class="clearfix"></div>
											</div>		

											<?php
											$this->db->limit(3, 0);
											$this->db->order_by("tanggal_mulai",'DATE_SUB(NOW(), INTERVAL 1 MONTH)', "desc");
											$get = $this->db->get_where('agenda');
											$hasil_get = $get->result_array();
											foreach ($hasil_get as $item) {
												?>


												<div class="popular-news">
													<div class="popular-grid " >
														<i><?php echo $item ['tanggal_mulai'];?> </i>
														<p><?php echo substr($item['judul_kegiatan'],0,35);?><br><a href="<?php echo base_url().'web/detail_agenda/'.$item['id']; ?>"">Read More</a></p>
													</div>
													<?php } ?>

													<a class="more" href="<?php echo base_url().'web/agenda'?>">More  +</a>
												</div>
												<div class="clearfix"></div>
											</div>

											<br>
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
												<div class="clearfix"></div>
											</div>	
										</div>
										<div class="clearfix"></div>
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
