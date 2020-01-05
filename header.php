<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <title>Learn WP</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6">Social Icons</div>
					<div class="search col-xl-2 col-md-4 col-sm-4 col-6 text-right">Search</div>					
				</div>
			</div>

		</section>
		<section class="menu-area">
			<div class="container">
				<div class="align">
					<div class="row">
						<section class="logo col-md-2 col-sm-12 col-12 text-center">Logo</section>
						<!--https://developer.wordpress.org/reference/functions/wp_nav_menu/-->
						<nav class="main-menu col-md-10 text-right">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main_menu',
								) );
							?>
						</nav>					
					</div>					
				</div>
			</div>				
		</section>
</header>