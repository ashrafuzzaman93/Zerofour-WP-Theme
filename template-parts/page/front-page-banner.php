<!-- Banner -->
<?php if ( class_exists('ACF') && ( function_exists( 'the_field' ) && !empty( get_field( 'zerofour_banner_content' ) ) )  ) : ?>
	<div id="banner">
		<?php the_field( 'zerofour_banner_content' ); ?>
	</div>
<?php endif; ?>