<!DOCTYPE html>
<html xmln:lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
   <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 
	 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

	<div class="container" >
		<div class="row" id="nav">
			<div class="col-md-12">
				<div class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container-fluid">
					
						<div class="navbar-header">	
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif"></a>
						</div>
						
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<?php
								wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'navbar-collapse-1',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
								);
							?>
							<ul class="social">
								<li id="googleplus"><a href="#">Google Plus</a></li>
								<li id="twitter"><a href="#">Twitter</a></li>
								<li id="facebook"><a href="#">Facebook</a></li>
							</ul>
						</div>
	
					</div>
					
				</div>	
			
			</div>
			
		</div>
		