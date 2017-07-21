<?php

/*
	Template Name: About
*/

get_header();  ?>

<?php 

  $aboutImage = get_field('about_image');

?>

<div class="main" id="about" style="background-image:url(<?php echo $aboutImage['url'] ?>);">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="text">
	      <h2><?php the_title(); ?></h2>
	      <?php the_content(); ?>
      	</div>
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>