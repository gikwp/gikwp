<?php

namespace App;

class Services {
	
	public function __construct() {
		add_action( 'init', [ $this, 'register_services' ] );
		add_action( 'acf/init', [ $this, 'register_services_page_options' ] );
	}
	
	/**
	 * Register custom post type
	 *
	 * @return void
	 */
	public function register_services() {
		$labels = [
			'name'                  => __( 'Services', 'wpkit' ),
			'singular_name'         => __( 'Service', 'wpkit' ),
			'menu_name'             => __( 'Services', 'wpkit' ),
			'name_admin_bar'        => __( 'Services', 'wpkit' ),
			'archives'              => __( 'Services Archive', 'wpkit' ),
			'attributes'            => __( 'Service Attributes', 'wpkit' ),
			'parent_item_colon'     => __( 'Service Post', 'wpkit' ),
			'all_items'             => __( 'All Services', 'wpkit' ),
			'add_new_item'          => __( 'Add New Service', 'wpkit' ),
			'add_new'               => __( 'Add New', 'wpkit' ),
			'new_item'              => __( 'New Service', 'wpkit' ),
			'edit_item'             => __( 'Edit Service', 'wpkit' ),
			'update_item'           => __( 'Update Service', 'wpkit' ),
			'view_item'             => __( 'View Service', 'wpkit' ),
			'view_items'            => __( 'View Services', 'wpkit' ),
			'search_items'          => __( 'Search Services', 'wpkit' ),
			'not_found'             => __( 'Not found', 'wpkit' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'wpkit' ),
			'featured_image'        => __( 'Featured image', 'wpkit' ),
			'set_featured_image'    => __( 'Set featured image', 'wpkit' ),
			'remove_featured_image' => __( 'Remove featured image', 'wpkit' ),
			'use_featured_image'    => __( 'Use as featured image', 'wpkit' ),
			'insert_into_item'      => __( 'Insert into', 'wpkit' ),
			'uploaded_to_this_item' => __( 'Uploaded to this member', 'wpkit' ),
			'items_list'            => __( 'Services list', 'wpkit' ),
			'items_list_navigation' => __( 'Services list navigation', 'wpkit' ),
			'filter_items_list'     => __( 'Services Post list', 'wpkit' ),
		];
		
		$args = [
			'label'               => __( 'Services', 'wpkit' ),
			'description'         => __( 'Services and Services', 'wpkit' ),
			'labels'              => $labels,
			// 'title','editor','author','thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments','revisions','page-attributes','post-formats'
			'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail' ],
			'hierarchical'        => false,
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-businessperson',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => false,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => null,
		];
		
		register_post_type( 'services', $args );
	}
	
	/**
	 * Register ACF Options Page
	 *
	 * @return array|false
	 */
	public function register_services_page_options() {
		return acf_add_options_sub_page( [
			'page_title'  => __( 'Services Page Settings', 'wpkit' ),
			'menu_title'  => __( 'Page Settings', 'wpkit' ),
			'slug'        => 'settings',
			'capability'  => 'edit_posts',
			'parent_slug' => 'edit.php?post_type=services',
		] );
	}
}