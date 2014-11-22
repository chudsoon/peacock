	<div class="row">
			<div class="content-box">
				
				
<?php

// checks if there are any posts that match the query
if (have_posts()) :

  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();

    // the code between the while loop will be repeated for each post
    ?>
				
				 <div class="col-lg-4 col-sm-6 col-xs-12" id="post-<?php the_ID(); ?>">
					<div class="thumbnail">
						<a href="#">
							<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?> 
						</a>
						<div class="caption">
							<h3><?php the_title(); ?></h3>
							<p> <?php the_excerpt('<span class="btn btn-primary" role="button">Read more</span>'); ?></p>
						
							
						</div>
					</div>
				</div>
				
 <?php

    // Stop the loop when all posts are displayed
 endwhile;

// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>
				
				
				
			