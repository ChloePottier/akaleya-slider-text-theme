<?php

/** The header for our theme.
 * @package akaleya-slider-text-theme 
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class='m-0'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <?php get_template_part('google.php');
    wp_head(); ?>
</head>

<body id='top' <?php body_class(); ?>>
    <?php wp_body_open();
    if (is_front_page()) : ?>

        <header id='masthead' class='position-relative vh-100'>
        <?php else : ?>

            <header id='masthead' class='position-relative vh-30 '>
            <?php endif; ?>
            <div class='custom-header position-relative'>
                <section class='container-fluid position-absolute zindex-3' id='navbar'>
                    <div class='container' id='navbarTop'>
                        <div class='row'>
                            <div class='col-10 col-lg-4 d-flex flex-row py-2'>
                                <?php if (function_exists('the_custom_logo')) {
                                    the_custom_logo();
                                }
                                do_action('site_info'); ?>
                            </div>
                            <?php
                            get_template_part('template-parts/navigation/navigation', 'burger');
                            get_template_part('template-parts/navigation/navigation', 'top');
                            ?>
                        </div>
                    </div>
                </section>
                <?php get_template_part('template-parts/header/header', 'slider');  ?>
                <div class="custom-header-media position-relative zindex-1">
                    <?php the_custom_header_markup(); ?>
                </div>