
<?php

// Configure les fonctionnalités de bases
function thegreenlab_theme_setup(){

    // Prise en charge des images de mise en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'entete
    add_theme_support('title-tag');

    // Ajouts des menus
    register_nav_menus( array(
        'main' => 'Menu Principal',
    ) );

}
add_action( 'after_setup_theme', 'thegreenlab_theme_setup' );

// Ajout des scripts
function thegreenlab_theme_register_assets(){

    // CSS
    wp_enqueue_style( 
        'font', 
        'https://use.typekit.net/pig7xlg.css',
        array(),
        '1.0'
    );

    wp_enqueue_style( 
        'style', 
        get_stylesheet_uri( ),
        array(),
        '1.0'
    );

    // JS
    wp_enqueue_script( 
        'vue', 
        'https://unpkg.com/vue@3.2.20', 
        array(),
        '1.0',
        true
    );
    wp_enqueue_script( 
        'app', 
        get_template_directory_uri() . '/dist/app.js', 
        array('vue'),
        '1.0',
        true
    );

}
add_action( 'wp_enqueue_scripts', 'thegreenlab_theme_register_assets');


// Custom image size
add_image_size( 'xl', 1440);
add_image_size( 'xxl', 1900);


// Create option page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}