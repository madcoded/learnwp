<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-3 h-100">
							<!--sidebar-->
							<?php echo get_sidebar('blog');?>
						</aside>
						<div class="news col-md-9">
							<?php 

							// If there are any posts
							if( have_posts() ):
								// While have posts, show them to us
								while( have_posts() ): the_post();

							echo get_template_part( 'template-parts/content', get_post_format( ));

							 endwhile;
							?>
							<!--Pagination-->
							<div class="row">
								<div class="pages col-md-6 text-left">
							 		<?php previous_posts_link("<< Newer Post" ); ?>
								</div>
								<div class="pages col-md-6 text-right">
									<?php next_posts_link("Older Post >>" ); ?>
							</div>				
							
							<?php
							 else: 
							  ?>

							  <p>There's nothing yet to be displayed!</p>

							<?php endif; ?>

						</div>							
					</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>