<?php

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

}

add_action('wp_enqueue_scripts', 'easyglobaltheme_script_enqueue');