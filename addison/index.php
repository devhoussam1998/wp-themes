<?php
/**
 * --------------------------------------------------------------------------
 * This template file is the fallback template used by WordPress to display
 * content for pages that don't have a more specific template file.
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
get_header(); ?>

<?php if (
    is_home() &&
    !is_front_page() &&
    !empty(single_post_title('', false))
): ?>
	<header>
		<h1><?php single_post_title(); ?></h1>
	</header>
<?php endif; ?>

<?php
if (have_posts()) {
    //
    // Load posts loop.
    //

    while (have_posts()) {
        the_post();

        get_template_part(
            'template-parts/content/content',
            get_theme_mod('display_excerpt_or_full_post', 'excerpt')
        );
    }

    //
    // Previous/next page navigation.
    //

    the_posts_navigation();
} else {
    //
    // If no content, include the "No posts found" template.
    //

    get_template_part('template-parts/content/content-none');
}

get_sidebar();
get_footer();