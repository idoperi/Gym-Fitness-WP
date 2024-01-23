<?php

require get_template_directory() . '/inc/queries.php';

function gym_fitness_menus()
{
    register_nav_menus(
        array(
            "main-menu" => 'Main Menu',
        )
    );
}

add_action('init', 'gym_fitness_menus');


// Adds Stylesheets and JS Files
function gym_fitness_scripts()
{
    /* Load CSS files */
    wp_enqueue_style('style', get_template_directory_uri() . '/css-dist/style.css', array(), '1.0.0');

    if (basename(get_page_template()) === 'gallery.php') {
        wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/assets/css/lightbox.min.css', array(), '2.1.11');
    }

    // bx slider
    if (is_front_page()):
        wp_enqueue_style('bxslidercss', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
    endif;

    wp_enqueue_script('jquery');

    /* Load JS files */
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), "1.0.10", true);
    if (basename(get_page_template()) === 'gallery.php') {
        wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), "1.0.10", true);
    }

    // bx slider
    if (is_front_page()):
        wp_enqueue_script('bxsliderjs', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
    endif;

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), "1.0.0", true);
}

add_action('wp_enqueue_scripts', 'gym_fitness_scripts');


// Enable Feature images and otherk

function gym_fitness_setup()
{
    add_image_size('square', 350, 350, true);
    add_image_size('portrate', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    add_theme_support('post-thumbnails');

    // SEO Titles
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gym_fitness_setup');

// Creates a Widget Zone
function gym_fitness_widgets()
{
    register_sidebar(
        array(
            'name' => 'sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-primary">',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'gym_fitness_widgets');

/** Displays the Hero image on background of the front-page **/
function gym_fitness_hero_image()
{
    $front_page_id = get_option('page_on_front');
    $image_id = get_field('hero_image', $front_page_id);

    $image = $image_id['url'];

    // Create a "FALSE" stylesheet
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $featured_image_css = "
        .front-header {
            background-image: linear-gradient( rgba(0,0,0, 0.75), rgba(0,0,0, 0.75) ), url( $image );  
        }
    ";
    wp_add_inline_style('custom', $featured_image_css);
}

add_action('init', 'gym_fitness_hero_image');