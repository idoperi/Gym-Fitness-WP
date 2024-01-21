<?php

require get_template_directory() . '/inc/queries.php';

function gym_fitness_menus(){
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

    wp_enqueue_script('jquery');

    /* Load JS files */
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), "1.0.10", true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), "1.0.0", true);
}

add_action('wp_enqueue_scripts', 'gym_fitness_scripts');


// Enable Feature images and other

function gym_fitness_setup()
{
    add_image_size('square', 350, 350, true);
    add_image_size('portrate', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    add_theme_support('post-thumbnails');
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