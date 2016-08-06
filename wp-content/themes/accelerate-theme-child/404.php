<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

<section class="not-found">
	<div class="site-content">
        <h1>Oops!</h1>
            <h3>We can't seem to find what you're<br>
                looking for so we are distracting you<br>
                with kittens dressed as frogs.</h3>
            <h3>You're welcome.</h3>
            <h3 class="button"><a href="<?php echo home_url(); ?>">Home</a></h3>
	</div><!-- .container -->
</section><!-- .home-page -->

<?php get_footer(); ?>