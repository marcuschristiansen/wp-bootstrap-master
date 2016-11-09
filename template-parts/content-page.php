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

        /* Jumbotron */
        elseif( get_row_layout() == 'jumbotron' ): 

        	get_template_part( 'template-parts/partials/partial', 'jumbotron' );

        /* WYSIWYG */
        elseif( get_row_layout() == 'wysiwyg' ): 

            get_template_part( 'template-parts/partials/partial', 'wysiwyg' );

        /* WYSIWYG */
        elseif( get_row_layout() == 'tabbed_content' ): 

            get_template_part( 'template-parts/partials/partial', 'tabs' );

        endif;

    endwhile;

else :

    // no layouts found

endif;


