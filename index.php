<?php
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package Layno
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$is_elementor_theme_exist = function_exists( 'elementor_theme_do_location' );

if(is_search() ) {
    if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'archive' ) ) {
        get_template_part( 'template-parts/search' );
    }
} elseif ( is_singular('post') ) {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'single' ) ) {
		get_template_part( 'template-parts/single' );
	}
} elseif ( is_singular('page') ) {
    if (!$is_elementor_theme_exist || !elementor_theme_do_location('single')) {
        get_template_part('template-parts/page');
    }
} elseif (is_singular()) {
    get_template_part('post-types/single-'.get_post_type());
} elseif (is_post_type_archive()) {
    get_template_part('post-types/archive-'.get_post_type());
} elseif ( is_archive() || is_home() ) {
    if (!$is_elementor_theme_exist || !elementor_theme_do_location('archive')) {
        get_template_part('template-parts/archive');
    }
} else {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'single' ) ) {
		get_template_part( 'template-parts/404' );
	}
}

get_footer();
