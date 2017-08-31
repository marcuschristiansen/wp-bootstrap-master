<?php 
$bg_image 		= get_sub_field('background_image');
$bg_colour 		= get_sub_field('background_colour');
?>

<?php if( have_rows('slides') ) : ?>
	<section class="slider">
		<div class="bg-img" style="background-image:url('<?php echo $bg_image['url']; ?>');background-color:<?php echo $bg_colour; ?>">
			<div class="container">
				<div class="owl-carousel owl-slider-carousel owl-theme">
					<?php while ( have_rows('slides') ) : the_row(); ?>
						<div class="row height-100">
							<div class="col-md-4">
								<div style="color:<?php the_sub_field('text_colour'); ?>"><?php the_sub_field('text'); ?></div>
							</div>
							<div class="col-md-8">
								<?php $image = get_sub_field('image'); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

