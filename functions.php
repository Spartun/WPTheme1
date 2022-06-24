<?php
function firsttheme_theme_setup(){
    //Feature image support
    add_theme_support( 'post-thumbnails');

    //Adding menu function
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action( 'after_setup_theme', 'firsttheme_theme_setup');

//Excerpt length

function set_exerpt_length(){
    return 60;
}

add_filter( 'excerpt_length', 'set_exerpt_length'); 

//Widgets Location
function init_widgets($id){
    register_sidebar(array(
        'name'  => 'Sidebar',
        'id'    =>  'sidebar',
        'before_widget'  => '<div class = "side-widget">',
        'after_widget'  => '</div>',
        'before_title'   =>  '<h3>',
        'after_title'   =>  '</h3>'
        
    ));
}

add_action( 'widgets_init', 'init_widgets');
