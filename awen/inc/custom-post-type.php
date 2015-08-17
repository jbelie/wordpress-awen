<?php

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Concerts', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Concert', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Concerts', 'text_domain' ),
		'parent_item_colon'   => __( 'Concert parent', 'text_domain' ),
		'all_items'           => __( 'Tous les concerts', 'text_domain' ),
		'view_item'           => __( 'Voir le concert', 'text_domain' ),
		'add_new_item'        => __( 'Ajouter un nouveau concert', 'text_domain' ),
		'add_new'             => __( 'Ajouter un nouveau', 'text_domain' ),
		'edit_item'           => __( 'Editer concert', 'text_domain' ),
		'update_item'         => __( 'Editer concert', 'text_domain' ),
		'search_items'        => __( 'Rechercher concert', 'text_domain' ),
		'not_found'           => __( 'Aucun concert trouvé', 'text_domain' ),
		'not_found_in_trash'  => __( 'Aucun concert trouvé dans la corbeille', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'concert', 'text_domain' ),
		'description'         => __( 'Concert', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array(  ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'concert', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

?>