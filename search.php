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
								<?php if ( have_posts() ) : ?>
									<h2><?php printf( __( 'Your Search Query <em>"%s"</em>', 'zerofour' ), get_search_query() ); ?></h2>
								<?php else: ?>
									<h2><?php _e( 'Nothing Found', 'zerofour' ); ?></h2>
								<?php endif; ?>
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

										else: ?>

											<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'zerofour' ); ?></p>
									<?php
											get_search_form();
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