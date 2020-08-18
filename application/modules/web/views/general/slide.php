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
						<div class="conference-slider" style="display: block;">
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