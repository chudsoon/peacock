
<?php
get_header();

// checks if there are any posts that match the query
if (have_posts()) :

  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();

    // the code between the while loop will be repeated for each post
    ?>
				
				 <div class="col-md-12" id="post-<?php the_ID(); ?>">
					<div class="thumbnail">
						
						<div class="caption">
							<h3><?php the_title(); ?></h3>
							<p> <?php the_content(); ?></p>
						
							
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
	<?php get_footer();
?>