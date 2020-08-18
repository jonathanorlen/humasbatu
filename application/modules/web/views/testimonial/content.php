<div class="clearfix"></div>
<div class="main-content" style="margin-top: 20px;">
	<div class="col-md-9 total-news">
		<div class="posts">
			<div class="col-md-12">
				<div class="latest-articles">
					<div class="main-title-head" style="margin-top: -30px;">
						<h3>Testimonial</h3>
						<div class="clearfix"></div>
					</div>
					<p>Tuliskan testimoni Anda pada kolom dibawah ini </p>
					<div class="row">
						<br>
						<div class="col-md-12">
							<!-- BEGIN VALIDATION STATES-->
							<div class="portlet box green">
								<div class="portlet-body form">
									<!-- BEGIN FORM-->
									<form id="data_form" class="form-horizontal" style="">
										<div class="form-body">
											<div class="form-group">
												<label class="control-label col-md-3">Nama Anda<span class="required">
													* </span>
												</label>

												<div class="col-md-9">
													<input type="text" name="nama" id="nama" data-required="1" class="form-control" placeholder="masukkan Nama anda !"/>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Email Anda<span class="required">
													* </span>
												</label>

												<div class="col-md-9">
													<input type="text" name="email" id="email" data-required="1" class="form-control" placeholder="masukkan email anda !" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Keterangan Testimonial <span class="required">
													* </span>
												</label>
												<div class="col-md-9">
													<textarea class="wysihtml5 form-control" rows="6" name="isi" id="isi" data-error-container="#editor1_error" placeholder="Masukkan Testimonial Anda !"></textarea>
													<div id="editor1_error">
													</div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-1 col-md-9">
														<a href="#" class="btn green" onclick="simpan()" id="simpan" style="margin-left: 98px;background:#3c763d; color: #fff">Submit</a>
													</div>
												</div>
											</div>
										</div>
									</form>
									<!-- END FORM-->
								</div>
								<!-- END VALIDATION STATES-->
							</div>
							<br>
							<div class="komentar">
								<div class="comments">
									<div class="main-title-head">
										<div>
											<nav class="main-nav" style="width: 120px;">
												<ul class="main-menu">
													<li class="current"><a href="#">Older</a></li>
													<li class="current"><a href="#">Newest</a></li>
												</ul>
											</nav>
										</div>
										<div class="clearfix"></div>
									</div>
									<br>
									<br>
									<?php
									$this->db->order_by("tanggal","desc");
									$get = $this->db->get_where('testimonial');
									foreach($get->result_array() as $daftar){
										?>
										<div class="comment-wrap">
											<div class="photoku">
												<img style="border-radius: 40px;" class="avatar" src="<?php echo base_url().'component/web/images/avatar.png' ?>" />

											</div>
											<div class="comment-block">
												<p class="comment-text tulisan"><?php echo $daftar['isi']; ?></p>
												<div class="bottom-comment">
													<div class="comment-date"><?php echo TanggalIndo($daftar['tanggal']) ?> @ <?php echo $daftar['nama']; ?></div>

												</div>
											</div>
										</div><br />

										<?php } ?>



									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<br />
				<div class="clearfix"></div>	
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

			<div class="popular" style="width:100%">
				<div class="main-title-head">
					<h5>DAFTAR AGENDA KAMI</h5>
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
			<!-simpan-->
			<script type="text/javascript">

				function simpan() {
					var nama = $('#nama').val();
					var email = $('#email').val();
					var tanggal = $('#tanggal').val();
					var isi = $('#isi').val();
					var url = "<?php echo base_url().'web/simpan_tambah/'?> ";

					$.ajax({
						type: "POST",
						url: url,
						data: { 
							nama:nama,
							email:email,
							tanggal:tanggal,
							isi:isi,

						},
						beforeSend:function(){
							$(".tunggu").show();  
						},
						success: function(data)
						{
							$(".sukses").html(data);   
							setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'web/testimonial/content/' ?>";},1500);    
						}
					});
				}
			</script>
			<script type="text/javascript">

				(function($) {
					$.fn.menumaker = function(options) {
						var cssmenu = $(this),
						settings = $.extend({
							format: "dropdown",
							sticky: false
						}, options);
						return this.each(function() {
							$(this).find(".button").on('click', function() {
								$(this).toggleClass('menu-opened');
								var mainmenu = $(this).next('ul');
								if (mainmenu.hasClass('open')) {
									mainmenu.slideToggle().removeClass('open');
								} else {
									mainmenu.slideToggle().addClass('open');
									if (settings.format === "dropdown") {
										mainmenu.find('ul').show();
									}
								}
							});
							cssmenu.find('li ul').parent().addClass('has-sub');
							multiTg = function() {
								cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
								cssmenu.find('.submenu-button').on('click', function() {
									$(this).toggleClass('submenu-opened');
									if ($(this).siblings('ul').hasClass('open')) {
										$(this).siblings('ul').removeClass('open').slideToggle();
									} else {
										$(this).siblings('ul').addClass('open').slideToggle();
									}
								});
							};
							if (settings.format === 'multitoggle') multiTg();
							else cssmenu.addClass('dropdown');
							if (settings.sticky === true) cssmenu.css('position', 'fixed');
							resizeFix = function() {
								var mediasize = 700;
								if ($(window).width() > mediasize) {
									cssmenu.find('ul').show();
								}
								if ($(window).width() <= mediasize) {
									cssmenu.find('ul').hide().removeClass('open');
								}
							};
							resizeFix();
							return $(window).on('resize', resizeFix);
						});
					};
				})(jQuery);

				(function($) {
					$(document).ready(function() {
						$("#cssmenu").menumaker({
							format: "multitoggle"
						});
					});
				})(jQuery);

			</script>
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
				@import "compass/css3";

				$black: #231f20;
				$grey: #8f8d8e;
				$red: #e61c38;
				$darkgrey: #6b696a;
				* {
					box-sizing: border-box;
				}
				.main-nav {
					margin:0;
					padding:0;
					height: 44px;
					background-color: $black;  
					border-bottom: 4px solid #444041;
				}
				.main-menu {
					margin: 0;
					padding: 0;
					width: 100%; 
					float: left;
					height: 100%;
					font-family: FreeSetLightC; 
					li {
						float: left; 
						width: 20%; 
						height: 100%;
						border-right: 1px dashed #434243;
						border-left: 1px dashed #434243;
						overflow: hidden;
						a {
							position: relative;
							display: block;
							height: 100%;
							text-align: center;
							padding-top: 14px;
							text-decoration: none;
							color: #FFF;
							text-transform: uppercase;  
							background-repeat: repeat-x;
							background-position: 0px 0px;
							background-size: 100% 88px;
							-webkit-transition: .3s;
							-moz-transition: .3s;
							-ms-transition: .3s;
							-o-transition: .3s;
							transition: .3s;
							background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAABYCAIAAAC79grhAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCRTZCRTNGMzkyRDQxMUUyOTZDRkEwOTJEN0I1OTI2RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCRTZCRTNGNDkyRDQxMUUyOTZDRkEwOTJEN0I1OTI2RCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkJFNkJFM0YxOTJENDExRTI5NkNGQTA5MkQ3QjU5MjZEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkJFNkJFM0YyOTJENDExRTI5NkNGQTA5MkQ3QjU5MjZEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+45QsCAAAACpJREFUeNpiUJZXYGJgYBgy+PBfCRS+HctLOJuRkREvG58YMXJk0AABBgAGVARHQWB1KQAAAABJRU5ErkJggg==);
      /*&:after {
        content: "";
        display: block;
        width: 100%;
        height: 4px;
        background-color: #e61c38;
        position: absolute;
        top: 100%;
        left: 0; 
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -ms-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }*/
}
&.current, &:hover {

	a {
		background-position: 0px -44px;
		//background: #242021; /* Old browsers */
		//background: -moz-linear-gradient(top,  #242021 0%, #353132 100%); /* FF3.6+ */
		//background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#242021), color-stop(100%,#353132)); /* Chrome,Safari4+ */
		//background: -webkit-linear-gradient(top,  #242021 0%,#353132 100%); /* Chrome10+,Safari5.1+ */
		//background: -o-linear-gradient(top,  #242021 0%,#353132 100%); /* Opera 11.10+ */
		//background: -ms-linear-gradient(top,  #242021 0%,#353132 100%); /* IE10+ */
		//background: linear-gradient(to bottom,  #242021 0%,#353132 100%); /* W3C */
		//filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#242021', endColorstr='#353132',GradientType=0 ); /* IE6-9 */
		//background-position: 0px 0px;
		//background-repeat: no-repeat;
        /*&:after {
          top: 0%;
           -webkit-transition: .3s;
          -moz-transition: .3s;
          -ms-transition: .3s;
          -o-transition: .3s;
          transition: .3s;
      }*/
  }
}
}
}
</style>
<script type="text/javascript">
	$(function(){
		$(".main-menu a").click(function(e){
			e.preventDefault();
			$(this).parents("li").addClass("current").siblings().removeClass("current");
		});
	})
</script>