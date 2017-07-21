<?php

/*
	Template Name: Services
*/

get_header();  ?>

<?php 

  $servicesImage = get_field('services_image');

?>

<div class="main" id="services" style="background-image:url(<?php echo $servicesImage['url'] ?>);">
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