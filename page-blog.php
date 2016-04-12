<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
        <h1>BLOGGGGGG</h1>
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php   is_blog ();  ?>
         


        <?php get_sidebar(); ?>
            

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>