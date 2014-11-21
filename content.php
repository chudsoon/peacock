	<div class="row">
			<div class="content-box">
				

			
				 <div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="thumbnail">
						<a href="#">
							<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?> 
						</a>
						<div class="caption">
							<h3><?php if ( have_posts() ) while ( have_posts() ) : the_post(); the_title(); endwhile; ?></h3>
							<p> <?php if ( have_posts() ) while ( have_posts() ) : the_post(); the_content(); endwhile; ?></p>
							<a class="btn btn-primary" href="#" role="button">Read more</a>
						</div>
					</div>
				</div>
			