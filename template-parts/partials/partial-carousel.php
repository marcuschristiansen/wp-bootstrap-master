<?php $carousel_id = uniqid(); ?>

<div id="carousel-<?php echo $carousel_id; ?>" class="carousel slide" data-ride="carousel">
<?php if(have_rows('slides')) : ?>

    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
        <?php $counter = 0; ?>
        <?php while ( have_rows('slides') ) : the_row(); ?>

            <li data-target="#carousel-<?php echo $carousel_id; ?>" data-slide-to="<?php echo $counter; ?>" class="<?php echo ($counter == 0) ? 'active' : ''; ?>"></li>

        <?php $counter++; ?>
        <?php endwhile; ?>
    </ol>

    <!-- Carousel Slides -->
    <div class="carousel-inner" role="listbox">
        <?php $counter = 0; ?>
        <?php while ( have_rows('slides') ) : the_row(); ?>

            <?php $image = get_sub_field('image'); ?>
        
            <div class="carousel-item <?php echo ($counter == 0) ? 'active' : ''; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <!-- Slide Caption -->
                <?php if(get_sub_field('content')) : ?>
                    <div class="carousel-caption"><?php the_sub_field('content'); ?></div>
                <?php endif; ?>
            </div>
            
        <?php $counter++; ?>
        <?php endwhile; ?>
    </div>

    <!-- Carousel Controls -->
    <a class="left carousel-control" href="#carousel-<?php echo $carousel_id; ?>" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-<?php echo $carousel_id; ?>" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

<?php endif; ?>
</div><!-- #carousel-* -->
  

  

