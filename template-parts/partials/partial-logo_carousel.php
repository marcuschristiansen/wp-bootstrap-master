<?php 
$gallery_id = get_sub_field('image_carousel');
$images = get_field('carousel', 'option')[$gallery_id]['gallery'];
?>

<section class="logo-carousel">
	<div class="container">

	<h1 class="text-center"><?php the_sub_field('heading'); ?></h1>

		<?php if($images) : ?>
			<!-- Slider main container -->
			<div class="swiper-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <?php foreach($images as $image) : ?>
			        	<div class="swiper-slide">
	                    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                    </div>
					<?php endforeach; ?>
			    </div>
			    <!-- If we need pagination -->
			    <div class="swiper-pagination"></div>
			    
			</div>
		<?php endif; ?>

	</div>
</section>