<?php
/**
 * --------------------------------------------------------------------------
 * This template file is used to define and add functionality to this theme.
 * --------------------------------------------------------------------------
 *
 * @see https://developer.wordpress.org/themes/basics/theme-functions/
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
// Define constants.
//

define('ADDISON_NAME', 'addison');
define('ADDISON_VERSION', '1.0.0');
define('ADDISON_MINIMUM_WP_VERSION', '5.9');
define('ADDISON_MINIMUM_PHP_VERSION', '5.6');
define('ADDISON_INC_DIR', get_template_directory() . '/inc');
define('ADDISON_CLASSES_DIR', get_template_directory() . '/classes');

/**
 * --------------------------------------------------------------------------
 * Function to load files from a directory.
 * --------------------------------------------------------------------------
 *
 * @param string $dir - The directory path to load files from.
 * @param array $files - An array of file paths to be loaded.
 *
 */

function addison_load_files($dir, $files)
{
    //
    // Bail if requirements are not met.
    //

    if (
        version_compare(
            $GLOBALS['wp_version'],
            ADDISON_MINIMUM_WP_VERSION,
            '<'
        ) ||
        version_compare(phpversion(), ADDISON_MINIMUM_PHP_VERSION, '<')
    ) {
        $files[] = '/addison-back-compat.php';
    }

    //
    // Loop through the $files array.
    //

    foreach ($files as $file) {
        //
        // Construct the file path by combining the '$dir' and '$file'.
        //

        $file_path = $dir . $file;
        //
        // Check if the file exists at the constructed path.
        //

        if (file_exists($file_path)) {
            //
            // Include the file using require_once.
            //

            require_once $file_path;
        }
    }
}

//
// Load files from the 'inc' directory.
//

addison_load_files(ADDISON_INC_DIR, ['/addison-enqueue.php']);

//
// Load files from the 'classes' directory.
//

addison_load_files(ADDISON_CLASSES_DIR, ['/class-addison-wp-bootstrap-navwalker.php']);
