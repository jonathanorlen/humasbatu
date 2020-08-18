<div class="clearfix"></div>
<div class="main-content">		
	<div class="col-md-9 total-news">
			



					<div class="posts">
						<div class="left-posts">
							<div class="world-news">
								<div class="main-title-head">
                                <?php 
                                    $kategori = $this->uri->segment(3);
                                    $get_kategori = $this->db->get_where('kategori_artikel',array('kode_kategori'=>$kategori));
                                    $hasil = $get_kategori->row();
                                ?>
									<h3>Artikel <?php echo $hasil->nama_kategori; ?></h3>
									
									<div class="clearfix"></div>
								</div>
                                <?php


                                    
                                    $arsip = $this->db->get_where('artikel',array('kode_kategori'=>$kategori));
                                    foreach($arsip->result() as $daftar){
                                ?>
								<div style="margin-left: 20px;text-align: justify;" class="world-news-grids">
										<div class="grid box">
                                    			<div class="grid-header">
                                    				<a class="gotosingle" href="singlepage.html"><?php echo $daftar->judul; ?> </a>
                                    				<ul>
                                    				<li><span>Post by<a href="#"><?php echo $daftar->nama_petugas; ?></a> on <?php echo TanggalIndo($daftar->tanggal); ?></span></li>
                                    				
                                    				</ul>
                                    			</div>
                                    			<div class="grid-img-content">
                                    				<a href="singlepage.html"><img style="width: 300px;height: 225px;" src="<?php echo base_url().'component/upload/foto/uploads/'.str_replace("|","",$daftar->foto); ?>" class="blog" alt="" /></a>
                                    				<p><?php echo substr($daftar->isi,0,300); ?></p>
                                    				<div class="clearfix"> </div>
                                    			</div>
                                    			<div class="comments">
                                    				<ul>
					                                    
                                    					
                                    					<li><a href="#"><img src="<?php echo base_url().'component/web/'; ?>images/link.png" title="link" /></a></li>
                                    					<li><a class="readmore" href="<?php echo base_url().'web/informasi/detail_informasi/'.$daftar->id; ?>">ReadMore</a></li>
                                    				</ul>
                                    			</div>
		                                  </div>
										<div class="clearfix"></div>
									</div>
                                    <?php } ?>
								</div>
								
									
								</div>
								<div class="right-posts">
									<div class="desk-grid">
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

									</div>
								
								<div class="right-posts">
									<div class="desk-grid"><br /><br />
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

									</div><br /><br />
									<div class="right-posts">
									<div class="desk-grid"><br /><br />
										<h3>ARTIKEL TERBARU</h3>
										<?php
                                            $this->db->limit(5,0);
                                            $this->db->order_by('tanggal','desc');
                                            $artikel = $this->db->get('artikel');
                                            foreach($artikel->result() as $daftar){
                                        ?>

											<ul style="margin-left: 10px; font-size: 14px;">
												<li><?php echo $daftar->judul; ?></li>
											</ul>
											<?php } ?>
										</div>

									</div>
                                    
                                    
                                    <br>
									
									<div class="clearfix"></div>
                                    
                                    	
								</div>
							</div>	
							<div class="col-md-3 side-bar">
					<!--<div class="sign_up text-center">
						<h3>Silahkan Login</h3>
						<p class="sign">Klik Tombol dibawah ini untuk login !</p>
						<form>
							<center><input type="submit" value="LOGIN"></center>
						</form>
						<p class="spam">We do not spam. We value your privacy!</p>
					</div>-->
					
					<div class="popular">
						<div class="main-title-head">
							<h5>DAFTAR AGENDA KAMI</h5>
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
					</div>
					<br>
					<br>
					<div class="popular">
					<video width="250" height="150" class="wp-video-shortcode" id="video-2945-1" preload="metadata" controls="controls">
								<source src="http://humas.batukota.go.id/wp-content/uploads/2016/07/Videotron-Umum-Pilwali-KPU-Batu.mp4?_=1" type="video/mp4">
								<a href="http://humas.batukota.go.id/wp-content/uploads/2016/07/Videotron-Umum-Pilwali-KPU-Batu.mp4">http://humas.batukota.go.id/wp-content/uploads/2016/07/Videotron-Umum-Pilwali-KPU-Batu.mp4</a></video>
						<!-- <div class="main-title-head">
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
									<i><?php echo TanggalIndo($item['tanggal']);?> </i>
									<p><?php echo substr($item['judul'],0,35);?><br><a href="singlepage.html">Read More</a></p>
								</div> -->
								<!-- <a class="more" href="singlepage.html">More  +</a> -->
							<!-- </div>
							<?php } ?> -->
						</div>
						<br>


						
						<div class="clearfix"></div>
					</div>	
					<div class="clearfix"></div>
				</div>


				

				
				<div class="clearfix"></div>
				