<?php

namespace Never5\WPCarManager;

class Taxonomies {

	const FEATURES = 'wpcm_features';
	const MAKE_MODEL = 'wpcm_make_model';

	/**
	 * Register taxonomy: features
	 */
	public static function register_features() {
		$labels = array(
			'name'                       => _x( 'Features', 'Taxonomy General Name', 'wp-car-manager' ),
			'singular_name'              => _x( 'Feature', 'Taxonomy Singular Name', 'wp-car-manager' ),
			'menu_name'                  => __( 'Features', 'wp-car-manager' ),
			'all_items'                  => __( 'All Features', 'wp-car-manager' ),
			'parent_item'                => __( 'Parent Feature', 'wp-car-manager' ),
			'parent_item_colon'          => __( 'Parent Feature:', 'wp-car-manager' ),
			'new_item_name'              => __( 'New Feature Name', 'wp-car-manager' ),
			'add_new_item'               => __( 'Add New Feature', 'wp-car-manager' ),
			'edit_item'                  => __( 'Edit Feature', 'wp-car-manager' ),
			'update_item'                => __( 'Update Feature', 'wp-car-manager' ),
			'view_item'                  => __( 'View Feature', 'wp-car-manager' ),
			'separate_items_with_commas' => __( 'Separate features with commas', 'wp-car-manager' ),
			'add_or_remove_items'        => __( 'Add or remove features', 'wp-car-manager' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-car-manager' ),
			'popular_items'              => __( 'Popular features', 'wp-car-manager' ),
			'search_items'               => __( 'Search features', 'wp-car-manager' ),
			'not_found'                  => __( 'Not Found', 'wp-car-manager' ),
		);
		$rewrite = array(
			'slug'                       => 'feature',
			'with_front'                 => true,
			'hierarchical'               => false,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( self::FEATURES, array( 'wpcm_vehicle' ), $args );
	}

	/**
	 * Register taxonomy: model_make
	 */
	public static function register_model_make() {
		$labels = array(
			'name'                       => _x( 'Makes', 'Taxonomy General Name', 'wp-car-manager' ),
			'singular_name'              => _x( 'Make', 'Taxonomy Singular Name', 'wp-car-manager' ),
			'menu_name'                  => __( 'Makes & Models', 'wp-car-manager' ),
			'all_items'                  => __( 'All Makes', 'wp-car-manager' ),
			'parent_item'                => __( 'Parent Make', 'wp-car-manager' ),
			'parent_item_colon'          => __( 'Parent Make:', 'wp-car-manager' ),
			'new_item_name'              => __( 'New Make Name', 'wp-car-manager' ),
			'add_new_item'               => __( 'Add New Make', 'wp-car-manager' ),
			'edit_item'                  => __( 'Edit Make', 'wp-car-manager' ),
			'update_item'                => __( 'Update Make', 'wp-car-manager' ),
			'view_item'                  => __( 'View Make', 'wp-car-manager' ),
			'separate_items_with_commas' => __( 'Separate makes with commas', 'wp-car-manager' ),
			'add_or_remove_items'        => __( 'Add or remove makes', 'wp-car-manager' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-car-manager' ),
			'popular_items'              => __( 'Popular Makes', 'wp-car-manager' ),
			'search_items'               => __( 'Search Makes', 'wp-car-manager' ),
			'not_found'                  => __( 'Not Found', 'wp-car-manager' ),
		);
		$rewrite = array(
			'slug'                       => 'make',
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => false,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => false,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( self::MAKE_MODEL, array( 'wpcm_vehicle' ), $args );
	}

}