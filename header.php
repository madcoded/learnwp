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
			<section class="logo">Logo</section>
			<nav class="main-menu">Menu</nav>
		</section>
	</header>