<?php 

/*
Template Name: General Template
*/

 ?>

 <?php get_header(); ?>

	<img src="<?php header_image() ; ?>" 
		width ="<?php echo get_custom_header( )->width ; ?>"
		height= "<?php echo get_custom_header(  )->height;?>"
		class="img-fluid" 
		alt="header image">
	<div class="content-area">
		<main>

			<section class="middle-area">
				<div class="container">


						<div class="general-template">
							<?php 

							// If there are any posts
							if( have_posts() ):
								// While have posts, show them to us
								while( have_posts() ): the_post();

							 ?>

							<article>
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
							</article>

							 <?php 
							 endwhile;
							 else: 
							  ?>

							  <p>There's nothing yet to be displayed!</p>

							<?php endif; ?>

						</div>							

				</div>
			</section>

		</main>
	</div>
<?php get_footer(); ?>