<?php get_header(); ?>

<section class="single-artwork-page">
    <div class="body-wrapper">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="single-artwork-wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="entry-title"><?php the_title(); ?></h2>

                <?php if( have_rows('large-gallery') ): ?>
                    <div class=" gallery gallery-main js-flickity large-gallery" data-flickity-options='{ "pageDots": false, "cellAlign": "left", "contain": true, "imagesLoaded": true   }'>
                    
                        <?php while(the_repeater_field('large-gallery')): ?>


                            <?php $image = get_sub_field('large-images'); ?>
                            <div class="large-image-container gallery-cell">
                                <div class="single-image-content">
                                    <p><?php the_sub_field('artwork-title'); ?></p>
                                    <p><?php the_sub_field('artwork-medium'); ?></p>
                                    <p><?php the_sub_field('artwork-size'); ?></p>
                                </div>
                                <div class="large-image">
                                    <img src="<?php echo $image['sizes'] ['single-artwork-image'] ; ?>" alt="<?php echo $image['alt'] ?>" />
                                </div>
                            </div>
                           
                        <?php endwhile; ?> 
                    </div>
                <?php endif; ?>

                <?php if( have_rows('large-gallery') ): ?>
                  <div class=" small-gallery gallery gallery-nav js-flickity" data-flickity-options='{ "asNavFor": ".large-gallery", "contain": true, "freeScroll": true, "imagesLoaded": true, "pageDots": false }'>

                    

                    <?php while(the_repeater_field('large-gallery')): ?>

                        <?php $image = get_sub_field('gallery-small-image'); ?>
                        <div class="small-image-container gallery-cell">
                            <img src="<?php echo $image['sizes'] ['single-artwork-thumbnail'] ; ?>" alt="<?php echo $image['alt'] ?>" />

                        </div>
                       
                    <?php endwhile; ?> 



                  </div>
                <?php endif; ?>
                
                <div class="artwork-description">
                    <h4>About the artwork collection</h4>
                    <?php the_field('large-description'); ?>
                </div>

            </div> <!-- end of single artwork wrapper -->

        <?php endwhile; // end of the loop. ?>

  
    </div> <!-- body-wrapper -->
</section>

<?php get_footer(); ?>