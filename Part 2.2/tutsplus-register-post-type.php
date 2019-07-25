<?php
/*
Plugin Name:	Tutsplus Register Post Type
Plugin URI:		https://tutsplus.com
Description:	Plugin to accompany tutsplus course on WordPress Content Types. Registers a 'Cities' post type.
Version:		2.2
Author:			Rachel McCollin
Author URI:		https://rachelmccollin.com 
TextDomain:		tutsplus
License:		GPLv2
*/

/***************************************************************************
function tutsplus_register_post_type - registers the 'city' post type
***************************************************************************/
function tutsplus_register_post_type() {
	
	$labels = array(
		'name'					=>	__( 'Cities', 'tutsplus' ),
		'singular_name'			=>	__( 'City', 'tutsplus' ),
		'menu_name'				=>	__( 'Cities', 'tutsplus' ),
		'name_admin__bar'		=>	__( 'Cities', 'tutsplus' ),
		'add_new'				=>	__( 'Add New City', 'tutsplus' ),
		'add_new_item'			=>	__( 'Add New City', 'tutsplus' ),
		'new_item'				=>	__( 'New City', 'tutsplus' ),
		'edit_item'				=>	__( 'Edit City', 'tutsplus' ),
		'view_item'				=>	__( 'View City', 'tutsplus' ),
		'all_items'				=>	__( 'All Cities', 'tutsplus' ),
		'search_items'			=>	__( 'Search Cities', 'tutsplus' ),
		'not_found'				=>	__( 'No cities Found', 'tutsplus' ),
		'not_found_in_trash'	=>	__( 'No cities Found in trash', 'tutsplus' )
	);
	
	$args = array(
		'labels'				=>	$labels,
		'has_archive'			=>	true,
		'public'				=>	true,
		'hierarchical'			=>	true,
		'supports'				=>	array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes' ),
		'capability_type'		=>	'post',
		'rewrite'				=>	'city',
		'show_in_rest'			=>	true
	);
	
	register_post_type( 'tutsplus_city', $args );
	
}
add_action( 'init', 'tutsplus_register_post_type' );