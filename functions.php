<?php

/**
 * Function and definitions for Themeplate
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Themeplate
 * @since Themeplate 1.0
 */


/**
 * Enqueue style and script files.
 */

function themeplate_enqueue_assets()
{
    // Register and enqueue the style.css file from the assets/build/css folder
    wp_enqueue_style('themeplate-main-style', get_template_directory_uri() . '/assets/build/css/base.css');

    // Register and enqueue the style.css file from the theme root, after the previous one
    wp_enqueue_style('themeplate-style', get_stylesheet_uri(), array('themeplate-main-style'));

    // Register and enqueue the script.js file from the assets/build/js folder
    wp_enqueue_script('themeplate-main-script', get_template_directory_uri() . '/assets/build/js/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'themeplate_enqueue_assets');
