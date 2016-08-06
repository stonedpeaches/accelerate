<?php
/**
 * The custom template for the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

<section class="aboutpage">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="aboutpage-hero">
				<h1><?php the_content(); ?></h1>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->


<section class="about-page">		
	<div class="main-content">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content-blog', get_post_format()); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
