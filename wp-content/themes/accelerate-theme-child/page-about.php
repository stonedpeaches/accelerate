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

<div class="all-services">
	
<?php 
// Pull in our Services CPT
    $args = array (
        'post_type' => 'aboutpage', // replace with your post type name
    );
    $services_query = new WP_Query($args);
?>

<?php while ($services_query-> have_posts() ) : $services_query->the_post();
// Variables from 'services' CPT 
    $service_description = get_field('service_description'); 
    $service_image = get_field('service_image'); 
    $size = "thumbnail";
?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <section class="service-section">
            <figure class="service-image-left">
                <?php echo wp_get_attachment_image( $service_image, $size ); ?>
            </figure>
            <div class="service-description">
                <h3><?php the_title(); ?></h3>
                <p><?php echo $service_description; ?></p>
            </div>
        </section>
        
            
    </div>
</div>
				
<?php endwhile; //end the while loop
    wp_reset_postdata(); ?>
    
        <div class="about-contact-us">
			<p>Interested in working with us?&nbsp;&nbsp;&nbsp;
                <a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a></p>
        </div>

				
</div><!-- .all-services -->

<?php get_footer(); ?>
