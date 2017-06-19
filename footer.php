<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="copyright">
						<p>2017 instrom security consultants</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="footer-menu">
						<?php if ( has_nav_menu( 'footernav' ) ) : ?>
							<nav id="footer-navs" class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Fotter Nav Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'footernav',
										'menu_class'     => 'footer-nav-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
