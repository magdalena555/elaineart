
	<div class="home-artwork">
		<div class="body-wrapper">
			
				<?php 
					$params = array(
						'posts_per_page' => -1,
						'orderby' => 'date',
						'post_type' => 'artwork',
						// this pulls in the custom taxonomy that pulls in the featured image
						'tax_query' => array(
							array(
								// taxonomy term of whats it pulling in
								'terms' => 'home-image-one',
								// slug name of the taxonomy
								'taxonomy' => 'artworkcategories',
								// this specifies the format of the terms value
								'field' => 'slug',
		 					),
						),
						);

					// this passes the parameter
					$artwork = new WP_Query($params);
					// This is a custom query loop
					if($artwork->have_posts()) while($artwork->have_posts()) : $artwork->the_post(); ?>
					<div class="home-artwork-item">
						<div class="home-artwork-content">
							<h2><?php the_title(); ?> </h2>
							<p><?php the_field('short-description'); ?></p>
							
							<!-- button -->
							<a class="button" href="<?php the_field('single-artwork-page'); ?>">
								<h4>
									view more
								</h4>
							</a>
						</div>
						<!-- home-artwork-image -->
						<?php if ( has_post_thumbnail() ) : ?>
						<?php
						//get the image
						$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
						<?php endif;  ?>
						<div class="home-artwork-image" style="background-image: url('<?php echo $feat_image_url ;?>')">
						    
						      
						</div>
						

					</div> <!-- end of home-artwork-image -->



				<?php endwhile; ?>
				<!-- MUST ALWAYS USE AFTER CUSTOM QUERY -->
				<?php wp_reset_postdata(); ?>

			
	
			
		
		</div>
	</div>


