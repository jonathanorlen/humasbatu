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
							<?php
							$get = $this->db->get_where('slider', array('status' => '1' ));
							$hasil_get = $get->result_array();
							foreach ($hasil_get as $item) {
								?>
								<?php
								$string_foto = $item['foto'];
								list($name_img) = (explode('|', $string_foto));
								?>
								<!-- Slideshow 3 -->
								<ul class="conference-rslide" id="conference-slider">
									<li><img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img;?>" alt=""></li>
								</ul>
								<!-- Slideshow 3 Pager -->
								<ul id="slider3-pager">
									<li><a href="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img;?>"><img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img;?>" alt=""></a></li>
								</ul>
								<div class="breaking-news-title">
									<p><?php echo $item['judul']?></p>
								</div>
							</div> 
							<?php } ?>
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
									<div class="world-news-grids">
										<div class="world-news-grid">
											<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
											<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
											<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
											<a href="singlepage.html">Read More</a>
										</div>
										<div class="world-news-grid">
											<img src="<?php echo base_url() . 'component/web/images/n2.jpg'?>" alt="" />
											<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
											<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
											<a href="singlepage.html">Read More</a>
										</div>
										<div class="world-news-grid">
											<img src="<?php echo base_url() . 'component/web/images/n3.jpg'?>" alt="" />
											<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
											<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
											<a href="singlepage.html">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="latest-articles">
									<div class="main-title-head">
										<h3>Sambutan Walikota</h3>
										<a href="singlepage.html">Artikel Lainnya+</a>
										<div class="clearfix"></div>
									</div>
									<div class="world-news-grids">

										<ul>
											<li type="none" style="font-size: 16px; font-family: arial; font-weight: bold; ">SAMBUTAN WALIKOTA BATU PADA ACARA PEMBUKAAN AJANG KOMPETISI SENI DAN OLAHRAGA MADRASAH (AKSIOMA), KOTA BATU TAHUN 2017</li>
											<span class="tie-date">January 9, 2017</span>
											<span class="post-comments"><a href="content/berita/pembukaan-aksioma-tingkat-kota-batu-di-alun-alun/index.html#respond">Leave a comment</a></span>
											<span class="post-views">43 Views</span>
										</ul>
									</div>
								</div>
								<div class="tech-news">

									<div class="tech-news-grids">
										<div class="left-tech-news">
											<div class="tech-news-grid span_66">
												<a href="singlepage.html">SAMBUTAN PRESIDEN REPUBLIK INDONESIA PADA ACARA PERINGATAN HARI BELA NEGARA TAHUN 2016</a>
												<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
												<p>by<a href="#">John Doe </a>  |  29 comments</p>
											</div>
											<div class="tech-news-grid">
												<a href="singlepage.html">SAMBUTAN PRESIDEN REPUBLIK INDONESIA PADA ACARA PERINGATAN HARI BELA NEGARA TAHUN 2016 2</a>
												<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
												<p>by<a href="#">John Doe </a>  |  29 comments</p>
											</div>
										</div>
										<div class="right-tech-news">
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
										</div>
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

									<ul style="margin-left: 10px;">
										<li >Berita</li>
										<li>Berita</li>
										<li>Berita</li>
										<li>Berita</li>
										<li>Berita</li>
										<li>Berita</li>
										<li>Berita</li>
										<li>Berita</li>
										<li>Berita</li>
									</ul>
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
						<div class="popular-news">
							<div class="popular-grid">
								<i>>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit... <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit... <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit... <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit... <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit... <a href="singlepage.html">Read More</a></p>
							</div>
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
						<div class="popular-news">
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<a class="more" href="singlepage.html">More  +</a>
						</div>
					</div>
					<br>
					<div class="popular" style="margin-top: 30px;">
						<div class="main-title-head">
							<h5><b style="color:#000">Hotel Di Batu</b></h5>
							<h4></h4>
							<div class="clearfix"></div>
						</div>		
						<div class="popular-news">
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							
							<a class="more" href="singlepage.html">More  +</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="clearfix"></div>
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
								<div class="world-news-grid">
									<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" style="width:300px" />
									<p>
										Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
										<button style="background: #3c763d;"><a href="singlepage.html" style="color:#EEE;">Read More</a></button>
									</div>
									<div style="margin-left: 330px; position: relative;">
										<div class="world-news">

											<div class="world-news-grids">
												<div class="world-news-grid">
													<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
												</div>
												<div >
													<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

													<a href="singlepage.html">Read More</a>
												</div>
											</div>
										</div>
										<div class="world-news">

											<div class="world-news-grids">
												<div class="world-news-grid">
													<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
												</div>
												<div >
													<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

													<a href="singlepage.html">Read More</a>
												</div>
											</div>
										</div>

										<div class="world-news">

											<div class="world-news-grids">
												<div class="world-news-grid">
													<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
												</div>
												<div >
													<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

													<a href="singlepage.html">Read More</a>
												</div>



												<div class="clearfix"></div>
											</div>
										</div>
									</div>	

									<div class="tech-news">

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
														<div class="">
															<img style="width: 100%; height: 200px" src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
															<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
															<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
															<a href="singlepage.html">Read More</a>
														</div>
														<div class="tech-news-grid span_66">
														</div>



														<div class="world-news">

															<div class="world-news-grids">
																<div class="world-news-grid">
																	<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
																</div>
																<div >
																	<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

																	<a href="singlepage.html">Read More</a>
																</div>



																<div class="clearfix"></div>
															</div>
														</div>
														<div class="world-news">

															<div class="world-news-grids">
																<div class="world-news-grid">
																	<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
																</div>
																<div >
																	<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

																	<a href="singlepage.html">Read More</a>
																</div>



																<div class="clearfix"></div>
															</div>
														</div>

														<div class="world-news">

															<div class="world-news-grids">
																<div class="world-news-grid">
																	<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
																</div>
																<div >
																	<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

																	<a href="singlepage.html">Read More</a>
																</div>



																<div class="clearfix"></div>
															</div>
														</div>	



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
														<div class="">
															<img style="width: 100%; height: 200px" src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
															<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
															<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
															<a href="singlepage.html">Read More</a>
														</div>
														<div class="tech-news-grid span_66">
														</div>



														<div class="world-news">

															<div class="world-news-grids">
																<div class="world-news-grid">
																	<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
																</div>
																<div >
																	<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

																	<a href="singlepage.html">Read More</a>
																</div>



																<div class="clearfix"></div>
															</div>
														</div>
														<div class="world-news">

															<div class="world-news-grids">
																<div class="world-news-grid">
																	<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
																</div>
																<div >
																	<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

																	<a href="singlepage.html">Read More</a>
																</div>



																<div class="clearfix"></div>
															</div>
														</div>

														<div class="world-news">

															<div class="world-news-grids">
																<div class="world-news-grid">
																	<img src="<?php echo base_url() . 'component/web/images/n1.jpg'?>" alt="" />
																</div>
																<div >
																	<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>

																	<a href="singlepage.html">Read More</a>
																</div>



																<div class="clearfix"></div>
															</div>
														</div>	



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