<?php
/**
 * --------------------------------------------------------------------------
 * Theme Setup.
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

//
// Check if Function 'addison_setup_theme' exists.
//

if (!function_exists('addison_setup_theme')) {
    /**
     * --------------------------------------------------------------------------
     * Sets up theme defaults and registers support for various WordPress
     * features.
     * --------------------------------------------------------------------------
     *
     * It is important to set up these functions before the init hook so
     * that none of these features are lost.
     *
     * @since Addison v1.0.0
     *
     */

    function addison_theme_setup()
    {
        /**
         * --------------------------------------------------------------------------
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         * --------------------------------------------------------------------------
         *
         * @see https://developer.wordpress.org/reference/functions/load_theme_textdomain/
         *
         */

        load_theme_textdomain(ADDISON_NAME, ADDISON_DIR . 'languages');

        /**
         * --------------------------------------------------------------------------
         * This feature adds RSS feed links to the document head.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Automatic_Feed_Links
         *
         */

        add_theme_support('automatic-feed-links');

        /**
         * --------------------------------------------------------------------------
         * This feature allows WordPress to handle the document title automatically.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Title_Tag
         *
         */

        add_theme_support('title-tag');

        /**
         * --------------------------------------------------------------------------
         * This feature enables the use of featured images on posts and pages.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Post_Thumbnails
         *
         */

        add_theme_support('post-thumbnails');

        /**
         * --------------------------------------------------------------------------
         * This feature enables the use of post formats on the website.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Post_Formats
         *
         */

        add_theme_support('post-formats', [
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat'
        ]);

        /**
         * --------------------------------------------------------------------------
         * This feature enables the use of HTML5 markup for the search form,
         * comment form, comment list, gallery, and caption.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Theme_Markup
         *
         */

        add_theme_support('html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets'
        ]);

        /**
         * --------------------------------------------------------------------------
         * This feature enables the use of a custom logo on the website.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Theme_Logo
         *
         */

        $logo_width = 180;
        $logo_height = 60;

        add_theme_support('custom-logo', [
            'height' => $logo_height,
            'width' => $logo_width,
            'flex-width' => true,
            'flex-height' => true,
            'unlink-homepage-logo' => true
        ]);

        /**
         * --------------------------------------------------------------------------
         * This feature enables the use of a custom header on the website.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Custom_Headers
         *
         */

        add_theme_support('custom-header');

        /**
         * --------------------------------------------------------------------------
         * This feature enables the use of a custom background on the website.
         * --------------------------------------------------------------------------
         *
         * @see https://codex.wordpress.org/Custom_Backgrounds
         *
         */

        add_theme_support('custom-background');

        /**
         * --------------------------------------------------------------------------
         * Add support for Selective Refresh for Widgets being managed within
         * the Customizer.
         * --------------------------------------------------------------------------
         *
         * @see https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
         *
         */

        add_theme_support('customize-selective-refresh-widgets');

        /**
         * --------------------------------------------------------------------------
         * Registers navigation menu locations for a theme.
         * --------------------------------------------------------------------------
         *
         * @see https://developer.wordpress.org/reference/functions/register_nav_menus/
         *
         */

        register_nav_menus([
            'primary' => esc_html__('Header Menu', ADDISON_NAME),
            'secondary' => esc_html__('Footer Menu', ADDISON_NAME)
        ]);
    }
    add_action('after_setup_theme', 'addison_setup_theme');
}

//
// Check if Function 'addison_setup_content_width' exists.
//

if (!function_exists('addison_setup_content_width')) {
    /**
     * --------------------------------------------------------------------------
     * Set the content width in pixels, based on the theme's design and stylesheet.
     * Priority 0 to make it available to lower priority callbacks.
     * --------------------------------------------------------------------------
     *
     * @see https://codex.wordpress.org/Content_Width
     *
     * @since Addison v1.0.0
     * @global int $content_width Content width.
     * @return void
     *
     */

    function addison_setup_content_width()
    {
        $GLOBALS['content_width'] = apply_filters('content_width', 750);
    }
    add_action('after_setup_theme', 'addison_setup_content_width', 0);
}

// Check if Function 'addison_register_sidebars' exists.
if (!function_exists('addison_register_sidebars')) {
    /**
     * --------------------------------------------------------------------------
     * Registering a Sidebar.
     * --------------------------------------------------------------------------
     *
     * @see https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     *
     */

    function addison_register_sidebars()
    {
        //
        // Register the 'primary' sidebar.
        //

        register_sidebar([
            'name' => esc_html__('Primary Sidebar', THEME_NAME),
            'id' => 'sidebar-1',
            'description' => esc_html__(
                'A short description of the sidebar.',
                THEME_NAME
            ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ]);
    }
    add_action('widgets_init', 'addison_register_sidebars');
}
