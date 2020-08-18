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
						<?php
							$id = $_GET['id_berita'];
							$hasil = $this->db->query(" SELECT * FROM artikel where id= '$id' ");
							$hasil_ambil = $hasil->row();

						?>
						<?php
							$string_foto = $hasil_ambil->foto;
							list($name_img) = (explode('|',$string_foto));			
						?>
					<div>
						<img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="380" style="margin:20px;margin-top:20;align-self:center"/>
						<h1 style="text-align:center">
							<?php echo $hasil_ambil ->judul ?>
						</h1>
						<div style="border:2px solid black;text-align:center;
">
							<?php echo $hasil_ambil ->isi ?>
						</div>
					</div>
						<div>
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