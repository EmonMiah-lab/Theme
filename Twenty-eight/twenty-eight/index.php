<?php
get_header(); ?>

<main id="site-main" class="main-content">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                // Display the post content here
                the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
                the_excerpt();
            endwhile;

            // Display pagination if necessary
            the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Previous', 'your-textdomain' ),
                'next_text' => __( 'Next', 'your-textdomain' ),
            ) );
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
