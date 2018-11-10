<?php get_header(); ?>
<!-- Main Wrapper -->
<div id="main-wrapper">
	
	<div class="wrapper style2">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-12 col-12-medium">
						<section class="box article-list">
								<h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'zerofour' ); ?></h2>
								<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'zerofour' ); ?></p>
								<?php get_search_form(); ?>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>