<?php
/**
 * --------------------------------------------------------------------------
 * This template file controls the layout and design of the comments section 
 * on a website.
 * --------------------------------------------------------------------------
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     Addison
 * @author      Unixcreativity
 * @copyright   Copyright (c) 2023, Unixcreativity
 * @link        https://themeforest.net/user/unixcreativity
 * @since       Addison v1.0.0
 *
 */

//
// If the current post is protected by a password and the visitor has not yet entered the password, return early without loading the comments.
//

if (post_password_required()) {
    return;
} ?>

<!-- START #comments -->
<div id="comments"></div>
<!-- END #comments -->