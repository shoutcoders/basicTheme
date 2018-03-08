<?php
/* Including Styles */

function basic_addingstyle(){
    wp_enqueue_style('Bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css','','3.3.7','');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css', '','','');
    wp_enqueue_style('OpenSans','https://fonts.googleapis.com/css?family=Open+Sans', '','','');   
}

add_action('wp_enqueue_scripts','basic_addingstyle');

//scripts calling in footer, not in header

function basic_addingscripts() {
    wp_register_script('jQuery','https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js','','3.2.0', true);
    wp_register_script('BootstrapJS','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js','','3.3.7', true); 
    wp_enqueue_script('jQuery');
    wp_enqueue_script('BootstrapJS');
}
add_action('wp_enqueue_scripts','basic_addingscripts');

/* Adding Menu Support */
// Register custom navigation walker

//require_once('wp_bootstrap_navwalker.php');
function basic_themeMenus(){
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        ));
}
add_action('init','basic_themeMenus');


//Defining Excerpt 

function basic_excerpt_length($length) {
    return 25;
    }

add_filter('excerpt_length', 'basic_excerpt_length');


/*** Adding Different THEME SUPPORTS  ***/

//Adding Title Change Support
add_theme_support( 'title-tag' );

//Featured Image Support
add_theme_support( 'post-thumbnails' ); 


//Footer Widget 
function basic_footerwidgets(){
    register_sidebar( array(
        'name' => 'Footer 1',
        'id' => 'footer-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">', 
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => 'Footer 2',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => 'Footer 3',
        'id' => 'footer-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => 'Footer Copyright',
        'id' => 'footer-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init','basic_footerwidgets' );


// New Post Type - register_post_type( 'Post-Type ', $arguments) [$args in array]

function basic_create_post_type() {
    $singular = 'Truck Listing';
	$plural = 'Truck Listings';
	$slug = str_replace( ' ', '_', strtolower( $singular ) );
	$labels = array(
		'name' 			=> $plural,
		'singular_name' 	=> $singular,
		'add_new' 		=> 'Add New',
		'add_new_item'  	=> 'Add New ' . $singular,
		'edit'		        => 'Edit',
		'edit_item'	        => 'Edit ' . $singular,
		'new_item'	        => 'New ' . $singular,
		'view' 			=> 'View ' . $singular,
		'view_item' 		=> 'View ' . $singular,
		'search_term'   	=> 'Search ' . $plural,
		'parent' 		=> 'Parent ' . $singular,
		'not_found' 		=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
		);
	$args = array(
		'labels'              => $labels,
	        'public'              => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'show_in_nav_menus'   => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'menu_icon'           => 'dashicons-businessman',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => true,
	        'query_var'           => true,
	        'capability_type'     => 'post',
	        'map_meta_cap'        => true,
	        // 'capabilities' => array(),
	        'rewrite'             => array( 
	        	'slug' => $slug,
	        	'with_front' => true,
	        	'pages' => true,
	        	'feeds' => true,
	        ),
	        'supports'            => array( 
	        	'title', 
	        	'editor', 
	        	'author', 
                'custom-fields',
                'thumbnail' 
	        )
	);
	register_post_type( $slug, $args );

  }
  add_action( 'init', 'basic_create_post_type' );


  // Adding CUSTOM taxomonies To Group Content as per our need
  // 'init' hook is use to hook up the function when theme is activated

function basic_truck_taxonomies(){

    register_post_type( $post_type, $args );
}
add_action('init', 'basic_truck_taxonomies');




/* Adding Theme Option Panel - It will be made later 
add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', int $position = null )

function basic_themeoption_menu() {
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
  }
  
add_action( 'admin_menu', 'custom_settings_add_menu' );

*/
    