<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		
		<meta charset="<?php bloginfo('charset') ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( array( 'homepage', 'is-preload' ) ) ?>>
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header-wrapper">
				<div class="container">

					<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
							<h1><a href="<?php echo esc_url( site_url() ); ?>" id="logo"><?php bloginfo( 'name' ) ?></a></h1>

							<!-- Nav -->
							<?php 
								if ( has_nav_menu( 'primary_menu' ) ) {
									wp_nav_menu( array(
										'theme_location'  => 'primary_menu',
										'container'       => 'nav',
										'container_id'    => 'nav'
									) );
								}
							?>

						</div>
					</header>
					
					<?php
						if ( is_page_template( 'zerofour.php' ) ) {
							get_template_part( 'template-parts/page/front-page-banner' );
						}
					?>

				</div>
			</div>
