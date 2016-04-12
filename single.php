<?php get_header(); ?>

    <section class="single-blog">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="blog-image-single">
                <?php the_post_thumbnail('large-square'); ?>
            </div> 
          
              <h2 class="entry-title"><?php the_title(); ?></h2>

              <div class="entry-meta">
              <h5><?php the_date('F j Y'); ?></h5>
             
              </div><!-- .entry-meta -->

              <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(array(
                  'before' => '<div class="page-link"> Pages: ',
                  'after' => '</div>'
                )); ?>
              </div><!-- .entry-content -->

              <div class="entry-utility">
                <p>
                    <?php hackeryou_posted_in(); ?>
                </p>
             
              
              </div><!-- .entry-utility -->
            </div><!-- #post-## -->

            <div id="nav-below" class="navigation">
              <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
              <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
            </div><!-- #nav-below -->

            <?php comments_template( '', true ); ?>

          <?php endwhile; // end of the loop. ?>

        </div> <!-- /.content -->

    </section>

<?php get_footer(); ?>