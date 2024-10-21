<?php
/*
Template Name: Custom Page
*/
get_header(); ?>
<main>
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
    <aside class="sidebar-area">
        <?php get_sidebar(); ?>
    </aside>
</main>
<?php get_footer(); ?>
