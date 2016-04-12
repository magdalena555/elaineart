
<?php 

/*
  Template Name: contact
*/

 ?>

<?php get_header();  ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="contact">
		<div class="body-wrapper contact-wrapper">

			<div class="contact-content">
				<h2 class="title"><?php the_title(); ?>
				</h2>
				<p><?php the_field('email'); ?></p>
				<p><?php the_field('phone'); ?></p>
				<?php if( have_rows('facebook') ): ?>
			        <?php while(the_repeater_field('facebook')): ?>
						<a href="<?php the_sub_field('facebook-url'); ?>">
							<p><?php the_sub_field('facebook-text'); ?></p>
						</a>
				           
				    <?php endwhile; ?> 
				<?php endif; ?>
				<div class="contact-form">
					<?php the_content(); ?> 
				</div>
				<p><?php the_field('gallery-contact'); ?></p>
			
				
			</div>	
			<div class="contact-image">
				<?php the_post_thumbnail('large'); ?>
			</div>
		</div>
	</section>




<?php endwhile; // end the loop?>



<?php get_footer(); ?>