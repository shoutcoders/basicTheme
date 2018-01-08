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






/* Adding Theme Option Panel - It will be made later 
add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', int $position = null )

function basic_themeoption_menu() {
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
  }
  
add_action( 'admin_menu', 'custom_settings_add_menu' );

*/
    