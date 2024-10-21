<?php
// Include the header
get_header();
?>

<main id="site-main" class="main-content">
    <div class="container">
        <?php
        // Start the Loop
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php
                        the_content();

                        // Optional: Pagination for paginated posts/pages
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'your-textdomain' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div>

                    <footer class="entry-footer">
                        <p>Posted on: <?php echo get_the_date(); ?></p>
                        <p>Posted by: <?php the_author(); ?></p>
                        <p><?php the_category(', '); ?></p>
                    </footer>
                </article>

            <?php
            endwhile;

        else : ?>

            <section class="no-results not-found">
                <h2><?php _e( 'Nothing Found', 'your-textdomain' ); ?></h2>
                <p><?php _e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'your-textdomain' ); ?></p>
                <?php get_search_form(); ?>
            </section>

        <?php
        endif;
        ?>
    </div>
</main>

<?php
// Include the footer
get_footer();
?>
