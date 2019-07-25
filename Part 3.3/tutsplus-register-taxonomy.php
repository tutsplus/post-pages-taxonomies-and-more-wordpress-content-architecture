<?php
/*
Plugin Name:	Tutsplus Register Taxonomy
Plugin URI:		https://tutsplus.com
Description:	Plugin to accompany tutsplus course on WordPress Content Types. Registers a 'Countries' taxonomy.
Version:		3.3
Author:			Rachel McCollin
Author URI:		https://rachelmccollin.com 
TextDomain:		tutsplus
License:		GPLv2
*/


/***************************************************************************
function tutsplus_register_taxonomy - registers the 'country' taxonomy
***************************************************************************/
function tutsplus_register_taxonomy() {
	
	$labels = array(
		'name'					=>	__( 'Countries', 'tutsplus' ),
		'singular_name'			=>	__( 'Country', 'tutsplus' ),
		'menu_name'				=>	__( 'Countries', 'tutsplus' ),
		'add_new_item'			=>	__( 'Add New Country', 'tutsplus' ),
		'all_items'				=>	__( 'All Countries', 'tutsplus' ),
		'edit_item'				=>	__( 'Edit Country', 'tutsplus' ),
		'update_item'			=>	__( 'Update Country', 'tutsplus' ),
		'search_items'			=>	__( 'Search Countries', 'tutsplus' ),
		'not_found'				=>	__( 'No Countries found', 'tutsplus' ),
		'not_found_in_trash'	=>	__( 'No Countries found in trash', 'tutsplus' ),
	);
	
	$args = array(
		'labels'			=>	$labels,
		'hierarchical'		=>	true,
		'sort'				=>	true,
		'args'				=>	array( 'orderby' => 'term_order' ),
		'rewrite'			=>	array( 'slug' => 'country' ),
		'show_admin_column'	=>	true,
		'show_in_rest'		=>	true
	);
	
	register_taxonomy( 'tutsplus_country', 'tutsplus_city', $args );
	
}
add_action( 'init', 'tutsplus_register_taxonomy' );

/*******************************************************************************
function tutsplus_add_country_terms() - creates terms for the country taxonomy
******************************************************************************/
function tutsplus_add_country_terms() {
	
	//the USA term
	
	$term = term_exists( 'USA', 'tutsplus_country' );
	if ( 0 == $term && null == $term ) {
		
		//register the term
		wp_insert_term(
			'USA',
			'tutsplus_country',
			array(
				'description' => 'Cities in the USA',
				'slug' => 'united-states'
			)
		);
	}
	
	//the UK term
	
	$term = term_exists( 'United Kingdom', 'tutsplus_country' );
	if ( 0 == $term && null == $term ) {
		
		//register the term
		wp_insert_term(
			'United Kingdom',
			'tutsplus_country',
			array(
				'description' => 'Cities in the UK',
				'slug' => 'united-kingdom'
			)
		);
	}
	
	
}
add_action( 'init', 'tutsplus_add_country_terms' );