<?php

/*
	Template Name: Home
*/

get_header();  ?>

<?php 

  $homeImage = get_field('home_image');
  $homeLogo = get_field('home_logo');


?>

<div class="main" id="home" style="background-image:url(<?php echo $homeImage['url'] ?>);">
  <div class="container">

  	<img src="<?php echo $homeLogo['url'] ?>" alt="">
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>