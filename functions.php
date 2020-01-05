<?php

function load_scripts(){
    wp_enqueue_style( 'template', get_template_directory_uri(  ).'/css/template.css', array(), '1.0', 'all');
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', array(), '4.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts','load_scripts');

register_nav_menus( array(
    'main_menu' =>  'Main Menu',
    'social_menu' =>'Social Menu',
) );