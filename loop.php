<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class=" post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="blog-parent">
		<div class="blog-image">
			<?php the_post_thumbnail('large-square'); ?>
		</div>


		<article class="post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h4>
				 <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
		          <?php the_title(); ?>
		        </a>
			</h4>   
		    <p><?php the_category(', '); ?></p>
		    
			<section>
				<?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
				<?php wp_link_pages( array(
		  'before' => '<div class="page-link"> Pages:',
		  'after' => '</div>'
		)); ?>
			</section>

			<footer>
				
		       
		       	<p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
					</footer>

		</article><!-- #post-## -->

			<?php comments_template( '', true ); ?>

	</div>
	

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>