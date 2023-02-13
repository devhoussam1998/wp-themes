<?php
/**
 * --------------------------------------------------------------------------
 * This template part is used to display the header page.
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
?>

<!-- START .header-page -->
<header class="header-page border-bottom py-5">
    <div class="container py-5">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="display-5 text-capitalize fw-bold mb-4"><?php the_title(); ?></h1>
            <p class="fw-light mb-4">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
            </p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door me-1"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active"><?php the_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- END .header-page -->