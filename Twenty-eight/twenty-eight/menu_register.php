<?php
// Register Menus for the Theme
function my_theme_register_menus() {
    // Register multiple menus with unique locations
    register_nav_menus(
        array(
            'primary-menu'   => __( 'Primary Menu', 'your-textdomain' ),
            'footer-menu'    => __( 'Footer Menu', 'your-textdomain' ),
        )
    );
}
add_action( 'init', 'my_theme_register_menus' );
?>
