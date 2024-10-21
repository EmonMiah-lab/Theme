<?php get_header(); ?>

<main id="site-main" class="archive-page">
    <div class="container">
        <!-- Archive Title -->
        <header class="archive-header">
            <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
            <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
        </header>

        <!-- The Loop -->
        <?php if ( have_posts() ) : ?>
            <div class="archive-posts">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                </a>
                            <?php endif; ?>

                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="entry-meta">
                                <span class="posted-on"><?php echo get_the_date(); ?></span> |
                                <span class="byline"><?php the_author(); ?></span>
                            </div>
                        </header>

                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( 'Previous', 'your-textdomain' ),
                    'next_text' => __( 'Next', 'your-textdomain' ),
                ) ); ?>
            </div>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts were found.', 'your-textdomain' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
