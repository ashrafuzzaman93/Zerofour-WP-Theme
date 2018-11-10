<div class="col-4 col-12-medium">

	<!-- Spotlight -->
	<section class="box spotlight">
		<?php
			$zf_sl_post_title = ''; 
			$zf_sl_post_id = '';
			if ( class_exists('ACF') || function_exists('the_field') ) {
				$zf_sl_post_title 	= !empty( get_field( 'zerofour_spotlight_post_section_title' ) ) ? get_field( 'zerofour_spotlight_post_section_title' ) : __( 'Spotlight', 'zerofour' );
				$zf_sl_post_id 		= !empty( get_field( 'zerofour_select_spotlight_post' ) ) ? get_field( 'zerofour_select_spotlight_post' ) : '';
			}
		?>
		<h2 class="icon fa-file-text-o"><?php echo esc_html( $zf_sl_post_title ); ?></h2>
		
		<?php 
			$zerofour_sp_post_args = array(
				'post_type'			=> 'post',
				'posts_per_page'	=> 1,
				'p'		=> $zf_sl_post_id
			);

			$zeroforu_sp_query = new WP_Query( $zerofour_sp_post_args );

			if ( $zeroforu_sp_query->have_posts() ) :

				while ( $zeroforu_sp_query->have_posts() ) :
					$zeroforu_sp_query->the_post();
		?>
					<article>
						<?php  if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="image featured">
								<?php the_post_thumbnail( 'full', array( 'alt'	=> esc_attr( get_the_title() ) ) ) ?>
							</a>
						<?php endif; ?>
						<header>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<p><?php echo esc_html( wp_trim_words( get_the_content(), 60, ' ' ) ) ?></p>
						<footer>
							<a href="<?php the_permalink(); ?>" class="button alt icon fa-file-o"><?php _e( 'Continue Reading', 'zerofour' ); ?></a>
						</footer>
					</article>
		<?php 
				endwhile;
			endif;
			wp_reset_postdata();

		?>
	</section>
</div>