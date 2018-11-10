			<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">

						<div class="col-3 col-6-medium col-12-small">
							<?php 
								if ( is_active_sidebar( 'zerofour-footer-sidebar-1' ) ) {
									dynamic_sidebar( 'zerofour-footer-sidebar-1' );
								}
							?>
						</div>

						<div class="col-3 col-6-medium col-12-small">
							<?php 
								if ( is_active_sidebar( 'zerofour-footer-sidebar-2' ) ) {
									dynamic_sidebar( 'zerofour-footer-sidebar-2' );
								}
							?>
						</div>

						<div class="col-6 col-6-medium col-12-small">
							<?php 
								if ( is_active_sidebar( 'zerofour-footer-sidebar-3' ) ) {
									dynamic_sidebar( 'zerofour-footer-sidebar-3' );
								}
							?>
						</div>

						</div>
						<div class="col-12">
							<div id="copyright">
								<?php 
									if ( is_active_sidebar( 'zerofour-footer-text' ) ) {
										dynamic_sidebar( 'zerofour-footer-text' );
									}
								?>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>