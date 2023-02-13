<?php
/**
 * --------------------------------------------------------------------------
 * This template file is used to display content for single blog post.
 * --------------------------------------------------------------------------
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package     Addison
 * @author      Unixcreativity
 * @copyright   Copyright (c) 2023, Unixcreativity
 * @link        https://themeforest.net/user/unixcreativity
 * @since       Addison v1.0.0
 *
 */

get_header();

//
// Start the Loop.
//

while (have_posts()):
    the_post();
    get_template_part('template-parts/content/content-single');

    the_post_navigation(array(
        'prev_text' =>
            '<span class="nav-subtitle">' .
            esc_html__('Previous:', ADDISON_NAME) .
            '</span> <span class="nav-title">%title</span>',
        'next_text' =>
            '<span class="nav-subtitle">' .
            esc_html__('Next:', ADDISON_NAME) .
            '</span> <span class="nav-title">%title</span>'
    ));

    //
    // If comments are open or we have at least one comment, load up the comment template.
    //

    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
endwhile;

//
// End of the loop.
//

get_sidebar();
get_footer();
