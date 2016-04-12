
<?php 

/*
  Template Name: about-resume
*/

 ?>

<?php get_header();  ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<section class="resume">
		<div class="body-wrapper">
			<div class="resume-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

<?php endwhile; // end the loop?>

<?php get_footer(); ?>