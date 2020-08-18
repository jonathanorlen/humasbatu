<div class="clearfix"></div>
<div class="main-content">		
	<div class="col-md-9 total-news">
		<div class="slider" style="width: 1100px;">
			<script src="<?php echo base_url().'component/web/js/responsiveslides.min.js'?>"></script>
			<script>
							// You can also use "$(window).load(function() {"
							$(function () {
								$("#conference-slider").responsiveSlides({
									auto: true,
									manualControls: '#slider3-pager',
								});
							});
						</script>
						<div class="conference-slider">
							<!-- Slideshow 3 -->
							<ul class="conference-rslide" id="conference-slider">
								<li><img src="<?php echo base_url() . 'component/web/images/c22.jpg'?>" alt=""></li>
								<li><img src="<?php echo base_url() . 'component/web/images/c1.jpg'?>" alt=""></li>
								<li><img src="<?php echo base_url() . 'component/web/images/c33.jpg'?>" alt=""></li>
								<li><img src="<?php echo base_url() . 'component/web/images/c44.jpg'?>" alt=""></li>
							</ul>
							<!-- Slideshow 3 Pager -->
							<ul id="slider3-pager">
								<li><a href="#"><img src="<?php echo base_url() . 'component/web/images/c22.jpg'?>" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url() . 'component/web/images/c1.jpg'?>" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url() . 'component/web/images/c33.jpg'?>" alt=""></a></li>
								<li><a href="#"><img src="<?php echo base_url() . 'component/web/images/c44.jpg'?>" alt=""></a></li>
							</ul>
							<div class="breaking-news-title">
								<p>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </p>
							</div>
						</div> 
						<h5 class="breaking">Breaking news</h5>
					</div>	



					<div class="posts">
						<div class="left-posts">
							<div class="world-news">
								<div class="main-title-head">
									<h3>Berita Terbaru</h3>
									<a href="singlepage.html">Berita Lainnya +</a>
									<div class="clearfix"></div>
								</div>

								<?php
								$this->db->limit(3, 0);

								$get = $this->db->get_where('artikel');
								$hasil_get = $get->result_array();
								foreach ($hasil_get as $item) {
									?>
									<?php
									$string_foto = $item['foto'];
									list($name_img) = (explode('|', $string_foto));
									?>

									<div class="world-news-grids">
										<div class="world-news-grid">
											<img style="width: 200px;height: 200px;" src="<?php echo
											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
											<a href="singlepage.html" class="title"><?php echo substr($item['judul'],0,35);?> </a>
											<p><?php echo substr($item['isi'],0,35);?></p>
											<a href="<?php echo base_url().'web/detail_berita?id_berita='.$item['id']?>">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<?php } ?>
								</div>
								<div class="latest-articles">
									<div class="main-title-head">
										<h3>Sambutan Walikota</h3>
										<a href="singlepage.html">Artikel Lainnya+</a>
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
										<div class="world-news-grids">
											<!-- <img style="width: 560px;height: 400px;" src="<?php echo
											base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" /> -->
											<ul>
												<li type="none" style="font-size: 24px; font-family: arial; font-weight: bold; "><?php echo substr($item['judul'],0,45);?></li>
												<span class="tie-date"><?php echo $item['tanggal'];?></span>
												<span class="post-comments"><a href="content/berita/pembukaan-aksioma-tingkat-kota-batu-di-alun-alun/index.html#respond">Leave a comment</a></span>
												<span class="post-views">43 Views</span>
												<li type="none" style="font-size: 17px; font-family: arial;"><?php echo substr($item['isi'],0,50);?></li>
											</ul>
										</div>
										<?php } ?>
									</div>
									<div class="tech-news">

										<div class="tech-news-grids">
											<?php
											$this->db->limit(2, 0);
											$this->db->order_by("tanggal", "desc");
											$get = $this->db->get_where('sambutan', array('jenis_sambutan' => 'walikota'));
											$hasil_get = $get->result_array();
											foreach ($hasil_get as $item) {
												?>
												<?php
												$string_foto = $item['foto'];
												list($name_img) = (explode('|', $string_foto));
												?>
												<div class="left-tech-news">
													<img style="width: 100px;height: 100px;" src="<?php echo
													base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
													<div class="tech-news-grid span_66">
														<a href="singlepage.html"><?php echo substr($item['judul'],0,15);?></a>
														<p><?php echo substr($item['judul'],0,15);?>...</p>
														<p>by<a href="#">John Doe </a>  |  29 comments</p>
													</div>
												<!-- <div class="tech-news-grid">
													<a href="singlepage.html">SAMBUTAN PRESIDEN REPUBLIK INDONESIA PADA ACARA PERINGATAN HARI BELA NEGARA TAHUN 2016 2</a>
													<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
													<p>by<a href="#">John Doe </a>  |  29 comments</p>
												</div> -->
											</div>
											<?php } ?>
											<!-- <div class="right-tech-news">
												<div class="tech-news-grid span_66">
													<a href="singlepage.html">SAMBUTAN PRESIDEN REPUBLIK INDONESIA PADA ACARA PERINGATAN HARI BELA NEGARA TAHUN 2016 3</a>
													<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
													<p>by<a href="#">John Doe </a>  |  29 comments</p>
												</div>
												<div class="tech-news-grid">
													<a href="singlepage.html">SAMBUTAN PRESIDEN REPUBLIK INDONESIA PADA ACARA PERINGATAN HARI BELA NEGARA TAHUN 2016 4</a>
													<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
													<p>by<a href="#">John Doe </a>  |  29 comments</p>
												</div>
											</div> -->
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="search" style="width: 230px; align-content: center;">
									<form>
										<input type="text" value="" placeholder="to search something" />
									</form>
								</div>
								<br><br><br>
								<div class="right-posts">
									<div class="desk-grid">
										<h3>KATEGORI ARTIKEL</h3>
										<?php
										$get = $this->db->get_where('kategori_artikel');
										$hasil_get = $get->result_array();
										foreach ($hasil_get as $item) {
											?>

											<ul style="margin-left: 10px; font-size: 16px;">
												<li><?php echo ($item['nama_kategori']);?></li>
											</ul>
											<?php } ?>
										</div>

									</div>
									<br>
									<div class="right-posts" style="margin-top: 30px;">
										<div class="desk-grid">
											<h3>ARTIKEL BY DATE</h3>
											<center>
												<p>March 2017</p>
												<p>M	T	W	T	F	S	S</p>
											</center>
										</div>
									</div>
									<div class="clearfix"></div>	
								</div>
							</div>	
							<div class="col-md-3 side-bar" style="margin-top: 520px;">
					<!-- <div class="sign_up text-center">
						<h3>Silahkan Login</h3>
						<p class="sign">Klik Tombol dibawah ini untuk login !</p>
						<form>
							<center><input type="submit" value="LOGIN"></center>
						</form>
						<p class="spam">We do not spam. We value your privacy!</p>
					</div> -->
					<div class="clearfix"></div>
					<div class="popular">
						<div class="main-title-head">
							<h5>DAFTAR AGENDA KAMI</h5>
							<div class="clearfix"></div>
						</div>		

						<?php
						$this->db->limit(3, 0);
						$this->db->order_by("tanggal_mulai", "desc");
						$get = $this->db->get_where('agenda');
						$hasil_get = $get->result_array();
						foreach ($hasil_get as $item) {
							?>


							<div class="popular-news">
								<div class="popular-grid">
									<i><?php echo $item ['tanggal_mulai'];?> </i>
									<p><?php echo substr($item['judul_kegiatan'],0,35);?><br><a href="singlepage.html">Read More</a></p>
								</div>
								<?php } ?>

								<a class="more" href="singlepage.html">More  +</a>
							</div>
						</div>
						<br>
						<br>
						<div class="popular">
							<div class="main-title-head">
								<h5><b style="color:#000">BULETIN</b></h5>
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
										<p><?php echo substr($item['judul'],0,35);?><br><a href="singlepage.html">Read More</a></p>
									</div>
									<!-- <a class="more" href="singlepage.html">More  +</a> -->
								</div>
								<?php } ?>
							</div>
							<br>


							<div class="popular" style="margin-top: 30px;">
								<div class="main-title-head">
									<h5><b style="color:#000">Hotel Di Batu</b></h5>
									<h4></h4>
									<div class="clearfix"></div>
								</div>		

								<?php
								$this->db->limit(3, 0);
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
											<i><?php echo $item['tanggal'];?> </i>
											<p><?php echo substr($item['judul'],0,35);?><br><a href="singlepage.html">Read More</a></p>
										</div>

										<a class="more" href="singlepage.html">More  +</a>
									</div>
									<?php } ?>



								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="clearfix"></div>
						</div>

						</div>
						<div class="main-title-head" style="margin-top: 30px;">
							<h5><b style="color:#000">Ulasan Terbaik</b></h5>
							<h4></h4>
							<div class="clearfix"></div>
						</div>

						<table style=" width: 100%;" style="margin-top: 30px;">
							<tr>
								<td>
									<div class="main-title-head" style="margin-top: 30px; width: 325px;">
										<h5><b style="color:#000">INFO KULINER</b></h5>
										<h4></h4>
										<div class="clearfix"></div>
									</div>
								</td>
								<td>
									<div class="main-title-head" style="margin-top: 30px; width: 325px;">
										<h5><b style="color:#000">INFO & PENGUMUMAN</b></h5>
										<h4></h4>
										<div class="clearfix"></div>
									</div>
								</td>
								<td>
									<div class="main-title-head" style="margin-top: 30px; width: 325px;">
										<h5><b style="color:#000">WISATA</b></h5>
										<h4></h4>
										<div class="clearfix"></div>
									</div>
								</td>
							</tr>
						</table>
						<div class="clearfix"></div>
						<div class="col-md-9 total-news" style="margin-top: 40px;">
							<div class="posts">
								<div class="left-posts">
									<div class="world-news">
										<div class="main-title-head">
											<h3>Info Kuliner</h3>
											<a href="singlepage.html">Berita Lainnya +</a>
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

												<div class="world-news-grid">
													<img src="<?php echo
													base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt=""  />
													<p><?php echo $item['isi']?></p>
													<button style="background: #3c763d;"><a href="singlepage.html" style="color:#EEE;">Read More</a></button>
												</div>
												<?php } ?>
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

													<div style="margin-left: 330px; position: relative;">
														<div class="world-news">

															<div class="world-news-grids">
																<div class="world-news-grid">
																	<img src="<?php echo
																	base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																</div>
																<div >
																	<a href="singlepage.html" class="title"><?php echo $item ['isi'] ?></a>

																	<a href="singlepage.html">Read More</a>
																</div>
															</div>
														</div>

													</div>	
													<?php } ?>

													<div class="tech-news" style="margin-top: ">

														<div class="tech-news-grids">



															<div class="left-tech-news">
																<div class="">
																	<div class="main-title-head" style="margin-top: 30px; width: 270px;">
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

																			<div class="">
																				<img style="width: 100%; height: 200px" src="<?php echo
																				base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																				<a href="singlepage.html" class="title"><?php echo substr($item['judul'],0,25);?></a>
																				<p><?php echo substr($item['judul'],0,45);?></p>
																				<a href="singlepage.html">Read More</a>
																			</div>
																			<?php } ?>



																			<div class="tech-news-grid span_66">
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
																				<div class="world-news">
																					<div class="world-news-grids">
																						<div class="world-news-grid">
																							<img src="<?php echo
																							base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																						</div>
																						<div >
																							<a href="singlepage.html" class="title"><?php echo substr($item['judul'],0,30)?></a>

																							<a href="singlepage.html">Read More</a>
																						</div>
																						<div class="clearfix"></div>
																					</div>
																				</div>
																				<?php } ?>

																				<div class="clearfix"></div>
																			</div>
																		</div>
																	</div>




																	<div class="right-tech-news">
																		<div class="">
																			<div class="main-title-head" style="margin-top: 30px; width: 270px;">
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
																						<img style="width: 100%; height: 200px" src="<?php echo
																						base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																						<a href="singlepage.html" class="title"><?php echo substr($item['judul'],0,35)?></a>
																						<p><?php echo substr($item['isi'],0,30)?></p>
																						<a href="singlepage.html">Read More</a>
																					</div>
																					<?php } ?>



																					<div class="tech-news-grid span_66">
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

																						<div class="world-news">
																							<div class="world-news-grids">
																								<div class="world-news-grid">
																									<img src="<?php echo
																									base_url() . 'component/upload/foto/uploads/' . $name_img; ?>" alt="" />
																								</div>
																								<div >
																									<a href="singlepage.html" class="title"><?php echo substr($item['judul'],0,35)?></a>
																									<a href="singlepage.html">Read More</a>
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
