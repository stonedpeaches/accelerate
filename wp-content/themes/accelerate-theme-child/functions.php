<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

function create_custom_post_types() {
    register_post_type( 'case_studies', // gives new custom post type a unique name.
        array(  // big array that defines a bunch of settings for your new post type
            'labels' => array(
                'name' => __( 'Case Studies' ), // human-readable name you see in left nav of admin
                'singular_name' => __( 'Case Study' ) // the human-readable name for a single case study post
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ), // slug used in the URLs for case study posts
        )
    );
    
    register_post_type( 'aboutpage', // gives new custom post type a unique name.
        array(  // big array that defines a bunch of settings for your new post type
            'labels' => array(
                'name' => __( 'About Page' ), // human-readable name you see in left nav of admin
                'singular_name' => __( 'Service' ) // the human-readable name for a single service post
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array( 'slug' => 'about-us' ), // slug used in the URLs for service posts
        )
    );
}

add_action( 'init', 'create_custom_post_types' );
