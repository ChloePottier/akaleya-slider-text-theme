
<?php require 'hooks.php';
function wp_styles_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css');
    wp_enqueue_style('print', get_template_directory_uri() . '/assets/print.css', array(), '1.0', 'print');
    wp_enqueue_style('style', get_stylesheet_uri());
}
function slider_text_theme_setup(){
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 300,
        'flex-width'  => true,
        'flex-height'  => true,
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'custom-header',
        apply_filters(
            'slider_text_theme_custom_header_args',
            array(
                'default-image'    => get_parent_theme_file_uri('/images/gabarit-image-header.jpg'),
                'width'            => 2000,
                'height'           => 1200,
                'flex-height'      => false,
                'flex-width'       => false,
            )
        )
    );
    register_default_headers(
        array(
            'default-image' => array(
                'url'           => '%s/images/gabarit-image-header.jpg',
                'thumbnail_url' => '%s/images/gabarit-image-header.jpg',
                'description'   => __('Default Header Image', 'light-theme'),
            ),
        )
    );
    add_image_size('custom_logo_theme', 299, 80, array('left', 'center'));
    add_image_size('prestations', 530, 350, true);
}

// Generate inline scripts and styles and attach them to the appropriate script handles.
function my_inline_scripts()
{
    // header_image() prints the image - we want it as a string.
    $image = get_header_image();

    // Can be false - it might be better to set a fallback here...
    if (!$image) {
        return;
    }
    // First param should be the handle of your theme stylesheet.
    wp_add_inline_style('style', ".headerimg { background-image: url(\"{$image}\"); background-position: top center;
    background-size: cover; background-attachment:fixed;}");
}
add_action('wp_enqueue_scripts', 'my_inline_scripts');


function slider_text_theme_site_info()
{
    $name = get_bloginfo('name');
    $description = get_bloginfo('description');
    if ($name != '' or $description != '') :
        echo '<div class="bloginfo">';
        if ($name != '') :
            echo '<h1 class="name-h2">' . $name . '</h1>';
        endif;
        if ($description != '') :
            echo '<h2 class="description-h3 mb-0">' . $description . '</h2>';
        endif;
        echo '</div>';
    endif;
}
function wpm_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml';
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}
function register_nav()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'), //Nom du menu : 'Header' dans BO (pour sub-menu.js)
            'subfooter-menu' => __('Footer Menu'),
            'footer-menu' => __('Social Link Menu'), // Nom du menu : 'Réseaux sociaux' dans BO pour le style
        )
    );
}
function cpt_slider_init()
{
    $labels = array(
        'name'                  => _x('Slider', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Slide', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Sliders', 'Admin Menu text', 'textdomain'),
        'add_new'               => __('Ajouter un slide', 'textdomain'),
        'add_new_item'          => __('Ajouter un nouveau slide', 'textdomain'),
        'new_item'              => __('Nouveau slide', 'textdomain'),
        'edit_item'             => __('Editer le slide', 'textdomain'),
        'view_item'             => __('Voir le slide', 'textdomain'),
        'all_items'             => __('Tous les slides', 'textdomain'),
        'search_items'          => __('Rechercher des slides', 'textdomain'),
        'archives'              => _x('Archives des slides', 'The post type archive label used in nav menus', 'textdomain'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'slider'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-star-filled',
        'supports'           => array('title', 'editor'),
    );
    register_post_type('slider', $args);
}

if (function_exists('cpt_slider_init')) :
    function slider_add_style()
    {
        $themelink = get_template_directory_uri();
        wp_add_inline_style('style', '@media only screen and (min-width: 576px){.slider-next, .slider-prev{display:block!important; width: 22px; height: 39px; background: no-repeat; cursor: pointer!important;}');
        wp_add_inline_style('style', "@media only screen and (min-width: 576px){.slider-prev {background-image: url(\"{$themelink}/images/precedent.png\");float:left;}}");
        wp_add_inline_style('style', "@media only screen and (min-width: 576px){.slider-next {background-image: url(\"{$themelink}/images/suivant.png\");float:right;}}");
    }
    add_action('wp_enqueue_scripts', 'slider_add_style');
endif;

function cpt_prestations_init()
{
    $labels = array(
        'name'                  => _x('Prestations', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Prestation', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Prestations', 'Admin Menu text', 'textdomain'),
        'add_new'               => __('Ajouter une nouvelle prestation', 'textdomain'),
        'add_new_item'          => __('Ajouter une nouvelle prestation', 'textdomain'),
        'new_item'              => __('Nouvelle prestation', 'textdomain'),
        'edit_item'             => __('Editer la prestation', 'textdomain'),
        'view_item'             => __('Voir la prestation', 'textdomain'),
        'all_items'             => __('Toutes les prestations', 'textdomain'),
        'search_items'          => __('Rechercher une prestation', 'textdomain'),
        'archives'              => _x('Archives des prestations', 'The post type archive label used in nav menus', 'textdomain'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'prestation'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-info-outline',
        'supports'           => array('title', 'editor', 'category', 'thumbnail', 'excerpt'),
        'show_in_rest'      => true,
    );
    register_post_type('prestation', $args);
    register_taxonomy_for_object_type('category', 'prestation');
}
function prestations_loop_shortcode($atts){
    extract(shortcode_atts(array(
        'type' => 'prestation',
        'perpage' => 20
    ), $atts));
    $output = '<div class="clear"></div>';
    $output = '<div class="prestations-wrapper row">';
    $args = array(
        'post_type' => $type,
        'posts_per_page' => $perpage,
        'sort_column'   => 'menu_order'
    );
    $loop_tem = new  WP_Query($args);
    while ($loop_tem->have_posts()) : $loop_tem->the_post();
        $output .= '<div class="prestations-items col-12 col-md-6 col-lg-4 pb-3"><a href="'.get_permalink().'">' .
            get_the_post_thumbnail('', 'prestations', array( 'class' => 'responsive' )).
            '</a><h4 class="mt-3">' . get_the_title() . '</h4>' .
            '<p>' . get_the_excerpt() . '</p>' .
            
            '</div>';
    endwhile;
    wp_reset_query();
    $output .= '</div>';
    return $output;
}

