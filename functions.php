<?php
// Calling Resources
function callResources(){
    //CSS
    wp_enqueue_style('css_bootstrap', get_template_directory_uri().'/css/bootstrap.css', null, '1.0');
    wp_enqueue_style('css_vendor_linericon', get_template_directory_uri().'/vendors/linericon/style.css', null, '1.0');
    wp_enqueue_style('css_font_awesome', get_template_directory_uri().'/css/font-awesome.min.css', null, '1.0');
    wp_enqueue_style('css_magnific_popup', get_template_directory_uri().'/css/magnific-popup.css', null, '1.0');
    wp_enqueue_style('css_vendor_owl_carousel', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css', null, '1.0');
    wp_enqueue_style('css_vendor_nice_select', get_template_directory_uri().'/vendors/nice-select/css/nice-select.css', null, '1.0');
    wp_enqueue_style('css_main_style', get_template_directory_uri().'/css/style.css', null, '1.0');
    wp_enqueue_style('css_theme_style', get_stylesheet_uri(), null, microtime());

    //Javascript
    wp_enqueue_script('js_main_jquery', get_template_directory_uri().'/js/jquery-3.2.1.min.js', '', '3.2.1');
    wp_enqueue_script('js_popper', get_template_directory_uri().'/js/popper.js', '', '1.0', true);
    wp_enqueue_script('js_bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', '', '1.0', true);
    wp_enqueue_script('js_stellar', get_template_directory_uri().'/js/stellar.js', '', '1.0', true);
    wp_enqueue_script('js_jquery_magnific_popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', 'js_main_jquery', '1.0', true);
    wp_enqueue_script('js_vendor_nice_select', get_template_directory_uri().'/vendors/nice-select/js/jquery.nice-select.min.js', 'js_main_jquery', '1.0', true);
    wp_enqueue_script('js_vendor_owl_carousel', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js', '', '1.0', true);
    wp_enqueue_script('js_owl_carousel_thumb', get_template_directory_uri().'/js/owl-carousel-thumb.min.js', '', '1.0', true);
    wp_enqueue_script('js_jquery_ajaxchimp', get_template_directory_uri().'/js/jquery.ajaxchimp.min.js', 'js_main_jquery', '1.0', true);
    wp_enqueue_script('js_mail_script', get_template_directory_uri().'/js/mail-script.js', '', '1.0', true);
    // wp_enqueue_script('js_google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE', '', 1.0, true);
    wp_enqueue_script('js_gmaps', get_template_directory_uri().'/js/gmaps.min.js', '', '1.0', true);
    wp_enqueue_script('js_theme', get_template_directory_uri().'/js/theme.js', '', '1.0', true);
    wp_enqueue_script('js_myscript', get_template_directory_uri().'/js/myscript.js', '', microtime(), true);
}
add_action('wp_enqueue_scripts', 'callResources');

// After Setup Theme
function theme_support(){
    // Menu
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));

    // Post Thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support');

// Widget Register
function taxa_widgets_reg(){
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id'   => 'right_sidebar',
        'before_widget' => '<aside class="single_sidebar_widget search_widget popular_post_widget ads_widget post_category_widget newsletter_widget">',
        'after_widget'  => '</aside><div class="br"></div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'  => 'Footer Left',
        'id'    => 'footer_left',
        'before_widget' => '<div class="single-footer-widget single_sidebar_widget search_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="footer_title">',
        'after_title'   => '</h5>'
    ));

    register_sidebar(array(
        'name'  => 'Footer Left Middle',
        'id'    => 'footer_left_middle',
        'before_widget' => '<div class="single-footer-widget single_sidebar_widget search_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="footer_title">',
        'after_title'   => '</h5>'
    ));

    register_sidebar(array(
        'name'  => 'Footer Right Middle',
        'id'    => 'footer_right_middle',
        'before_widget' => '<div class="single-footer-widget single_sidebar_widget search_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="footer_title">',
        'after_title'   => '</h5>'
    ));

    register_sidebar(array(
        'name'  => 'Footer Right',
        'id'    => 'footer_right',
        'before_widget' => '<div class="single-footer-widget single_sidebar_widget search_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="footer_title">',
        'after_title'   => '</h5>'
    ));
}
add_action('widgets_init', 'taxa_widgets_reg');

// Post View Count
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Register Custom Navigation Walker
require_once('inc/class-wp-bootstrap-navwalker.php');

// Register Custom Comment Walker
require_once('inc/comment-navwalker.php');

// CMB2 Custom Fields
require_once('inc/cmb2-custom-fields.php');

// Redux Framework
require_once('inc/redux-framework/redux-framework.php');
require_once('inc/taxa-theme-options.php');

// Custom Post
function custom_post_types(){
    // Feature Post
    register_post_type('feature', array(
        'labels'    => array(
            'name'          => 'Features',
            'all_items'     => 'All Features',
            'add_new_item'  => 'Add New Feature',
            'edit_item'     => 'Edit Feature',
            'singular_name' => 'Feature'
        ),
        'public'    => true,
        'supports'  => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-megaphone',
        'has_archive' => true,
        'rewrite'   => array('slug' => 'features')
    ));

    // Package Post
    register_post_type('package', array(
        'labels'    => array(
            'name'          => 'Packages',
            'all_items'     => 'All Packages',
            'add_new_item'  => 'Add New Package',
            'edit_item'     => 'Edit Package',
            'singular_name' => 'Package'
        ),
        'public'    => true,
        'supports'  => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-tickets-alt',
        'has_archive' => true,
        'rewrite'   => array('slug' => 'packages')
    ));

    // Popular Place Post
    register_post_type('popular-place', array(
        'labels'    => array(
            'name'          => 'Popular Places',
            'all_items'     => 'All Popular Places',
            'add_new_item'  => 'Add New Popular Place',
            'edit_item'     => 'Edit Popular Place',
            'singular_name' => 'Popular Place'
        ),
        'public'    => true,
        'supports'  => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-location-alt',
        'has_archive' => true,
        'rewrite'   => array('slug' => 'popular-places')
    ));

    // Team Member Post
    register_post_type('team-member', array(
        'labels'    => array(
            'name'          => 'Team Members',
            'all_items'     => 'All Team Members',
            'add_new_item'  => 'Add New Team Member',
            'edit_item'     => 'Edit Team Member',
            'singular_name' => 'Team Member'
        ),
        'public'    => true,
        'supports'  => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
        'has_archive' => true,
        'rewrite'   => array('slug' => 'team-members')
    ));

    // Testimonial Post
    register_post_type('testimonial', array(
        'labels'    => array(
            'name'          => 'Testimonials',
            'all_items'     => 'All Testimonials',
            'add_new_item'  => 'Add New Testimonial',
            'edit_item'     => 'Edit Testimonial',
            'singular_name' => 'Testimonial'
        ),
        'public'    => true,
        'supports'  => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
        'has_archive' => true,
        'rewrite'   => array('slug' => 'testimonials')
    ));
}
add_action('init', 'custom_post_types');

// Title Placeholder Text Change
function change_default_title( $title ){
    $screen = get_current_screen();

    if  ( 'feature' == $screen->post_type ) {
        $title = 'Enter Feature Title';
    }
    elseif ( 'package' == $screen->post_type ) {
        $title = 'Enter Package Title';
    }
    elseif ( 'popular-place' == $screen->post_type ) {
        $title = 'Enter Popular Place Name';
    }
    elseif ( 'team-member' == $screen->post_type ) {
        $title = 'Enter Team Member Name';
    }
    elseif ( 'testimonial' == $screen->post_type ) {
        $title = 'Enter Testimonial Provider Name';
    }

    return $title;
}
add_filter( 'enter_title_here', 'change_default_title' );