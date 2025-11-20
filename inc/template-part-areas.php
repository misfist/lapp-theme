<?php
/**
 * Custom template part areas
 *
 * @package lapublicpress
 */

namespace LAPP;

/**
 * Add template part areas
 *
 * @link https://developer.wordpress.org/reference/hooks/default_wp_template_part_areas/
 *
 * @param  array $default_area_definitions
 * @return array
 */
function template_part_areas( array $default_area_definitions ) : array {
	$default_area_definitions[] = array(
		'area'        => 'sidebar',
		'label'       => __( 'Sidebar', 'lapp' ),
		'description' => __( 'The Sidebar template defines a page sidebar area.', 'lapp' ),
		'icon'        => 'sidebar',
		'area_tag'    => 'site-sidebar',
	);
	$default_area_definitions[] = array(
		'area'        => 'sidebar-home',
		'label'       => __( 'Sidebar (Home)', 'lapp' ),
		'description' => __( 'The Sidebar template defines the homepage page sidebar area.', 'lapp' ),
		'icon'        => 'sidebar',
		'area_tag'    => 'site-sidebar__home',
	);
	$default_area_definitions[] = array(
		'area'        => 'pre-footer',
		'label'       => __( 'Pre-footer', 'lapp' ),
		'description' => __( 'The Pre-footer template defines a page area directly above the site footer.', 'lapp' ),
		'icon'        => 'footer',
		'area_tag'    => 'pre-footer',
	);
	$default_area_definitions[] = array(
		'area'        => 'post-share',
		'label'       => __( 'Post Stare', 'lapp' ),
		'description' => __( 'The Post Share template defines a page area that typically contains share features.', 'lapp' ),
		'icon'        => 'share',
		'area_tag'    => 'post-share',
	);

	return $default_area_definitions;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\template_part_areas' );
