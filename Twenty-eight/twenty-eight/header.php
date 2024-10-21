<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  
    <nav class="main-navigation">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'primary-menu',
    ) );
    ?>
</nav>

</header>
