<?php

require_once('wp-bootstrap-navwalker.php');

/*
  ====================================
  Include scripts
  ====================================
*/
function easyglobaltheme_script_enqueue(){

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/easyglobaltheme.css', array(), '1.0.0', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', '3.3.7');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/easyglobaltheme.js', '1.0.0', true);
    wp_enqueue_script('dropdownjs', get_template_directory_uri() . '/js/bootstrap/dropdown.js', '2.0.4', true);

}

add_action('wp_enqueue_scripts', 'easyglobaltheme_script_enqueue');

/*
  ====================================
  Active menus
  ====================================
*/

function easyglobaltheme_theme_setup(){

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');

}

add_action('init', 'easyglobaltheme_theme_setup');