<div class="clearfix"></div>
<div class="main-content" style="margin-top: 20px;">		
	<div class="col-md-9 total-news">

		<div class="posts">
			<div class="col-md-12">
				<div class="world-news">
					<div class="main-title-head">
						<?php
						$id = $this->uri->segment(3);
						$hasil = $this->db->query(" SELECT * FROM artikel where id= '$id' ");
						$hasil_ambil = $hasil->row();

						?>
						<h3 style="text-align:left">
							<?php echo $hasil_ambil ->judul ?>

						</h3>
						<div class="clearfix"></div>
						<div class="grid-header">

							<ul>
								<li>
									<span>Post by <?php echo ($hasil_ambil->nama_petugas); ?> on <?php echo TanggalIndo($hasil_ambil->tanggal); ?> </span>


								</li>
								<?php
								$get_komentar = $this->db->query("SELECT * FROM komentar_artikel WHERE id_artikel='$id'");
								$hasil_get_komentar = $get_komentar->result_array();
								?>
								<li>
									<span class="fa fa-comments"><?php echo count($hasil_get_komentar);?></span>
								</li>
								<li>
									<span class="fa fa-eye"><?php echo $hasil_ambil->jumlah_view; ?> Views</span>
								</li>
							</ul>
						</div>
					</div>


					<?php
					$string_foto = $hasil_ambil->foto;
					list($name_img) = (explode('|',$string_foto));			
					?>
					<div>
						<!-- <img src="<?php echo base_url() . 'component/upload/foto/uploads/'.$name_img; ?>" class="img-responsive" alt="" width="380" style="align-self:center"/> -->
						<div style="background:url('<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img; ?>');
							background-size: cover;
							background-repeat: no-repeat;
							background-position: center;
							width: 70%;
							height: 50%;">

						</div>
						

						<div style="text-align:justify;
						">
						<?php echo $hasil_ambil ->isi ?>
					</div>
				</div>

			</div>
			<div class="world-news" style="margin-top: 25px;">
				<div class="main-title-head">
					<h3>Artikel Terkait</h3>
					<a href="<?php echo base_url().'web/kategori_artikel/'.$hasil_ambil->kode_kategori; ?>">Artikel Lainnya +</a>
					<div class="clearfix"></div>
				</div>
				<div class="world-news-grids">
					<?php
					$this->db->limit(3,0);
					$this->db->order_by('tanggal','desc');
					$this->db->where('kode_kategori',$hasil_ambil->kode_kategori);
					$artikel = $this->db->get('artikel');
					foreach($artikel->result() as $daftar){


						?>
						<div class="world-news-grid">
							<img style="width: 100%; height: 40%;max-width: 200px; max-height: 135px;" src="<?php echo base_url().'component/upload/foto/uploads/'.str_replace('|',"",$daftar->foto); ?>" alt="" />
							<a href="<?php echo base_url().'web/detail_informasi/'.$daftar->id; ?>" class="title"><?php echo substr($daftar->judul,0,10); ?>..</a>
							<p><?php echo substr($daftar->isi,0,20);?>..</p>

						</div>

						<?php } ?>
						<div class="clearfix"></div>
					</div>
				</div><br />
				<div class="content-form" style="width:100%">
					<h3>Leave a comment</h3>
					<form id="data_form">
						<input name="id_artikel" type="hidden" value="<?php echo $id; ?>" />
						<input name="nama" type="text" placeholder="Name" required />
						<input name="email" type="text" placeholder="Email" required/>
						
						<textarea name="komentar" placeholder="Message"></textarea>
						<input name="tanggal" type="hidden" value="<?php echo date("Y-m-d"); ?>" />
						<!-- <input type="submit" value="SEND"/> -->
						<div><a id="klik" class="simpan" style="  background:#448D00;
							color:white;
							border-top:0;
							border-left:0;
							border-right:0;
							border-bottom:5px solid #448D00;
							padding:10px 20px;
							text-decoration:none;
							font-family:sans-serif;
							font-size:12pt;
							cursor: pointer;
							position: relative;
							float: right;">Simpan</a></div>
						</form>
					</div>

					<style>
						@import "bourbon";

						$ptsans: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
						$placeholder: #ced2db;
						$text-color: #555f77;
						$links: #0095ff;

						.komentar {
							background-color: #f0f2fa;
							font-family: $ptsans;
							color: $text-color;
							-webkit-font-smoothing: antialiased;
						}

						.ketik {
							outline: none;
							border: none;
							display: block;
							margin: 0;
							padding: 0;
							-webkit-font-smoothing: antialiased;
							font-family: $ptsans;
							font-size: rem(16);
							color: $text-color;
							@include placeholder {
								color: $placeholder;
							}
						}

						.tulisan {
							line-height: rem(21);
						}

						.comments {
							margin: rem(40) auto 0;
							max-width: rem(972);
							padding: 0 rem(20);
						}

						.comment-wrap {
							margin-bottom: rem(20);
							display: table;
							width: 100%;
							min-height: rem(85);
						}

						.photoku {
							//background-color: #ff6666;
							padding-top: rem(10);
							display: table-cell;
							width: rem(56);

							.avatar {
								@include size(rem(36));
								//background-color: #0094ff;
								border-radius: 50%;
								background-size: contain;
							}
						}

						.comment-block {
							padding: rem(16);
							background-color: #fff;
							display: table-cell;
							vertical-align: top;
							border-radius: rem(3);
							box-shadow: 0 1px 3px 0 rgba(0,0,0,0.08);


						}

						.comment-text {
							margin-bottom: rem(20);
							text-align: justify;
						}

						.bottom-comment {
							color: #acb4c2;
							font-size: rem(14);
						}

						.comment-date {
							float: left;
						}




					</style>
					<div class="komentar" style="width:100%">
						<div class="comments">

							<?php
							$get_komentar = $this->db->get_where('komentar_artikel',array('id_artikel'=>$id));
							foreach($get_komentar->result() as $daftar){
								?>
								<div class="comment-wrap">
									<div class="photoku">
										<img style="border-radius: 40px;" class="avatar" src="<?php echo base_url().'component/web/images/avatar.png' ?>" />

									</div>
									<div class="comment-block">
										<p class="comment-text tulisan"><?php echo $daftar->komentar; ?></p>
										<div class="bottom-comment">
											<div class="comment-date"><?php echo TanggalIndo($daftar->tanggal) ?> @ <?php echo $daftar->nama; ?></div>

										</div>
									</div>
								</div><br />

								<?php } ?>



							</div>
						</div>


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
									$this->db->order_by("tanggal_mulai",'DATE_SUB(NOW(), INTERVAL 1 MONTH)', "desc");
									$get = $this->db->get_where('agenda');
									$hasil_get = $get->result_array();
									foreach($hasil_get as $item){
										?>
										<div class="popular-grid">
											<i><?php echo $item ['tanggal_mulai'];?> </i>
											<p><?php echo substr($item['judul_kegiatan'],0,35);?><br><a href="<?php echo base_url().'web/detail_agenda/'.$item['id']; ?>"">Read More</a></p>
										</div>

										<?php } ?>
										<a class="more" href="<?php echo base_url().'web/agenda/'; ?>">More  +</a>
									</div>
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
									
								</div>	
								<div class="clearfix"></div>

								<script>
									$("#klik").click(function(){
										var url = "<?php echo base_url(). 'web/simpan_komentar'; ?>";
										$.ajax( {
											type:"POST", 
											url : url,  
											cache :false,  
											data :$('#data_form').serialize(),
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

								</script>