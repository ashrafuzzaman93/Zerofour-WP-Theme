<div class="wrapper style1">
	<div class="inner">
		<!-- Feature 1 -->
			<section class="container box feature1">
				<div class="row">
					<div class="col-12">
						<?php 
							if ( class_exists('ACF') || function_exists( 'the_field' ) ) :
								$zerofour_seevice_sec_heading = get_field( 'zerofour_services_section_heading' );
								$zerofour_seevice_sec_sub_heading = get_field( 'zerofour_services_section_sub_heading' );
						?>
								<header class="first major">
									<?php if ( !empty( $zerofour_seevice_sec_heading ) ) : ?>
										<h2><?php echo esc_html( $zerofour_seevice_sec_heading ); ?></h2>
									<?php endif; ?>
									<?php if ( !empty( $zerofour_seevice_sec_sub_heading ) ) : ?>
										<p><?php echo esc_html( $zerofour_seevice_sec_sub_heading ); ?></p>
									<?php endif; ?>
								</header>
						<?php endif; ?>
					</div>
					<?php

						$zerofour_serveces_posts_per_page = 3;
						if ( class_exists('ACF') && function_exists('the_field') ) {
							$zerofour_serveces_posts_per_page = !empty( get_field( 'zerofour_show_posts_per_page' ) ) ? get_field( 'zerofour_show_posts_per_page' ) : 3;
						}

						$zerofour_cpt_args = array(
							'post_type'			=> 'services',
							'posts_per_page'	=> $zerofour_serveces_posts_per_page
						);

						$zeroforu_query = new WP_Query( $zerofour_cpt_args );

						if ( $zeroforu_query->have_posts() ) :

							while ( $zeroforu_query->have_posts() ) :
								$zeroforu_query->the_post();
					?>
								<div class="col-4 col-12-medium">
									<section>
										<?php  if ( has_post_thumbnail() ) : ?>
											<a href="<?php the_permalink(); ?>" class="image featured">
												<?php the_post_thumbnail( 'zerofour-services-thumbnail', array( 'alt'	=> esc_attr( get_the_title() ) ) ) ?>
											</a>
										<?php endif; ?>

										<?php 
											$zeroforu_services_post_icon = '';
											if ( class_exists('ACF') && function_exists('the_field') ) {
												$zeroforu_services_post_icon = !empty( get_field( 'zerofour_services_post_icons' ) ) ? get_field( 'zerofour_services_post_icons' ) : 'icon fa-user';
											}
										?>
										<header class="second icon <?php echo esc_attr( $zeroforu_services_post_icon ) ?>">
											<h3><?php the_title(); ?></h3>
											<p><?php echo esc_html( wp_trim_words( get_the_content(), 4, ' ' ) ); ?></p>
										</header>
									</section>
								</div>

					<?php  
							endwhile;
						else:
					?>
						<p><?php _e( 'No Services Posts Found', 'zerofour' ); ?></p>
					<?php

						endif;

						wp_reset_postdata();
					?>
					<?php 
						if ( class_exists('ACF') || function_exists( 'the_field' ) ) : 
							$zerofour_service_section_desc = get_field( 'zerofour_services_section_descriptions' );
					?>
						<div class="col-12">
							<?php 
								if ( !empty( $zerofour_service_section_desc ) ) {
									echo apply_filters( 'the_content', $zerofour_service_section_desc );
								}
							?>
						</div>
					<?php endif; ?>
				</div>
			</section> 

	</div>
</div>