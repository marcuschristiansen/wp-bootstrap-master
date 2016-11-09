<?php 
$container = (get_sub_field('container')) ? 'container' : '';
?>

<div>

<?php if( have_rows('tabs') ) : ?>

	<?php $active = 'active'; ?>

	<ul class="nav nav-tabs" role="tablist">
	    <?php while ( have_rows('tabs') ) : the_row(); ?>
	    	<?php $id = str_replace(' ', '-', strtolower(get_sub_field('heading'))); ?>
	    	<!-- Nav tabs -->
		    <li role="presentation" class="<?php echo $active; ?>"><a href="#<?php echo $id; ?>" aria-controls="<?php echo $id; ?>" role="tab" data-toggle="tab"><?php the_sub_field('heading');?></a></li>

		    <?php $active = ''; ?>
	    <?php endwhile; ?>
	</ul>

	<?php $active = 'active'; ?>

	<div class="tab-content">
	    <?php while ( have_rows('tabs') ) : the_row(); ?>
	    	<?php $id = str_replace(' ', '-', strtolower(get_sub_field('heading'))); ?>
	    	<!-- Tab panes -->
		    <div role="tabpanel" class="tab-pane <?php echo $active; ?>" id="<?php echo $id; ?>"><?php the_sub_field('content'); ?></div>
	    
		<?php $active = ''; ?>
	    <?php endwhile; ?>
	</div>

<?php endif; ?>

</div>