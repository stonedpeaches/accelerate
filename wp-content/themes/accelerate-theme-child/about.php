<?php
/**
 * The custom template for the About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
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
	
	<?php get_sidebar(); ?>

	<?php if ( have_posts() ): ?>
		<div id="navigation" class="container">
	        <div class="left"><?php next_posts_link('&larr; <span>Older Posts</span>'); ?></div>
	        <div class="right"><?php previous_posts_link('<span>Newer Posts</span> &rarr;'); ?></div>
	    </div>
	<?php endif; ?>
</section>

<?php get_footer(); ?>
