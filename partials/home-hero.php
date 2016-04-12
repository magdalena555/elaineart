
<section class="hero">
	<div class="body-wrapper">
		<div class="slick-slider">
			<?php

			if( have_rows('home-slider') ): ?>

			 	<!-- This makes a image variable -->
			    <?php while ( have_rows('home-slider') ) : the_row();
			 		$image = get_sub_field('home-slider-images');
			 	?>
				 	<div class="gallery-cell">
				 		<img src="<?php echo $image['sizes'] ['hero'] ; ?>" alt="<?php echo $image['alt'] ?>" />
				 	</div>
			 		

			 	<?php endwhile; ?> 

			<?php endif; ?>
		</div>
	</div>
</section>

