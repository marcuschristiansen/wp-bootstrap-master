<?php 
$container = (get_sub_field('container')) ? 'container' : '';
?>

<section class="<?php echo $container; ?>">
	<div class="row">
		<?php if(have_rows('editors')): ?>
    		<?php while ( have_rows('editors') ) : the_row(); ?>

      			<div class="col-md-<?php the_sub_field('width'); ?>">
      				<?php the_sub_field('editor');?>
      			</div>

    		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>