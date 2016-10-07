<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_starter
 */

// check if the flexible content field has rows of data
if( have_rows('content') ):

     // loop through the rows of data
    while ( have_rows('content') ) : the_row();

		/* Slider/Carousel */
        if( get_row_layout() == 'carousel' ):

        	get_template_part( 'template-parts/partials/partial', 'carousel' );

        /* Other Component */
        elseif( get_row_layout() == 'download' ): 

        	$file = get_sub_field('file');

        endif;

    endwhile;

else :

    // no layouts found

endif;


