<?php
/*
* The template for displaying pages
*/
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">

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

                          // Optional: Pagination for paginated pages
                          wp_link_pages( array(
                              'before' => '<div class="page-links">' . __( 'Pages:', 'your-textdomain' ),
                              'after'  => '</div>',
                          ) );
                          ?>
                      </div>
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
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>
