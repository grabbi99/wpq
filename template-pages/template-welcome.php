<?php
/**
 * Template Name: Welcome Template
 * 
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<!-- Banner -->
	<div class="banner-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="banner-img">
						<img src="<?php echo get_theme_mod('banner_image'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<main id="main" class="site-main welcome-content" role="main">

						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}

							// End of the loop.
						endwhile;
						?>

					</main><!-- .site-main -->
				</div>
			</div>
		</div>

	</div><!-- .content-area -->

<?php get_footer(); ?>
