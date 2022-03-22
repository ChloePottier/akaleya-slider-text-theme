<?php 
add_action('after_setup_theme','slider_text_theme_setup');
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_action('init', 'register_nav');
add_action( 'init', 'cpt_slider_init' );
add_action('init', 'cpt_prestations_init');
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function() {
   while (@ob_end_flush());
});

add_action('site_info', 'slider_text_theme_site_info');
