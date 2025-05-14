<?php

if(! function_exists('band_digital_setup')){
    function band_digital_setup(){
        add_theme_support('custom-logo', [
            'height'      => 50,
            'width'       => 130,
        ]);
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'band_digital_setup');
}


add_action( 'wp_enqueue_scripts', 'band_digital_scripts' );

function band_digital_scripts() {
    wp_enqueue_style( 'main', get_stylesheet_uri() );

    //bootstrap
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', array('main') );

    //Icon Font
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/fonts/flaticon/flaticon.css', array('main') );

    //fontawesome
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/all.css', array('main') );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/icofont.css', array('main') );

    wp_enqueue_style( 'band-digital', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap') );


    //переподключаем jq
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', );

    //contact form
    wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/bootstrap/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true );

    //Counter up
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', true );

    //wow animation
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );

}



// регистрируем несколько меню
function band_digital_menus(){
    //собираем несколько областей меню и регистрируем их
    $locations = array(
        'header' => __('Header', 'band-digital'),
        'footer' => __('Footer', 'band-digital'),
    );
    //регистрируем их
    register_nav_menus($locations);
}
add_action('init', 'band_digital_menus');

class bootstrap_4_walker_nav_menu extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = null ) { // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ){ // li a span
        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';

        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}