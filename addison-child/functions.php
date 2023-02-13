<?php
/**
 * --------------------------------------------------------------------------
 * This template file is used to define and add functionality to this theme.
 * --------------------------------------------------------------------------
 *
 * @see https://developer.wordpress.org/themes/advanced-topics/child-themes/#using-functions-php
 *
 * @package     Addison Child
 * @author      Unixcreativity
 * @copyright   Copyright (c) 2023, Unixcreativity
 * @link        https://themeforest.net/user/unixcreativity
 * @since       Addison Child v1.0.0
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

//
// Check if Function 'addison_child_enqueue_styles_and_scripts' exists.
//

if (!function_exists('addison_child_enqueue_styles_and_scripts')) {
    //
    // Load child theme's stylesheets and scripts sources.
    //

    function addison_child_enqueue_styles_and_scripts()
    {
        //
        // Enqueue Stylesheets.
        //

        wp_enqueue_style(
            'addison-style',
            get_template_directory_uri() . '/style.css',
            array(),
            wp_get_theme()
                ->parent()
                ->get('Version')
        );

        wp_enqueue_style(
            'addison-child-style',
            get_stylesheet_uri(),
            array('addison-style'),
            wp_get_theme()->get('Version')
        );
    }
    add_action(
        'wp_enqueue_scripts',
        'addison_child_enqueue_styles_and_scripts'
    );
}
