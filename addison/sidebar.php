<?php
/**
 * --------------------------------------------------------------------------
 * This template file controls the layout and design of the sidebar on a 
 * website.
 * --------------------------------------------------------------------------
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package     Addison
 * @author      Unixcreativity
 * @copyright   Copyright (c) 2023, Unixcreativity
 * @link        https://themeforest.net/user/unixcreativity
 * @since       Addison v1.0.0
 *
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
} ?>

<!-- START #sidebar -->
<aside id="sidebar">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside>
<!-- END #sidebar -->