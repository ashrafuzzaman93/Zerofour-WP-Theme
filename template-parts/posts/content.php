<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'box', 'excerpt' ) ) ?>>
	<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" class="image left"><?php the_post_thumbnail( 'zerofour-post-thumbnail', array('alt' => esc_attr(get_the_title())) ) ?></a>
	<?php endif; ?>
	<div>
		<header>
			<span class="date"><?php echo get_the_date( 'F d' ); ?></span>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</header>
		<p><?php the_excerpt(); ?></p>
	</div>
</article>