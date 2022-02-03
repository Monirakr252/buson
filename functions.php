<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}
function buson_setup() {
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'Buson'),
    ));
}
add_action('after_setup_theme', 'buson_setup');

/* Enqueue Scripts & Styles*/
function buson_scripts() {
    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), _S_VERSION);
    wp_enqueue_style('owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'), _S_VERSION);
    wp_enqueue_style('slicknav', get_theme_file_uri('/assets/css/slicknav.css'), _S_VERSION);
    wp_enqueue_style('fontawesome', get_theme_file_uri('/assets/css/fontawesome-all.min.css'), _S_VERSION);
    wp_enqueue_style('main', get_theme_file_uri('/assets/css/main.css'), _S_VERSION);
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), _S_VERSION);
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), _S_VERSION);
    wp_enqueue_style('buson-style', get_stylesheet_uri(), _S_VERSION);

    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'buson_scripts');

require get_template_directory() . '/inc/inc-comments.php';
function buson_sidebar_in_footer() {
    register_sidebar( array(
        'name'          => __( 'Footer Menu Sidebar', 'textdomain' ),
        'id'            => 'footer-menu-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'buson_sidebar_in_footer' );

function buson_cpt() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'buson' ),
        'add_new_item'          => __( 'Add New slider', 'buson' ),
        'new_item'              => __( 'New slider', 'buson' ),
        'edit_item'             => __( 'Edit slider', 'buson' ),
        'view_item'             => __( 'View slider', 'buson' ),
        'all_items'             => __( 'All sliders', 'buson' ),
        'search_items'          => __( 'Search sliders', 'buson' ),
        'parent_item_colon'     => __( 'Parent sliders:', 'buson' ),
        'not_found'             => __( 'No sliders found.', 'buson' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'slider custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 15,
        'supports'           => array( 'title', 'thumbnail' ),
    );
      
    register_post_type( 'Sliders', $args );
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'service', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New service', 'buson' ),
        'new_item'              => __( 'New service', 'buson' ),
        'edit_item'             => __( 'Edit service', 'buson' ),
        'view_item'             => __( 'View service', 'buson' ),
        'all_items'             => __( 'All Services', 'buson' ),
        'search_items'          => __( 'Search Services', 'buson' ),
        'parent_item_colon'     => __( 'Parent Services:', 'buson' ),
        'not_found'             => __( 'No Services found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor','thumbnail' ),
    );
      
    register_post_type( 'Services', $args );
    $labels = array(
        'name'                  => _x( 'Our Services', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Our Service', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Our Services', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Our service', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New service', 'buson' ),
        'new_item'              => __( 'New service', 'buson' ),
        'edit_item'             => __( 'Edit service', 'buson' ),
        'view_item'             => __( 'View service', 'buson' ),
        'all_items'             => __( 'All Services', 'buson' ),
        'search_items'          => __( 'Search Services', 'buson' ),
        'parent_item_colon'     => __( 'Parent Services:', 'buson' ),
        'not_found'             => __( 'No Services found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'ourservice' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor','thumbnail' ),
    );
      
    register_post_type( 'OurServices', $args );
    $labels = array(
        'name'                  => _x( 'Requests', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Request', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Request', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Request', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Request', 'buson' ),
        'new_item'              => __( 'New Request', 'buson' ),
        'edit_item'             => __( 'Edit Request', 'buson' ),
        'view_item'             => __( 'View Request', 'buson' ),
        'all_items'             => __( 'All Request', 'buson' ),
        'search_items'          => __( 'Search Request', 'buson' ),
        'parent_item_colon'     => __( 'Parent Request:', 'buson' ),
        'not_found'             => __( 'No Requests found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Requests found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'request' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', ),
    );
      
    register_post_type( 'Requests', $args );

    $labels = array(
        'name'                  => _x( 'CompleteCases', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Complete case', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Complete case', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'complete case', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Request', 'buson' ),
        'new_item'              => __( 'New Request', 'buson' ),
        'edit_item'             => __( 'Edit Request', 'buson' ),
        'view_item'             => __( 'View Request', 'buson' ),
        'all_items'             => __( 'All Request', 'buson' ),
        'search_items'          => __( 'Search Request', 'buson' ),
        'parent_item_colon'     => __( 'Parent Request:', 'buson' ),
        'not_found'             => __( 'No Requests found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Requests found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'completecase' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );
      
    register_post_type( 'CompleteCases', $args );

    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Teams', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Team', 'buson' ),
        'new_item'              => __( 'New Team', 'buson' ),
        'edit_item'             => __( 'Edit Team', 'buson' ),
        'view_item'             => __( 'View Team', 'buson' ),
        'all_items'             => __( 'All Team', 'buson' ),
        'search_items'          => __( 'Search Team', 'buson' ),
        'parent_item_colon'     => __( 'Parent Team:', 'buson' ),
        'not_found'             => __( 'No Teams found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Teams found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'teams custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'thumbnail' ),
    );
      
    register_post_type( 'Teams', $args );

    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Testimonial', 'buson' ),
        'new_item'              => __( 'New Testimonial', 'buson' ),
        'edit_item'             => __( 'Edit Testimonial', 'buson' ),
        'view_item'             => __( 'View Testimonial', 'buson' ),
        'all_items'             => __( 'All Testimonial', 'buson' ),
        'search_items'          => __( 'Search Testimonial', 'buson' ),
        'parent_item_colon'     => __( 'Parent Testimonial:', 'buson' ),
        'not_found'             => __( 'No Testimonials found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'buson' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'teams custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
      
    register_post_type( 'Testimonials', $args );
}
add_action( 'init', 'buson_cpt' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('Theme General Settings', 'buson'),
		'menu_title'	=> __('Theme Settings', 'buson'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Header Settings', 'buson'),
		'menu_title'	=> __('Header', 'buson'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Footer Settings', 'buson'),
		'menu_title'	=> __('Footer', 'buson'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
?>