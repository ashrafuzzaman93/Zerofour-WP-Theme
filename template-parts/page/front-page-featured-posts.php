<div class="wrapper style2">
	<div class="inner">

		<!-- Feature 2 -->
		<section class="container box feature2">
			<div class="row">
				<?php  
					$zerofour_featurd_posts_args = array(
						'post_type'		=> 'post',
						'meta_key'		=> 'zerofour_featured_post',
						'meta_value'	=> 1,
						'posts_per_page'	=> 2
					);

					$zerofour_featurd_posts = new WP_Query( $zerofour_featurd_posts_args );

					if ( $zerofour_featurd_posts->have_posts() ) :
						while ( $zerofour_featurd_posts->have_posts() ) :
							$zerofour_featurd_posts->the_post();
				?>
							<div class="col-6 col-12-medium">
								<section>
									<header class="major">
										<h2><?php the_title(); ?></h2>
									</header>
									<p><?php echo esc_html( wp_trim_words( get_the_content(), 35, ' ' ) ); ?></p>
									<footer>
										<a href="<?php the_permalink(); ?>" class="button medium icon fa-arrow-circle-right"><?php _e( 'Continue', 'zerofour' ); ?></a>
									</footer>
								</section>
							</div>
				<?php 
						endwhile;
					else:
				?>
					<p><?php _e( 'No Featured Posts Found', 'zerofour' ); ?></p>

				<?php
					endif;
					wp_reset_postdata();

				 ?>

			</div>
		</section>

	</div>
</div>