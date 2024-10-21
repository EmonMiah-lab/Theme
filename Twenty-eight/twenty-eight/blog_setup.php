<?php
// Blog-specific setup
function my_theme_blog_setup() {
    // Add support for post thumbnails on the blog
    add_theme_support( 'post-thumbnails' );

    // Custom excerpt length for blog posts
    function my_custom_excerpt_length( $length ) {
        return 40; // Set excerpt length to 40 words
    }
    add_filter( 'excerpt_length', 'my_custom_excerpt_length', 999 );

    // Custom read more text for excerpts
    function my_excerpt_more( $more ) {
        return '... <a class="read-more" href="' . get_permalink() . '">' . __( 'Read More', 'your-textdomain' ) . '</a>';
    }
    add_filter( 'excerpt_more', 'my_excerpt_more' );

    // Pagination for blog posts
    function my_custom_pagination() {
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( 'Previous', 'your-textdomain' ),
            'next_text' => __( 'Next', 'your-textdomain' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'my_theme_blog_setup' );
?>
