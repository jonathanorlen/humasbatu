<div class="clearfix"></div>
<div class="main-content" style="margin-top: 20px;">
	<div class="main-title-head">
	<h3>Gallery</h3>
		<div class="clearfix"></div>
	</div>		
	<div class="col-md-12 total-news">
		<?php
		$get = $this->db->get_where('galeri', array('status' => '1' ));
		$hasil_get = $get->result_array();
		foreach ($hasil_get as $item) {
			?>
			<?php
			$string_foto = $item['foto'];
			list($name_img) = (explode('|', $string_foto));
			?>
			<div class="gallery_item" style="max-width: 210px; margin-left: 4px; display: block;">
				<div class="zoom-gallery">
					<a href="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img;?>" title="<?php echo $item['judul']?>" style="color:red;">
						<img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img;?>" width="100%" height="125">
					</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.zoom-gallery').magnificPopup({
				delegate: 'a',
				type: 'image',
				closeOnContentClick: false,
				closeBtnInside: false,
				mainClass: 'mfp-with-zoom mfp-img-mobile',
				image: {
					verticalFit: true,
					titleSrc: function(item) {
						return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
					}
				},
				gallery: {
					enabled: true
				},
				zoom: {
					enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
		});
	</script>
	<style type="text/css">
		.image-source-link  {
			color: #98C3D1;
		}
		
		title{
			color:#fff;
		}

		.mfp-with-zoom .mfp-container,
		.mfp-with-zoom.mfp-bg {
			opacity: 0;
			-webkit-backface-visibility: hidden;
			/* ideally, transition speed should match zoom duration */
			-webkit-transition: all 0.3s ease-out; 
			-moz-transition: all 0.3s ease-out; 
			-o-transition: all 0.3s ease-out; 
			transition: all 0.3s ease-out;
		}

		.mfp-with-zoom.mfp-ready .mfp-container {
			opacity: 1;
		}
		.mfp-with-zoom.mfp-ready.mfp-bg {
			opacity: 0.8;
		}

		.mfp-with-zoom.mfp-removing .mfp-container, 
		.mfp-with-zoom.mfp-removing.mfp-bg {
			opacity: 0;
		}
		/*border*/
		.gallery_item {
			float: left;
			width: 24.59%;
			display: inline-block;
			margin: 0 auto;
			margin-right: 0.25em;
			margin-bottom: 0.5em;
			padding: 0.5em;
			background: #FFF;
			border: 1px solid black;
			position:relative;
			-webkit-box-shadow: 0 1px 2px #AFAFAF;
			-moz-box-shadow: 0 1px 2px #AFAFAF;
			box-shadow: 0 1px 2px #AFAFAF;

			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
		}
		.mfp-counter{
			color:#fff;
		}
		.mfp-title{
			color:#fff;
		}
	</style>
