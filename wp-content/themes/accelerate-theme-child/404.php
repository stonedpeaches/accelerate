<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="not-found-page">
	<div class="site-content">
        <h1>Oops!</h1>
            <h3>We can't find what you're looking for<br>
                so we are distracting you with<br>
                kittens dressed as frogs.<br><br>
                You're welcome.</h3>
        
                <a class="not-found-button" href="<?php echo home_url(); ?>">Home</a> 


	</div><!-- .container -->
</section><!-- .home-page -->



<?php get_footer(); ?>