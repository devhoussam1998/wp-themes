<?php
/**
 * --------------------------------------------------------------------------
 * Enqueuing Styles and Scripts.
 * --------------------------------------------------------------------------
 *
 * @see https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package     Addison
 * @author      Unixcreativity
 * @copyright   Copyright (c) 2023, Unixcreativity
 * @link        https://themeforest.net/user/unixcreativity
 * @since       Addison v1.0.0
 *
 */

//
// Check if Constant 'ABSPATH' is defined.
//

if (!defined('ABSPATH')) {
    //
    // Exit if accessed directly.
    //

    exit();
}

if (!function_exists('addison_enqueue_styles_and_scripts')) {
    function addison_enqueue_styles_and_scripts()
    {
        wp_enqueue_style(
            'addison-app', 
            get_template_directory_uri() . 
            '/assets/dist/css/app.min.css', 
            [], 
            '1.0.0', 
            'all'
        );

        wp_enqueue_script(
            'addison-app', 
            get_template_directory_uri() . 
            '/assets/dist/js/app.min.js', 
            [], 
            '1.0.0', 
            true
        );
    }
    add_action('wp_enqueue_scripts', 'addison_enqueue_styles_and_scripts');
}
