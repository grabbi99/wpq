<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

	<!-- Header -->
	<header class="header">
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="header-logo">
						<div class="col-xs-6">
							<div class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('logo_uploder'); ?>" alt=""></a>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="header-right">
								<a href="tel:<?php echo get_theme_mod('header_right_phone'); ?>"><?php echo get_theme_mod('header_right_phone'); ?></a>
								<a href="mailto:<?php echo get_theme_mod('header_right_email'); ?>"><?php echo get_theme_mod('header_right_email'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="header-menu">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="header-menus-aera">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<button id="menu-toggle" class="menu-toggle"><i class="genericon genericon-menu"></i></button>
								

								<div id="site-header-menu" class="site-header-menu">
									<?php if ( has_nav_menu( 'primary' ) ) : ?>
										<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
											<?php
												wp_nav_menu( array(
													'theme_location' => 'primary',
													'menu_class'     => 'primary-menu',
												 ) );
											?>
										</nav><!-- .main-navigation -->
									<?php endif; ?>
								</div><!-- .site-header-menu -->
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
