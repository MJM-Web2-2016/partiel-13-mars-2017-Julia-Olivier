<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<div class="row">
			<div class="small-12 columns">

				<div id="footer-container">
					<footer id="footer">
						<?php do_action( 'foundationpress_before_footer' ); ?>
						<?php //dynamic_sidebar( 'footer-widgets' ); ?>
						<p class="text-center">CCAM - Rue de Parme<br>
						54500 Vandœuvre-lès-Nancy<br>
						Tél. : 03 83 56 15 00</p>
							<div class="menu-centered">
								<ul class="menu">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<p class="text-center">© Copyright : Musique Action - 2017</p>
						<?php do_action( 'foundationpress_after_footer' ); ?>
					</footer>
				</div>

			</div>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
