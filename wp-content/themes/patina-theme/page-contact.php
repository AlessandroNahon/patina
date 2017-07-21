<?php

/*
	Template Name: Contact
*/

get_header();  ?>

<?php 

  $contactImage = get_field('contact_image');

?>

<div class="main" id="contact" style="background-image:url(<?php echo $contactImage['url'] ?>);">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="text">
			<div class="top">
				<h2><?php the_title(); ?></h2>
				<div class="info">
					<ul>
						<li>Vanessa Ferro</li>
						<li><a href="mailto:patinahomebydesign@gmail.com">patinahomebydesign@gmail.com</a></li>
						<li><a href="tel:4169535175">416 953 5175</a></li>
					</ul>
				</div>
			</div>
			<div class="bottom">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="social">
			<div class="icon">
				<img src="../wp-content/themes/patina-theme/images/patina_fb.svg" alt="">
			</div>
			<div class="icon">
				<img src="../wp-content/themes/patina-theme/images/patina_pinterest.svg" alt="">
			</div>
			<div class="icon">
				<img src="../wp-content/themes/patina-theme/images/patina_ig.svg" alt="">
			</div>
		</div>


    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>