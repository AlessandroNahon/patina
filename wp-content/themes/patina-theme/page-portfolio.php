<?php

/*
	Template Name: Portfolio
*/

get_header();  ?>

<?php $portfolioImage = get_field('portfolio_image'); ?>

<div class="comin">
	<p>Coming <span></span> Soon</p>
</div>

<div class="main" id="portfolio" style="background-image:url(<?php echo $portfolioImage['url'] ?>);">
  <div class="container">

	<?php if( have_rows('portfolio_item') ): ?>
	    <?php while ( have_rows('portfolio_item') ) : the_row(); ?>

	    <?php $portName = get_sub_field('portfolio_item_name'); ?>
	    <?php $portThumb = get_sub_field('portfolio_item_thumbnail'); ?>
	    <?php $portDesc = get_sub_field('portfolio_item_description'); ?>
	    <?php $portLoc  = get_sub_field('portfolio_item_location'); ?>
			
		<div class="thumbnail">
			<div class="thumbnail-img">
				<img src="<?php echo $portThumb['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<div class="thumbnail-desc">
				<h3><?php echo $portName ?></h3>
				<p><?php echo $portDesc ?></p>
				<p><?php echo $portLoc ?></p>
			</div>
		</div>
		
		<div class="slide-gallery">
			<div class="close">
				<span class="bar1-gallery"></span>
				<span class="bar2-gallery"></span>
			</div>
			<div class="overlay"></div>
			<?php 

			$images = get_sub_field('portfolio_item_gallery');

			if( $images ): ?>
			    <ul class="slider">
			        <?php foreach( $images as $image ): ?>
			            <li>
			                <a href="<?php echo $image['url']; ?>" target="_blank">
			                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" /> 
			                </a>
			                <p><?php echo $image['caption']; ?></p>
			            </li>
			        <?php endforeach; ?>
			    </ul>
			<?php endif; ?>
		</div>

	   <?php endwhile; ?>
	 <?php endif; ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>

