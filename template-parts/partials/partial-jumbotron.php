<?php 
$container 			= (get_sub_field('container')) ? 'container' : '';
$background 		= (get_sub_field('background') == 'image') ? 'url(' . get_sub_field('background_image') . ')' : get_sub_field('background_colour'); 
$jumbotron_fluid 	= (get_sub_field('fluid_layout')) ? 'jumbotron-fluid' : '';
$text_colour 		= get_sub_field('text_colour');

$heading 			= get_sub_field('heading');
$paragraph 			= get_sub_field('paragraph');
$btn 				= get_sub_field('button');
$btn_bg_color 		= get_sub_field('button_colour');
$btn_text			= get_sub_field('button_text');
$btn_url			= get_sub_field('button_link');
$new_window			= (get_sub_field('new_window')) ? 'target="_blank"' : '';

$image 				= get_sub_field('image');
?>

<section class="height-100">
	<div class="jumbotron bg-img <?php echo $jumbotron_fluid; ?>" style="background:<?php echo $background; ?>;color:<?php echo $text_colour; ?>">
		<div class="<?php echo $container; ?> height-100 inner-wrap">
			<div class="row justify-content-between height-100">
				<div class="col-sm-6 mr-auto align-self-center text-center text-lg-left">
					<h2 class="heading my-4" style="color:<?php echo $text_colour; ?>;"><?php echo $heading; ?></h2>
					<p class="paragraph my-4" style="color:<?php echo $text_colour; ?>;"><?php echo $paragraph; ?></p>
					<?php if($btn) : ?>
						<a class="btn my-4" style="background-color:<?php echo $btn_bg_color; ?>;" href="<?php echo $btn_url; ?>" <?php echo $new_window; ?>><?php echo $btn_text; ?></a>
					<?php endif; ?>
				</div>
				<div class="col-sm-5 ml-auto align-self-end text-lg-right text-center">
					<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>