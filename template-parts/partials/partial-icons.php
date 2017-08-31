<?php 
$container 			= (get_sub_field('container')) ? 'container' : '';
$bg_colour 			= get_sub_field('background_colour');
$section_heading 	= get_sub_field('section_heading');
$section_content	= get_sub_field('section_content');
$icon_position 		= get_sub_field('icon_position');
$icons_per_row 		= get_sub_field('icons_per_row');
?>

<?php if( have_rows('icons') ) : ?>
	<section class="icons" style="background-color:<?php echo $bg_colour; ?>">
		<div class="<?php echo $container; ?>">

			<?php if($section_heading) : ?>
				<h1 class="text-center mb-6"><?php echo $section_heading; ?></h1>
			<?php endif; ?>

			<?php if($section_content) : ?>
				<div class="text-center mb-5"><?php echo $section_content; ?></div>
			<?php endif; ?>

			<!-- Icon Position Top -->
			<?php if($icon_position == 'top') : ?>
				<div class="row">
					<?php while ( have_rows('icons') ) : the_row(); ?>
						<div class="col-md-<?php echo 12/$icons_per_row; ?>">
							<?php $icon = get_sub_field('icon'); ?>
							<div class="text-center mb-3"><img src="<?php echo $icon['url']; ?>"></div>
							<h4 class="text-center font-bold text-uppercase"><?php the_sub_field('heading'); ?></h4>
							<?php if(get_sub_field('content')) : ?>
								<p class="text-center"><?php the_sub_field('content'); ?></p>
							<?php endif; ?>
						</div>	
				    <?php endwhile; ?>
				</div>
			<?php endif; ?>

			<!-- Icon Position Left -->
			<?php if($icon_position == 'left') : ?>
				<div class="row">
					<?php while ( have_rows('icons') ) : the_row(); ?>
						<?php $icon = get_sub_field('icon'); ?>
						<div class="col-md-<?php echo 12/$icons_per_row; ?> mb-4">
							<div>
								<img src="<?php echo $icon['url']; ?>">
								<h4 class="d-inline-block font-bold text-uppercase"><?php the_sub_field('heading'); ?></h4>
							</div>
							<div>
								<?php if(get_sub_field('content')) : ?>
									<p><?php the_sub_field('content'); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

		</div>
	</section>
<?php endif; ?>

