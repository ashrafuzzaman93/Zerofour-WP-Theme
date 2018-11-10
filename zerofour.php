<?php 
/*
* Template Name: Homepage
*/
?>
<?php get_header(); ?>
	<!-- Main Wrapper -->
	<div id="main-wrapper">
		<?php 
			get_template_part( 'template-parts/page/front-page-services' );
			get_template_part( 'template-parts/page/front-page-featured-posts' );
		?>
		<div class="wrapper style3">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-8 col-12-medium">

								<?php
									$zf_posts_per_page = ''; 
									$zf_rec_posts_sec_title = '';
									if ( class_exists('ACF') || function_exists('the_field') ) {
										$zf_posts_per_page = !empty( get_field( 'zerofour_latest_show_posts_per_page' ) ) ? get_field( 'zerofour_latest_show_posts_per_page' ) : 3;
										$zf_rec_posts_sec_title = !empty( get_field( 'zerofour_recent_posts_section_title' ) ) ? get_field( 'zerofour_recent_posts_section_title' ) : __( 'Recent Posts', 'zerofour' );
									}
								?>
						
								<h2 class="icon fa-file-text-o"><?php echo esc_html( $zf_rec_posts_sec_title ); ?></h2>
								<!-- Article list -->
								<section class="box article-list">

									<!-- Excerpt -->
										<?php

											$zerofour_post_args = array(
												'post_type'			=> 'post',
												'posts_per_page'	=> $zf_posts_per_page
											);

											$zeroforu_query = new WP_Query( $zerofour_post_args );


											if ( $zeroforu_query->have_posts() ) :

												while ( $zeroforu_query->have_posts() ) :
													
													$zeroforu_query->the_post();

													get_template_part( 'template-parts/posts/content', get_post_format() );

												endwhile;

											/* Paginations */
											the_posts_pagination( array(
												'screen_reader_text'	=> ' '
											) );

												else: 
													get_template_part( 'template-parts/posts/content', 'none' );
											endif;

											wp_reset_postdata();
										?>

								</section>
						</div>

						<?php 

							if ( class_exists('ACF') || function_exists('the_field') ) {

								$zerofour_hp_sidebar = get_field( 'zerofour_rec_posts_show_sidebar' );
								$zerofour_hp_sidebar_spotlight = get_field( 'zerofour_show_spotlight_post' );

								if ( true == $zerofour_hp_sidebar ) {
									get_sidebar(); 
								} else {
									get_template_part( 'template-parts/page/front-page-sidebar' );
								}
							}
						?>


					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>