<div class="clearfix"></div>
<div class="main-content">		
	<div class="col-md-12 total-news">
		<style type="text/css">
			.cycle-slideshow { width: 100%; margin-bottom: 20px;}
			.cycle-slideshow img { width: 100%; height: auto }

			
		</style>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
		<script src="http://malsup.github.io/jquery.cycle2.tile.js"></script>
		<div style="height: 550px !important" class="cycle-slideshow" 
		data-cycle-fx="tileBlind"
		data-cycle-timeout=4000>
		<?php
		$get = $this->db->get_where('slider', array('status' => '1' ));
		$hasil_get = $get->result_array();
		foreach ($hasil_get as $item) {
			?>
			<?php
			$string_foto = $item['foto'];
			list($name_img) = (explode('|', $string_foto));
			?>
			<img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img;?>" style="height:550px;" alt="">
			<?php } ?>	
		</div>
	</div>
	<div class="col-md-9 total-news">


		<div class="posts">
			<div class="left-posts">
				<div class="world-news" style="position: relative;">
					<div class="col-md-12" style="border-radius: 6px; ;border: 1px solid #BFE3EC; background-color: #d6f6ff; margin-bottom: 20px; position: relative;">

									<!-- <div class="col-md-2" style="position: relative;margin-top: 25px; margin-right: 0px;"><img style="width:100px;height:auto; position: relative;" src="<?php echo
										base_url() . 'component/upload/foto/uploads/info.png'?>" alt="" />
									</div> -->
									
									<div class="col-md-8"><br>
										<p style="font-size: 15px;"><i><b>Sugeng Rawuh di Website Bagian Humas Pemerintah Kota Batu</b></i></p>
										<p style="font-size: 12px;">Puji syukur kehadirat Tuhan Yang Maha Esa, atas segala berkah rahmat dan karuniaNya, kami ?seluruh jajaran Bagian Hubungan Masyarakat Sekretariat Daerah Kota Batu bisa menyediakan jaringan sarana komunikasi dan informasi kepada seluruh lapisan Masyarakat melalui website kehumasan ini, sesuai dengan tugas pokok dan fungsi kami sebagai pelayan penyampai segala bentuk berita dan informasi serta sosialisasi berkaitan dengan program kegiatan di Pemerintah Kota Batu.</p><br>
									</div>	

									<div class="col-md-3" style="margin-top:35px;margin-right:5px ;"><img style="width:160px;height:auto;position: relative;" src="<?php echo
										base_url() . 'component/upload/foto/uploads/sambutan-walikota-batu.png'?>" alt="" />
									</div>
									
									
								</div>
								<!-- <img src="<?php echo base_url() . 'component/upload/foto/uploads/humas_batu.png';?>" style="width: 100%; height:auto; margin-bottom: 20px;" alt=""> -->
							</div>
							<div class="world-news">
								<div class="main-title-head">
									<h3 style="background-color:#448D00;font-size:13;padding:8px;color:white">Berita Terbaru</h3>
									<a href="<?php echo base_url().'web/berita'?>">Berita Lainnya +</a>
									<div class="clearfix"></div>
								</div>

								<?php
								$this->db->limit(1, 0);
								$this->db->order_by("tanggal", "desc");
								$get = $this->db->get_where('artikel',array('kode_kategori'=>'001'));
								$hasil_get = $get->result_array();
								foreach ($hasil_get as $item) {
									?>
									<?php
									$string_foto = $item['foto'];
									list($name_img) = (explode('|', $string_foto));
									?>

									<div class="world-news-grids" style="border-bottom:1px solid #eaeaea;padding-bottom:8px;margin-bottom:5px;">
										<div class="world-news-grid">
											<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
												background-size: cover;
												background-repeat: no-repeat;
												background-position: center;
												width: 120%;
												height: 30%;
												
												float: left;
												margin-right: 20px;">

											</div>
										</div>
										<div style="margin-left:214px"> 
											<a class="title"><?php echo substr($item['judul'],0,35);?> </a>
											<p><?php echo substr($item['isi'],0,35);?></p>
											<a class="readmore tambah" key="<?php echo $item['id'];?>" style="padding: 3px 7px;background-color:#448D00 !important;color:white;margin-top:4px;float:left;list-style:none;outline:none;text-decoration:none;cursor: pointer;">Read More </a>
										</div>
										<div class="clearfix"></div>
									</div>
									<br>
									<br>
									<br>
									<?php } ?>

									<?php
									$this->db->limit(6, 0);
									$this->db->order_by("tanggal", "desc");
									$get = $this->db->get_where('artikel',array('kode_kategori'=>'001'));
									$hasil_get = $get->result_array();
									foreach ($hasil_get as $item) {
										?>
										<?php
										$string_foto = $item['foto'];
										list($name_img) = (explode('|', $string_foto));
										?>
										<div class="world-news-grids" style="border-bottom:1px solid #eaeaea;width:250px;padding-bottom:5px;margin-left:20px;margin-bottom:10px;float:left;">
											<div class="world-news-grid">
												<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
												background-size: cover;
												background-repeat: no-repeat;
												background-position: center;
												width: 100%;
												height: 100%;
												max-height: 60px;
												max-width: 80px;
												float: left;
												margin-right: 20px;">

											</div>
											</div>
											<div style="margin-left:70px;word-wrap: break-word;">	
												<a key="<?php echo $item['id'];?>" class="title tambah" style="font-weight:normal;cursor:pointer"><?php echo substr($item['judul'],0,35);?> </a>
											
											</div >


										</div>
										<?php } ?>
											<div class="clearfix"></div>

									</div>
									<div class="latest-articles">
										<div class="main-title-head"> 
											<h3>Sambutan Walikota</h3>
											<a href="<?php echo base_url().'web/sambutan/walikota'?>">Sambutan Walikota Lainnya+</a>
											<div class="clearfix"></div>
										</div>

										<?php
										$this->db->limit(1, 0);
										$get = $this->db->get_where('sambutan', array('jenis_sambutan' => 'walikota'));
										$hasil_get = $get->result_array();
										foreach ($hasil_get as $item) {
											?>
											<?php
											$string_foto = $item['foto'];
											list($name_img) = (explode('|', $string_foto));
											?>
											<div class="world-news-grids" style="border-bottom: 1px solid #eaeaea;margin-bottom:5px;padding-bottom:15px">
											<!-- <img style="width: 560px;height: 400px;" src="<?php echo
											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
											<ul>
												<li type="none" style="font-size: 24px; font-family: arial; font-weight: bold; "><?php echo substr($item['judul'],0,45);?></li>
												<span class="tie-date"><?php echo $item['tanggal'];?></span>
												<?php
												$get_komentar = $this->db->query("SELECT * FROM komentar_artikel WHERE id_artikel");
												$hasil_get_komentar = $get_komentar->result_array();
												?>
												<span class="fa fa-comments"><?php echo count($hasil_get_komentar);?>comments</span>
												<!-- <span class="post-comments"><a href="content/informasi/detail_informasi">Leave a comment</a></span> -->
												<?php
												$hasil = $this->db->query(" SELECT * FROM artikel where id ");
												$hasil_ambil = $hasil->row();
												?>
												<span class="fa fa-eye"><?php echo $hasil_ambil->jumlah_view; ?>views</span>
												<li type="none" style="font-size: 17px; font-family: arial;"><?php echo substr($item['isi'],0,50);?></li>
												<li>
													<a key="<?php echo $item['id']?>" class="detail" style="cursor: pointer; padding: 3px 7px;background-color:#448D00 !important;color:white;margin-top:4px;float:left;list-style:none;outline:none;text-decoration:none">Read More </a>
												</li>
											</ul>
										</div>
										<?php } ?>
									</div>
									<div class="tech-news">

										<div class="tech-news-grids" >
											<?php
											$this->db->limit(4, 0);
											$this->db->order_by("tanggal", "desc");
											$get = $this->db->get_where('sambutan', array('jenis_sambutan' => 'walikota'));
											$hasil_get = $get->result_array();
											foreach ($hasil_get as $item) {
												?>
												<?php
												$string_foto = $item['foto'];
												list($name_img) = (explode('|', $string_foto));
												?>

												<div class="left-tech-news" style="border-bottom:1px solid #eaeaea;padding-bottom:-10px;float: right;width:45%;">
													<div style="float:left">
														<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
												background-size: cover;
												background-repeat: no-repeat;
												background-position: center;
												width: 75px;
												height: 65px;
												float: left;
												margin-right: 20px;">

											</div>
													</div>
													<div class="tech-news-grid span_66" style="margin-left:70px;border-bottom: 0px;cursor: pointer;">
														<a key="<?php echo $item['id']?>" class="detail"><?php echo substr($item['judul'],0,6);?>..</a>
														<p><?php echo substr($item['judul'],0,8);?>..</p>
														<?php
														$get_komentar = $this->db->get_where('komentar_artikel',array('id_artikel'=>$item['id']));
														$hasil = $get_komentar->result_array();
														?>
														<p><!-- by<a>John Doe </a>  |  --> <?php echo count($hasil)?> comments</p>
													</div>
													
												</div>
												<?php } ?>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>


									<!-- widget -->
									<?php
									$this->db->limit(1, 0);
									$get = $this->db->get_where('widget');
									$hasil_get = $get->result_array();
									foreach ($hasil_get as $item) {
										?>
										<?php
										$string_foto = $item['foto'];
										list($name_img) = (explode('|', $string_foto));
										?>
										<div class="col-md-3" style="position:relative;margin-bottom: 20px;">
											<img style="width: 230px;height: 660px;" src="<?php echo
											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
										</div>
										<?php } ?>
										<!-- end widget -->

										<div class="right-posts">
				<!-- 						<div class="desk-grid">
											<h3>ARSIP ARTIKEL</h3>
											<?php
											$this->db->distinct();
											$this->db->select('bulan,tahun');
											$artikel = $this->db->get('artikel');
											foreach($artikel->result() as $daftar){
												$jumlah = $this->db->get_where('artikel',array('bulan'=>$daftar->bulan,'tahun'=>$daftar->tahun));
												$hasil_jumlah = $jumlah->result();
												?>

												<ul style="margin-left: 10px; font-size: 14px;">
													<li>
														<a href="<?php echo base_url().'web/arsip_artikel/'.$daftar->bulan."/".$daftar->tahun; ?>">
															<?php echo BulanIndo($daftar->bulan)." ".$daftar->tahun; ?> (<?php echo count($hasil_jumlah) ?>)
														</a>

													</li>
												</ul>
												<?php } ?>
											</div>
											<div class="clearfix"></div>	
											<br> -->
											<div class="desk-grid">
												<h3>KATEGORI ARTIKEL</h3>
												<?php
												$get = $this->db->get_where('kategori_artikel');
												$hasil_get = $get->result_array();
												foreach ($hasil_get as $item) {
													$jumlah_artikel = $this->db->get_where('artikel',array('kode_kategori'=>$item['kode_kategori']));
													$hasil_artikel = $jumlah_artikel->result();
													?>

													<ul style="margin-left: 10px; font-size: 14px;">
														<li>
															<a href="<?php echo base_url().'web/kategori_artikel/'.$item['kode_kategori']; ?>">
																<?php echo ($item['nama_kategori']);?> (<?php echo count($hasil_artikel); ?>)
															</a>


														</li>
													</ul>
													<?php } ?>


												</div>
												<br>	
												<div class="desk-grid">
													<h3>ARTIKEL TERBARU</h3>
													<?php
													$this->db->limit(5,0);
													$this->db->order_by('tanggal','desc');
													$artikel = $this->db->get('artikel');
													foreach($artikel->result() as $daftar){
														?>

														<ul style="margin-left: 10px; font-size: 14px;">
															<li><a style="cursor: pointer;" key="<?php echo $daftar->id?>" class="terbaru"><?php echo $daftar->judul; ?></a></li>
														</ul>
														<?php } ?>
													</div>

												</div>


												<div class="clearfix"></div>	
											</div>
										</div>	

										<!-- <video width="25%" height="auto" class="wp-video-shortcode" id="video-2945-1" preload="metadata" controls="controls"> -->
									<!-- <source src="http://humas.batukota.go.id/wp-content/uploads/2016/07/Videotron-Umum-Pilwali-KPU-Batu.mp4?_=1" type="video/mp4">
									<a href="http://humas.batukota.go.id/wp-content/uploads/2016/07/Videotron-Umum-Pilwali-KPU-Batu.mp4">http://humas.batukota.go.id/wp-content/uploads/2016/07/Videotron-Umum-Pilwali-KPU-Batu.mp4</a> -->



									<div class="col-md-3 side-bar" style="margin-top: ;">
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
							<!-- <div class="main-title-head" style="border-color:#333">
								<h5 style="color:black;font-size:16px;font-family:arial,Georgia, serif;font-weight:555">BULETIN</h5>
								<h4></h4>
								<div class="clearfix"></div>
							</div>		

							<?php
							$this->db->limit(3, 0);
							$get = $this->db->get_where('artikel', array('nama_kategori' => 'Buletin'));
							$hasil_get = $get->result_array();
							foreach ($hasil_get as $item) {
								?>
								<?php
								$string_foto = $item['foto'];
								list($name_img) = (explode('|', $string_foto));
								?>

								<div class="popular-news">
									<div class="popular-grid">
										<i><?php echo $item['tanggal'];?> </i>
										<p><?php echo substr($item['judul'],0,35);?><br><a class="buletin" key="<?php echo $item['id']?>">Read More</a></p>
									</div>
									<a class="more">More  +</a>
								</div>
								<?php } ?> -->
								

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
								<div class="clearfix"></div>
							</div>

						</div>
						<div class="clearfix"></div>
								<!-- <div class="main-title-head" style="margin-top: 30px;">
									<h5 style="background-color:#448D00;padding:8px"><b style="color:#fff;font-size:13px;font-family:arial,Georgia, serif;height">	 TERBAIK</b></h5>
									<h4></h4>
									<div class="clearfix"></div>
								</div> -->


								<!-- this 3 object -->



								<!-- <div class="col-md-4">
									<div class="main-title-head" style="margin-top: 30px; width: 90%;border-bottom: solid black">
										<h5><b style="color:#000;font-size:16px;font-weight: normal">INFO KULINER</b></h5>
										<h4></h4>
										<div class="clearfix"></div>								
									</div>
									<div class="world-news-grids">

										<?php
										$this->db->limit(1, 0);
										$this->db->order_by("tanggal", "desc");
										$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Kuliner'));
										$hasil_get = $get->result_array();
										foreach ($hasil_get as $item) {
											?>
											<?php
											$string_foto = $item['foto'];
											list($name_img) = (explode('|', $string_foto));
											?>

											<div class="world-news-grid" style="width:278px"> 
												<img src="<?php echo
												base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" style ="width:40%; height: 10%;	max-width: 100px; max-height: 100px;" alt=""  />
												<p style="font-weight:bold;"><?php echo $item['judul']?></p>
												<a href="<?php echo base_url().'web/detail_informasi/'.$item['id']; ?>" style="padding: 3px 7px;background-color:#448D00 !important;color:white;margin-top:4px;float:left;list-style:none;outline:none;text-decoration:none;font-weight:500;cursor:pointer;margin-top:5px">Read More</a>
											</div>
											<?php } ?>
										</div>
									</div>

									<div class="col-md-4">
										<div class="main-title-head" style="margin-top: 30px; width: 90%;border-bottom: solid black">
											<h5><b style="color:#000;font-size:16px;font-weight: normal">INFO & PENGUMUMAN</b></h5>
											<h4></h4>
											<div class="clearfix"></div>
										</div>
										<div class="world-news-grids">

											<?php
											$this->db->limit(1, 0);
											$this->db->order_by("tanggal", "desc");
											$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info dan pengumuman'));
											$hasil_get = $get->result_array();
											foreach ($hasil_get as $item) {
												?>
												<?php
												$string_foto = $item['foto'];
												list($name_img) = (explode('|', $string_foto));
												?>

												<div class="world-news-grid" style="width:278px"> 
													<img src="<?php echo
													base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" style ="width:40%; height: auto;max-width: 100px; max-height: 100px;" alt=""  />
													<p style="font-weight:bold;"><?php echo $item['judul']?></p>
													
													<a href="<?php echo base_url().'web/detail_informasi/'.$item['id']; ?>" style="padding: 3px 7px;background-color:#448D00 !important;color:white;margin-top:4px;float:left;list-style:none;outline:none;text-decoration:none;font-weight:500;cursor:pointer;margin-top:5px">Read More</a>
												</div>
												<?php } ?>
											</div>

										</div>

										<div class="col-md-4">
											<div class="main-title-head" style="margin-top: 30px; width: 90%;border-bottom: solid black">
												<h5><b style="color:#000;font-size:16px;font-weight: normal">WISATA</b></h5>
												<h4></h4>
												<div class="clearfix"></div>
											</div>
											<div class="world-news-grids">

												<?php
												$this->db->limit(1, 0);
												$this->db->order_by("tanggal", "desc");
												$get = $this->db->get_where('artikel', array('nama_kategori' => 'wisata'));
												$hasil_get = $get->result_array();
												foreach ($hasil_get as $item) {
													?>
													<?php
													$string_foto = $item['foto'];
													list($name_img) = (explode('|', $string_foto));
													?>

													<div class="world-news-grid" style="width:278px;"> 
														<img src="<?php echo
														base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" style ="width:40%; height: auto;max-width: 100px; max-height: 100px;" alt=""  />
														<p style="font-weight:bold;"><?php echo $item['judul']?></p>
														
														<a href="<?php echo base_url().'web/detail_informasi/'.$item['id']; ?>" style="padding: 3px 7px;background-color:#448D00 !important;color:white;margin-top:4px;float:left;list-style:none;outline:none;text-decoration:none;font-weight:500;cursor:pointer;margin-top:5px">Read More</a>
													</div>
													<?php } ?>
												</div>
											</div> -->
											<!-- end objct 3 -->

											<div class="clearfix"></div>
											<div class="col-md-12 total-news" style="margin-top: 0px;">
												<div class="posts">
													<div class="col-md-12">
														<div class="world-news">
															

															<div class="tech-news" style="margin-top: ">

																<div class="tech-news-grids">



																	<div class="col-md-4">
																		<div class="">
																			<div class="main-title-head" style="margin-top: 30px; width: auto;">
																				<h5><b style="color:#000">INFO & PENGUMUMAN</b></h5>
																				<h4></h4>
																				<div class="clearfix"></div>
																			</div>
																		</div>

																		<div class="world-news">

																			<div class="world-news-grids">
																				<?php
																				$this->db->limit(1, 0);
																				$this->db->order_by("tanggal", "desc");
																				$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info dan Pengumuman'));
																				$hasil_get = $get->result_array();
																				foreach ($hasil_get as $item) {
																					?>
																					<?php
																					$string_foto = $item['foto'];
																					list($name_img) = (explode('|', $string_foto));
																					?>

																					<div class="" style="">
																								<!-- <img style="width: 100%; height: 200px" src="<?php echo
																								base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
																								<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
																									background-size: cover;
																									background-repeat: no-repeat;
																									background-position: center;
																									width: 100%;
																									height: 30%;">

																								</div>
																								<a class="title"><?php echo substr($item['judul'],0,25);?></a>
																								<p><?php echo substr($item['judul'],0,45);?> <a class="informasi" key="<?php echo $item['id']; ?>" style="background-color: #448D00;padding:4px;color:white;font-size:13px;text-decoration:none;cursor:pointer">READ MORE</a></p>

																							</div>
																							<?php } ?>



																							<div class="tech-news-grid span_66" style="border-bottom:1px solid #eaeaea">
																							</div>



																							<?php
																							$this->db->limit(3, 0);
																							$this->db->order_by("tanggal", "desc");
																							$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info dan Pengumuman'));
																							$hasil_get = $get->result_array();
																							foreach ($hasil_get as $item) {
																								?>
																								<?php
																								$string_foto = $item['foto'];
																								list($name_img) = (explode('|', $string_foto));
																								?>
																								<div class="world-news" style="border-bottom:1px solid #eaeaea;padding-bottom:3px">
																									<div class="world-news-grids">
																										<div class="world-news-grid">
																											<img style="width: 100%; height: 10%;max-width: 110px; max-height: 70px;" src="<?php echo
																											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																										</div>
																										<div >
																											<a class="title"><?php echo substr($item['judul'],0,30)?></a>

																											<a class="informasi" key="<?php echo $item['id']; ?>" style="cursor:pointer">Read More</a>
																										</div>
																										<div class="clearfix"></div>
																									</div>
																								</div>
																								<?php } ?>

																								<div class="clearfix"></div>
																							</div>
																						</div>
																					</div>




																					<div class="col-md-4">
																						<div class="">
																							<div class="main-title-head" style="margin-top: 30px; width: auto;">
																								<h5><b style="color:#000">INFO KULINER</b></h5>
																								<h4></h4>
																								<div class="clearfix"></div>
																							</div>
																						</div>


																						<div class="world-news">

																							<div class="world-news-grids">
																								<?php
																								$this->db->limit(1, 0);
																								$this->db->order_by("tanggal", "desc");
																								$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Kuliner'));
																								$hasil_get = $get->result_array();
																								foreach ($hasil_get as $item) {
																									?>
																									<?php
																									$string_foto = $item['foto'];
																									list($name_img) = (explode('|', $string_foto));
																									?>

																									<div class="" style="">
																								<!-- <img style="width: 100%; height: 200px" src="<?php echo
																								base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
																								<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
																									background-size: cover;
																									background-repeat: no-repeat;
																									background-position: center;
																									width: 100%;
																									height: 30%;">

																								</div>
																								<a class="title"><?php echo substr($item['judul'],0,25);?></a>
																								<p><?php echo substr($item['judul'],0,45);?> <a class="informasi" key="<?php echo $item['id']; ?>" style="background-color: #448D00;padding:4px;color:white;font-size:13px;text-decoration:none;cursor:pointer">READ MORE</a></p>

																							</div>
																							<?php } ?>



																							<div class="tech-news-grid span_66" style="border-bottom:1px solid #eaeaea">
																							</div>



																							<?php
																							$this->db->limit(3, 0);
																							$this->db->order_by("tanggal", "desc");
																							$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Kuliner'));
																							$hasil_get = $get->result_array();
																							foreach ($hasil_get as $item) {
																								?>
																								<?php
																								$string_foto = $item['foto'];
																								list($name_img) = (explode('|', $string_foto));
																								?>
																								<div class="world-news" style="border-bottom:1px solid #eaeaea;padding-bottom:3px">
																									<div class="world-news-grids">
																										<div class="world-news-grid">
																											<img style="width: 100%; height: 10%;max-width: 110px; max-height: 70px;" src="<?php echo
																											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																										</div>
																										<div >
																											<a class="title"><?php echo substr($item['judul'],0,30)?></a>

																											<a class="informasi" key="<?php echo $item['id']; ?>" style="cursor:pointer">Read More</a>
																										</div>
																										<div class="clearfix"></div>
																									</div>
																								</div>
																								<?php } ?>

																								<div class="clearfix"></div>
																							</div>
																						</div>
																					</div>



																					<div class="col-md-4">
																						<div class="">
																							<div class="main-title-head" style="margin-top: 30px; width: auto;">
																								<h5><b style="color:#000">WISATA</b></h5>
																								<h4></h4>
																								<div class="clearfix"></div>
																							</div>
																						</div>


																						<div class="world-news">
																							<div class="world-news-grids">

																								<?php
																								$this->db->limit(1, 0);
																								$this->db->order_by("tanggal", "desc");
																								$get = $this->db->get_where('artikel', array('nama_kategori' => 'Wisata'));
																								$hasil_get = $get->result_array();
																								foreach ($hasil_get as $item) {
																									?>
																									<?php
																									$string_foto = $item['foto'];
																									list($name_img) = (explode('|', $string_foto));
																									?>


																									<div class="">
																										<!-- <img style="width: 100%; height: 200px" src="<?php echo
																										base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
																										<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
																											background-size: cover;
																											background-repeat: no-repeat;
																											background-position: center;
																											width: 100%;
																											height: 30%;">

																										</div>
																										<a class="title"><?php echo substr($item['judul'],0,35)?></a>
																										<p><?php echo substr($item['isi'],0,30)?><a class="informasi" key="<?php echo $item['id']; ?>" style="cursor:pointer;background-color: #448D00;padding:4px;color:white;font-size:13px;text-decoration:none">READ MORE</a></p>

																									</div>
																									<?php } ?>



																									<div class="tech-news-grid span_66" style="border-bottom:1px solid #eaeaea">
																									</div>

																									<?php
																									$this->db->limit(3, 0);
																									$this->db->order_by("tanggal", "desc");
																									$get = $this->db->get_where('artikel', array('nama_kategori' => 'Wisata'));
																									$hasil_get = $get->result_array();
																									foreach ($hasil_get as $item) {
																										?>
																										<?php
																										$string_foto = $item['foto'];
																										list($name_img) = (explode('|', $string_foto));
																										?>

																										<div class="world-news" style="border-bottom:1px solid #eaeaea;padding-bottom:3px">
																											<div class="world-news-grids">
																												<div class="world-news-grid">
																													<img style="width: 100%; height: 10%;max-width: 110px; max-height: 70px;" src="<?php echo
																													base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																												</div>
																												<div >
																													<a class="title" key="<?php echo $item['id']; ?>"><?php echo substr($item['judul'],0,35)?></a>
																													<p><a class="informasi" key="<?php echo $item['id']; ?>" style="cursor:pointer" >Read More</a></p>
																												</div>




																												<div class="clearfix"></div>
																											</div>
																										</div>
																										<?php } ?>


																										<div class="clearfix"></div>
																									</div>
																								</div>
																							</div>


																							<div class="clearfix"></div>
																						</div>


																					</div>




																				</div>
																			</div>
																		</div>
																	</div>

																	<!-- this -->
																	<div class="clearfix"></div>
																	<div class="col-md-12 total-news" style="margin-top: 40px; display: block; flex-direction: row-reverse;">
																		<div class="posts">
																			<div class="col-md-12">
																				<div class="world-news">


																					<div class="tech-news" style="margin-top: ">

																						<div class="tech-news-grids">



																							<div class="col-md-4">
																								<div class="">
																									<div class="main-title-head" style="margin-top: 30px; width: auto;">
																										<h5><b style="color:#000">INFO HOTEL</b></h5>
																										<h4></h4>
																										<div class="clearfix"></div>
																									</div>
																								</div>


																								<div class="world-news">

																									<div class="world-news-grids">
																										<?php
																										$this->db->limit(1, 0);
																										$this->db->order_by("tanggal", "desc");
																										$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Hotel'));
																										$hasil_get = $get->result_array();
																										foreach ($hasil_get as $item) {
																											?>
																											<?php
																											$string_foto = $item['foto'];
																											list($name_img) = (explode('|', $string_foto));
																											?>

																											<div class="" style="">
																								<!-- <img style="width: 100%; height: 200px" src="<?php echo
																								base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
																								<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
																									background-size: cover;
																									background-repeat: no-repeat;
																									background-position: center;
																									width: 100%;
																									height: 30%;">

																								</div>
																								<a class="title"><?php echo substr($item['judul'],0,25);?></a>
																								<p><?php echo substr($item['judul'],0,45);?> <a class="tambah" key="<?php echo $item['id']; ?>" style="background-color: #448D00;padding:4px;color:white;font-size:13px;text-decoration:none;cursor:pointer">READ MORE</a></p>

																							</div>
																							<?php } ?>



																							<div class="tech-news-grid span_66" style="border-bottom:1px solid #eaeaea">
																							</div>



																							<?php
																							$this->db->limit(3, 0);
																							$this->db->order_by("tanggal", "desc");
																							$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Hotel'));
																							$hasil_get = $get->result_array();
																							foreach ($hasil_get as $item) {
																								?>
																								<?php
																								$string_foto = $item['foto'];
																								list($name_img) = (explode('|', $string_foto));
																								?>
																								<div class="world-news" style="border-bottom:1px solid #eaeaea;padding-bottom:3px">
																									<div class="world-news-grids">
																										<div class="world-news-grid">
																											<img style="width: 100%; height: 10%;max-width: 110px; max-height: 70px;" src="<?php echo
																											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																										</div>
																										<div >
																											<a class="title"><?php echo substr($item['judul'],0,30)?></a>

																											<a class="tambah" key="<?php echo $item['id']; ?>" style="cursor:pointer">Read More</a>
																										</div>
																										<div class="clearfix"></div>
																									</div>
																								</div>
																								<?php } ?>

																								<div class="clearfix"></div>
																							</div>
																						</div>
																					</div>




																					<div class="col-md-4">
																						<div class="">
																							<div class="main-title-head" style="margin-top: 30px; width: auto;">
																								<h5><b style="color:#000">INFO VILLA</b></h5>
																								<h4></h4>
																								<div class="clearfix"></div>
																							</div>
																						</div>


																						<div class="world-news">

																							<div class="world-news-grids">
																								<?php
																								$this->db->limit(1, 0);
																								$this->db->order_by("tanggal", "desc");
																								$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Villa'));
																								$hasil_get = $get->result_array();
																								foreach ($hasil_get as $item) {
																									?>
																									<?php
																									$string_foto = $item['foto'];
																									list($name_img) = (explode('|', $string_foto));
																									?>

																									<div class="" style="">
																								<!-- <img style="width: 100%; height: 200px" src="<?php echo
																								base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
																								<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
																									background-size: cover;
																									background-repeat: no-repeat;
																									background-position: center;
																									width: 100%;
																									height: 30%;">

																								</div>
																								<a class="title"><?php echo substr($item['judul'],0,25);?></a>
																								<p><?php echo substr($item['judul'],0,45);?> <a class="tambah" key="<?php echo $item['id']; ?>" style="background-color: #448D00;padding:4px;color:white;font-size:13px;text-decoration:none;cursor:pointer">READ MORE</a></p>

																							</div>
																							<?php } ?>



																							<div class="tech-news-grid span_66" style="border-bottom:1px solid #eaeaea">
																							</div>



																							<?php
																							$this->db->limit(3, 0);
																							$this->db->order_by("tanggal", "desc");
																							$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Villa'));
																							$hasil_get = $get->result_array();
																							foreach ($hasil_get as $item) {
																								?>
																								<?php
																								$string_foto = $item['foto'];
																								list($name_img) = (explode('|', $string_foto));
																								?>
																								<div class="world-news" style="border-bottom:1px solid #eaeaea;padding-bottom:3px">
																									<div class="world-news-grids">
																										<div class="world-news-grid">
																											<img style="width: 100%; height: 10%;max-width: 110px; max-height: 70px;" src="<?php echo
																											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																										</div>
																										<div >
																											<a class="title"><?php echo substr($item['judul'],0,30)?></a>

																											<a class="tambah" key="<?php echo $item['id']; ?>" style="cursor:pointer">Read More</a>
																										</div>
																										<div class="clearfix"></div>
																									</div>
																								</div>
																								<?php } ?>

																								<div class="clearfix"></div>
																							</div>
																						</div>
																					</div>



																					<div class="col-md-4">
																						<div class="">
																							<div class="main-title-head" style="margin-top: 30px; width: auto;">
																								<h5><b style="color:#000">INFO HOMESTAY</b></h5>
																								<h4></h4>
																								<div class="clearfix"></div>
																							</div>
																						</div>


																						<div class="world-news">

																							<div class="world-news-grids">
																								<?php
																								$this->db->limit(1, 0);
																								$this->db->order_by("tanggal", "desc");
																								$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Homestay'));
																								$hasil_get = $get->result_array();
																								foreach ($hasil_get as $item) {
																									?>
																									<?php
																									$string_foto = $item['foto'];
																									list($name_img) = (explode('|', $string_foto));
																									?>

																									<div class="" style="">
																								<!-- <img style="width: 100%; height: 200px" src="<?php echo
																								base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
																								<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
																									background-size: cover;
																									background-repeat: no-repeat;
																									background-position: center;
																									width: 100%;
																									height: 30%;">

																								</div>
																								<a class="title"><?php echo substr($item['judul'],0,25);?></a>
																								<p><?php echo substr($item['judul'],0,45);?> <a class="tambah" key="<?php echo $item['id']; ?>" style="background-color: #448D00;padding:4px;color:white;font-size:13px;text-decoration:none;cursor:pointer">READ MORE</a></p>

																							</div>
																							<?php } ?>



																							<div class="tech-news-grid span_66" style="border-bottom:1px solid #eaeaea">
																							</div>



																							<?php
																							$this->db->limit(3, 0);
																							$this->db->order_by("tanggal", "desc");
																							$get = $this->db->get_where('artikel', array('nama_kategori' => 'Info Homestay'));
																							$hasil_get = $get->result_array();
																							foreach ($hasil_get as $item) {
																								?>
																								<?php
																								$string_foto = $item['foto'];
																								list($name_img) = (explode('|', $string_foto));
																								?>
																								<div class="world-news" style="border-bottom:1px solid #eaeaea;padding-bottom:3px">
																									<div class="world-news-grids">
																										<div class="world-news-grid">
																											<img style="width: 100%; height: 10%;max-width: 110px; max-height: 70px;" src="<?php echo
																											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																										</div>
																										<div >
																											<a class="title"><?php echo substr($item['judul'],0,30)?></a>

																											<a class="tambah" key="<?php echo $item['id']; ?>" style="cursor:pointer">Read More</a>
																										</div>
																										<div class="clearfix"></div>
																									</div>
																								</div>
																								<?php } ?>

																								<div class="clearfix"></div>
																							</div>
																						</div>
																					</div>



																					<div class="clearfix"></div>
																				</div>


																			</div>




																		</div>
																	</div>
																</div>
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
																		window.location = "<?php echo base_url().'web/detail_informasi/'; ?>"+id;  


																		$(".loading").hide();             
																	},  
																	error : function(data) {  
																		alert(data);  
																	}  
																}); 
															});

															$("a.detail").click(function(){
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
																		window.location = "<?php echo base_url().'web/detail_sambutan/'; ?>"+id;  


																		$(".loading").hide();             
																	},  
																	error : function(data) {  
																		alert(data);  
																	}  
																}); 
															});

															$("a.buletin").click(function(){
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

														</script>

														<style>
															@keyframes slidy {
																0% { left: 0%; }
																20% { left: 0%; }
																25% { left: -100%; }
																45% { left: -100%; }
																50% { left: -200%; }
																70% { left: -200%; }
																75% { left: -300%; }
																95% { left: -300%; }
																100% { left: -400%; }
															}

															body { margin: 0; } 
															div#slider { overflow: hidden; }
															div#slider figure img { width: 20%; float: left; }
															div#slider figure { 
																position: relative;
																width: 500%;
																margin: 0;
																left: 0;
																text-align: left;
																font-size: 0;
																animation: 20s slidy infinite; 
															}
														</style>