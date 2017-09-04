<?php 
$container = (get_sub_field('container')) ? 'container' : '';
$padding_top = get_sub_field('top_padding') . 'px';
$padding_bottom = get_sub_field('bottom_padding') . 'px';
$bg_colour = get_sub_field('background_colour');
$bg_image  = get_sub_field('background_image');
?>

<section class="wysiwyg" style="background-image:url('<?php echo $bg_image['url']; ?>');background-color:<?php echo $bg_colour; ?>;padding-top:<?php echo $padding_top; ?>;padding-bottom:<?php echo $padding_bottom; ?>;">
	<div class="<?php echo $container; ?>">
		<div class="row">
			<?php if(have_rows('editors')): ?>
	    		<?php while ( have_rows('editors') ) : the_row(); ?>
	      			<div class="col-md-<?php the_sub_field('width'); ?> align-self-center <?php echo ($bg_image) ? 'text-white' : ''; ?>">
	      				<?php the_sub_field('editor');?>
	      			</div>
	    		<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

