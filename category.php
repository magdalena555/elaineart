<?php get_header(); ?>


<section class="blog-main">

  <div class="blog-content">
      <h3>Category Archives: <?php single_cat_title(); ?></h3>
      <?php get_template_part( 'loop', 'category' ); ?>
  </div> <!--/.content -->
</section>

<?php get_footer(); ?>