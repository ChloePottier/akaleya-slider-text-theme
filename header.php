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
    <meta name='theme-color' media='(prefers-color-scheme: light)' content='white'>
    <?php get_template_part('google.php');
    wp_head(); ?>
</head>

<body id='top' <?php body_class(); ?>>
    <?php wp_body_open();
    if (is_front_page()) : ?>
        <header id='masthead' class='position-relative vh-100 headerimg'>
    <?php else : ?>
        <header id='masthead' class='position-relative vh-30 headerimg'>
    <?php endif; ?>
            <div class='custom-header'>
                <div class='container-fluid position-absolute zindex-3' >
                    <div class='container text-shadow' id='navbarTop'>
                    <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>

                    </div>
                </div>
            </div>
        </header>
        <div class='container-fluid nav-top bg-white dis-none  position-absolute zindex-3' id='navbar'>
                <div class='container'>
                <?php  get_template_part('template-parts/navigation/navigation', 'top'); ?>
                </div>
            </div>
    

    
