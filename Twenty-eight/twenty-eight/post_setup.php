<?php
// Theme support for post features
function my_theme_post_setup() {
    // Enable Featured Image support
    add_theme_support( 'post-thumbnails' );

    // Define custom image sizes
    add_image_size( 'custom-thumb', 800, 400, true ); // Custom Thumbnail (cropped)
    add_image_size( 'custom-large', 1200, 800, true ); // Custom Large (cropped)

    // Enable support for Post Formats
    add_theme_support( 'post-formats', array(
        'aside', 'gallery', 'quote', 'image', 'video',
    ) );

    // Enable RSS feed links in head
    add_theme_support( 'automatic-feed-links' );

    // Enable title tag support for better SEO
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'my_theme_post_setup' );
?>
