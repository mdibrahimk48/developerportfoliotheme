<?php

// Register Custom Post Type Custom  Service
function create_customservice_cpt() {

	$labels = array(
		'name' => _x( 'Custom  Services', 'Post Type General Name', 'classicportfolio' ),
		'singular_name' => _x( 'Custom  Service', 'Post Type Singular Name', 'classicportfolio' ),
		'menu_name' => _x( 'Custom  Services', 'Admin Menu text', 'classicportfolio' ),
		'name_admin_bar' => _x( 'Custom  Service', 'Add New on Toolbar', 'classicportfolio' ),
		'archives' => __( 'Custom  Service Archives', 'classicportfolio' ),
		'attributes' => __( 'Custom  Service Attributes', 'classicportfolio' ),
		'parent_item_colon' => __( 'Parent Custom  Service:', 'classicportfolio' ),
		'all_items' => __( 'All Custom  Services', 'classicportfolio' ),
		'add_new_item' => __( 'Add New Custom  Service', 'classicportfolio' ),
		'add_new' => __( 'Add New', 'classicportfolio' ),
		'new_item' => __( 'New Custom  Service', 'classicportfolio' ),
		'edit_item' => __( 'Edit Custom  Service', 'classicportfolio' ),
		'update_item' => __( 'Update Custom  Service', 'classicportfolio' ),
		'view_item' => __( 'View Custom  Service', 'classicportfolio' ),
		'view_items' => __( 'View Custom  Services', 'classicportfolio' ),
		'search_items' => __( 'Search Custom  Service', 'classicportfolio' ),
		'not_found' => __( 'Not found', 'classicportfolio' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicportfolio' ),
		'featured_image' => __( 'Featured Image', 'classicportfolio' ),
		'set_featured_image' => __( 'Set featured image', 'classicportfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicportfolio' ),
		'use_featured_image' => __( 'Use as featured image', 'classicportfolio' ),
		'insert_into_item' => __( 'Insert into Custom  Service', 'classicportfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom  Service', 'classicportfolio' ),
		'items_list' => __( 'Custom  Services list', 'classicportfolio' ),
		'items_list_navigation' => __( 'Custom  Services list navigation', 'classicportfolio' ),
		'filter_items_list' => __( 'Filter Custom  Services list', 'classicportfolio' ),
	);
	$args = array(
		'label' => __( 'Custom  Service', 'classicportfolio' ),
		'description' => __( '', 'classicportfolio' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'editor', 'author', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'customservice', $args );

}
add_action( 'init', 'create_customservice_cpt', 0 );

?>