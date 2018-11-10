<?php get_header(); ?>
<!-- Main Wrapper -->
<div id="main-wrapper">
	
	<div class="wrapper style2">
		<div class="inner">
			<div class="container">
					<div class="row">
					<div class="col-12 col-12-medium">
						
						<!-- Article list -->
						<section class="box article-list">

							<header class="major">
								<?php the_archive_title( '<h2>', '</h2>' ) ?>
								<?php the_archive_description( '<p>', '</p>' ) ?>
							</header>

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
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>