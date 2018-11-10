<?php get_header(); ?>
			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div id="content">

									<!-- Content -->

										<?php
											while ( have_posts() ) :
												the_post();
										?>

										<article>
											<header class="major">
												<h2><?php the_title(); ?></h2>
											</header>

											<span class="image featured">
												<?php
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( 'full', array( 'alt' => esc_attr( get_the_title() ) ) );
													}
												?>
											</span>

											<?php the_content(); ?>
										</article>

									<?php endwhile; ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>