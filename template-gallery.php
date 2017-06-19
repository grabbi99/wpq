<?php
/**
 * Template Name: Gallery Template
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


	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<main id="main" class="site-main" role="main">

						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header>

						<div class="row">

		                    <?php
		                        $sash_gallery= new WP_Query(array(
		                            'post_type' => 'sash_gallery'
		                        ));
		                    ?>

		                    <?php while($sash_gallery ->have_posts()) : $sash_gallery ->the_post() ?>
								<div class="col-sm-3">
									<div class="single-gallery">
										<?php 
											$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id(), 'full' );
										?>

										<a href="<?php echo $feat_image_url; ?>" class="gallery-popups"><?php the_post_thumbnail('thumb-gallery'); ?> </a>
										
										
									</div>
								</div>
		                    <?php endwhile; ?>

						</div>

					</main><!-- .site-main -->
				</div>
			</div>
		</div>

	</div><!-- .content-area -->

<?php get_footer(); ?>
