<?php if ( ! function_exists('brandtrust_post_types') ) {

// Register Custom Post Type
function brandtrust_post_types() {

	$labels = array(
		'name'                => _x( 'Team', 'Post Type General Name', 'brandtrust' ),
		'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'brandtrust' ),
		'menu_name'           => __( 'Team', 'brandtrust' ),
		'parent_item_colon'   => __( 'Parent Item:', 'brandtrust' ),
		'all_items'           => __( 'All Team Members', 'brandtrust' ),
		'view_item'           => __( 'View Team Member', 'brandtrust' ),
		'add_new_item'        => __( 'Add New Item', 'brandtrust' ),
		'add_new'             => __( 'Add New', 'brandtrust' ),
		'edit_item'           => __( 'Edit Item', 'brandtrust' ),
		'update_item'         => __( 'Update Item', 'brandtrust' ),
		'search_items'        => __( 'Search Item', 'brandtrust' ),
		'not_found'           => __( 'Not found', 'brandtrust' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'brandtrust' ),
	);
	$rewrite = array(
		'slug'                => 'about/team',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'team', 'brandtrust' ),
		'description'         => __( 'Team members', 'brandtrust' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'team', $args );

	$labels = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'brandtrust' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'brandtrust' ),
		'menu_name'           => __( 'Clients', 'brandtrust' ),
		'parent_item_colon'   => __( 'Parent Item:', 'brandtrust' ),
		'all_items'           => __( 'All Clients', 'brandtrust' ),
		'view_item'           => __( 'View Client', 'brandtrust' ),
		'add_new_item'        => __( 'Add New Client', 'brandtrust' ),
		'add_new'             => __( 'Add New Client', 'brandtrust' ),
		'edit_item'           => __( 'Edit Client', 'brandtrust' ),
		'update_item'         => __( 'Update Client', 'brandtrust' ),
		'search_items'        => __( 'Search Client', 'brandtrust' ),
		'not_found'           => __( 'Not found', 'brandtrust' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'brandtrust' ),
	);
	$rewrite = array(
		'slug'                => 'about/client',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'client', 'brandtrust' ),
		'description'         => __( 'Clientele', 'brandtrust' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'client', $args );

	$labels = array(
		'name'                => _x( 'Newsletters', 'Post Type General Name', 'brandtrust' ),
		'singular_name'       => _x( 'Newsletter', 'Post Type Singular Name', 'brandtrust' ),
		'menu_name'           => __( 'Newsletter', 'brandtrust' ),
		'parent_item_colon'   => __( 'Parent Item:', 'brandtrust' ),
		'all_items'           => __( 'All Newsletters', 'brandtrust' ),
		'view_item'           => __( 'View Item', 'brandtrust' ),
		'add_new_item'        => __( 'Add New Item', 'brandtrust' ),
		'add_new'             => __( 'Add New', 'brandtrust' ),
		'edit_item'           => __( 'Edit Item', 'brandtrust' ),
		'update_item'         => __( 'Update Item', 'brandtrust' ),
		'search_items'        => __( 'Search Item', 'brandtrust' ),
		'not_found'           => __( 'Not found', 'brandtrust' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'brandtrust' ),
	);
	$rewrite = array(
		'slug'                => 'newsletter',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'newsletter', 'brandtrust' ),
		'description'         => __( 'Team articles and documents', 'brandtrust' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'newsletter', $args );

	$labels = array(
		'name'                => _x( 'Podcasts', 'Post Type General Name', 'brandtrust' ),
		'singular_name'       => _x( 'Podcast', 'Post Type Singular Name', 'brandtrust' ),
		'menu_name'           => __( 'Podcast', 'brandtrust' ),
		'parent_item_colon'   => __( 'Parent Item:', 'brandtrust' ),
		'all_items'           => __( 'All Podcasts', 'brandtrust' ),
		'view_item'           => __( 'View Item', 'brandtrust' ),
		'add_new_item'        => __( 'Add New Item', 'brandtrust' ),
		'add_new'             => __( 'Add New', 'brandtrust' ),
		'edit_item'           => __( 'Edit Item', 'brandtrust' ),
		'update_item'         => __( 'Update Item', 'brandtrust' ),
		'search_items'        => __( 'Search Item', 'brandtrust' ),
		'not_found'           => __( 'Not found', 'brandtrust' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'brandtrust' ),
	);
	$rewrite = array(
		'slug'                => 'podcast',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'podcast', 'brandtrust' ),
		'description'         => __( 'Team articles and documents', 'brandtrust' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'podcast', $args );

}

// Hook into the 'init' action
add_action( 'init', 'brandtrust_post_types', 0 );

}