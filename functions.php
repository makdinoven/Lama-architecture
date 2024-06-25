<?php


function assets()
{
    // CSS
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.css', '', '54377919');

    // FONTS
    wp_enqueue_style('helveticafont', get_template_directory_uri() . '/assets/fonts/HelveticaNeue/stylesheet.css');
    // JS
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '20151215', true);
}


add_action('wp_enqueue_scripts', 'assets');
