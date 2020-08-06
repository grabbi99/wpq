<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="error-404-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-404 not-found text-center">
                    <h1>404!</h1>
                    <h2>Page Not Found</h2>
                    <a href="<?php echo site_url(); ?>" class="btn mt-3">Back to homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
