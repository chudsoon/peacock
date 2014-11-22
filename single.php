
<?php
get_header(); ?>

<?php
// checks if there are any posts that match the query

if (have_posts()) :

  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();

    // the code between the while loop will be repeated for each post
    ?>
		<div class="row">
			<div class="content-box">
				 <div class="col-md-12 thumbnail" id="post-<?php the_ID(); ?>">
					
						<div class="col-md-10">
							
							<div class="caption">
								<h3><?php the_title(); ?></h3>
								<p> <?php the_content(); ?></p>
								
							</div>
							</div> <!-- col-md-10 -->
						
					
				</div><!-- col-md-12 thumbnail -->
				
				
				
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