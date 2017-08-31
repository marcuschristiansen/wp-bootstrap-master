<?php

// ACF Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Companies',
		'menu_title'	=> 'Companies',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function acf_load_carousel_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();

    // if has rows
    if( have_rows('carousel', 'option') ) {

        // while has rows
        $i = 0;
        while( have_rows('carousel', 'option') ) {
            
            // instantiate row
            the_row();
            
            // vars
            $value = $i;
            $label = 'Carousel ' . $i;

            
            // append to choices
            $field['choices'][ $value ] = $label;

            $i++;
            
        }
        
    }

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=image_carousel', 'acf_load_carousel_field_choices');