
<?php 

/*
  Template Name: bio
*/

 ?>

<?php get_header();  ?>

<section class="bio">
	<div class="body-wrapper ">
		<div class="bio-wrapper">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="bio-image">
				<?php the_post_thumbnail('studio'); ?>
			</div>
			<div class="bio-content">
				<h3>About Elaine Clarfield Gitalis</h3>
				<h4><?php the_field('bio-subtitle'); ?></h4>
				<div class="bio-text">
					<?php the_content(); ?>  
				</div>
					
			</div>

			<?php endwhile; // end the loop?>
		</div>	
		<div class="studio">
			<?php if( have_rows('studio') ): ?>
			    <div class="studio-wrapper">
			    
			        <?php while(the_repeater_field('studio')): ?>

						
			            <?php $image = get_sub_field('studio-image'); ?>

			       
			                <img src="<?php echo $image['sizes'] ['studio'] ; ?>" alt="<?php echo $image['alt'] ?>" />
			       
			           
			   
			        <?php endwhile; ?> 
			    </div>
			<?php endif; ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>