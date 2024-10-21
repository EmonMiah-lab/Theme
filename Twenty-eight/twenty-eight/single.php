<?php get_header(); ?>

<main id="site-main" class="blog-post-content">
    <div class="container">
        <!-- Post Content -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Post Header -->
                <header class="entry-header">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="entry-meta">
                        <span class="posted-on"><?php echo get_the_date(); ?></span> |
                        <span class="byline"><?php echo get_the_author(); ?></span> |
                        <span class="category"><?php the_category( ', ' ); ?></span>
                    </div>
                </header>

                <!-- Post Content -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <!-- Post Footer -->
                <footer class="entry-footer">
                    <div class="tags"><?php the_tags( 'Tags: ', ', ', '<br>' ); ?></div>
                    <div class="post-navigation">
                        <div class="previous-post"><?php previous_post_link(); ?></div>
                        <div class="next-post"><?php next_post_link(); ?></div>
                    </div>
                </footer>
            </article>

        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
