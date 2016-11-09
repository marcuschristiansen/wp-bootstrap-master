<?php 
$container = (get_sub_field('container')) ? 'container' : '';
$background = (get_sub_field('background') == 'image') ? 'url(' . get_sub_field('background_image') . ')' : get_sub_field('background_colour'); 
$jumbotron_fluid = (get_sub_field('fluid_layout')) ? 'jumbotron-fluid' : '';
$text_colour = get_sub_field('text_colour');
?>

<section class="<?php echo $container; ?>">
	<div class="jumbotron bg-img <?php echo $jumbotron_fluid; ?>" style="background:<?php echo $background; ?>;color:<?php echo $text_colour; ?>">
		<?php the_sub_field('content'); ?>
	</div>
</section>