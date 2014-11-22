
<?php
get_header();
?>
<div class="row">
			<div class="content-box">

<?php
// checks if there are any posts that match the query

if (have_posts()) :

  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();

    // the code between the while loop will be repeated for each post
    ?>
				 <div class="col-md-12" id="post-<?php the_ID(); ?>">
					
						<div class="col-md-12 thumbnail">
							
							
								<div class="caption">
									<h3><?php the_title(); ?></h3>
									
								
							
									<p><span class="thmb"><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?php echo $image[0]; ?>"></span> <?php the_content(); ?></p>
									
								</div><!--caption-->
							
					
							
							
							
						
						</div><!-- col-md-12 thumbnail -->
				</div><!--col-md-12-->
				
				
				
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