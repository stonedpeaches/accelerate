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
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- site-content -->
</section><!-- aboutpage -->

<?php while ( have_posts() ) : the_post();
    $service = get_field('service');
    $image_1 = get_field('image_1');
    $size = "full"; ?>

    <div class="services">
        <figure>
            <?php if($image_1) {
                echo wp_get_attachment_image( $image_1, $size ); 
            } ?>
        </figure>
        <div>
            <h5><?php echo $service ?></h5>
            <?php the_post (); ?>
        </div>
    </div>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
