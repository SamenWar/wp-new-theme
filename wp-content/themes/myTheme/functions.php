<?php 
    include(dirname(__FILE__).'/inc/carbon.php');
    include(dirname(__FILE__).'/inc/posts_ajax.php');
    add_action('wp_enqueue_scripts', function() {

    wp_enqueue_style('main', get_stylesheet_directory_uri().'/css/styles.css', array(), time());
    wp_enqueue_script('main', get_stylesheet_directory_uri().'/js/scripts.js', array(), time());
    wp_enqueue_script('main', get_stylesheet_directory_uri().'/js/ajax.js', array(), time());

    });
    //ajax
    add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
    add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');




    add_action('after_setup_theme', function() {

        add_theme_support('title-tag');

    });
    register_nav_menus(

        array(
            'side_menu'=>'меню в сайдбаре',
             'head_menu' => 'меню в шапке'

        )

    );

    /***
 * @param $atts
 * @return mixed
 * Adds a custom class to each menu item
 */
function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

/***
 * @param $classes
 * @return mixed
 * Add class to last item menu
 */
function add_li_custom_class($classes) {
    $classes[] = 'nav-item';
    return $classes;
};


add_filter('nav_menu_css_class', 'add_li_custom_class');
add_theme_support( 'post-thumbnails' );
add_image_size( 'imgblog', 300, 800 , true );
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme General Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));
    }
}