<?php get_header(); ?>
	<!-- Main Wrapper -->
	<div id="main-wrapper">

		<div class="wrapper style3">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-8 col-12-medium">

							<!-- Article list -->
								<section class="box article-list">

									<!-- Excerpt -->
										<?php
											if ( have_posts() ) :

												while (have_posts()) :
													the_post();

													get_template_part( 'template-parts/posts/content', get_post_format() );

												endwhile;

											/* Paginations */
											the_posts_pagination( array(
												'screen_reader_text'	=> ' '
											) );

												else:
													get_template_part( 'template-parts/posts/content', 'none' );
											endif;
										?>

								</section>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>