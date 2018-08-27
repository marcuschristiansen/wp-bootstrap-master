<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_starter
 */

if( class_exists('acf') ):
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

            /* Tabs */
            elseif( get_row_layout() == 'tabbed_content' ): 

                get_template_part( 'template-parts/partials/partial', 'tabs' );

            /* Icon Row */
            elseif( get_row_layout() == 'icon_row' ): 
        
                get_template_part( 'template-parts/partials/partial', 'icons' );

            /* Icon Row */
            elseif( get_row_layout() == 'slider' ): 
                
                get_template_part( 'template-parts/partials/partial', 'slider' );

            /* Icon Row */
            elseif( get_row_layout() == 'logo_carousel' ): 
                
                get_template_part( 'template-parts/partials/partial', 'logo_carousel' );

            endif;

        endwhile;

    else :

        // no layouts found

    endif;

endif;


