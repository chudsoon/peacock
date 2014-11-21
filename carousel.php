	<div class="row">
			<div class="col-md-12">
				<!--Carousel -->
				<div id="carousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="<?php bloginfo('template_url'); ?>/images/slider.jpg" alt="slider1">
					  
					</div>
					<div class="item">
					  <img src="<?php bloginfo('template_url'); ?>/images/slider2.jpg" alt="slider2">
					  <div class="carousel-caption">
						...
					  </div>
					</div>
					
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>