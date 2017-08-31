<?php
/**
 * wp_starter Theme Customizer.
 *
 * @package wp_starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wp_starter_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_setting( 'payfast_logo' ); // Add setting for logo uploader
	$wp_customize->add_setting( 'payfast_logo_scroll' ); // Add setting for logo uploader

    // Add Social Media Section
    /*
     * If you're going to add additional social networks, please add the choice to social-widget.php
     */
    $wp_customize->add_section( 'social-media' , array(
        'title' => __( 'Social Media', 'payfast' ),
        'priority' => 30,
        'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', 'payfast' )
    ) );

    // Add Twitter Setting
    $wp_customize->add_setting( 'twitter' , array( 'default' => '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
        'label' => __( 'Twitter', 'payfast' ),
        'section' => 'social-media',
        'settings' => 'twitter',
    ) ) );

    // Add Facebook Setting
    $wp_customize->add_setting( 'facebook' , array( 'default' => '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
        'label' => __( 'Facebook', 'payfast' ),
        'section' => 'social-media',
        'settings' => 'facebook',
    ) ) );

    // Add Instagram Setting
    $wp_customize->add_setting( 'linkedin' , array( 'default' => '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
        'label' => __( 'LinkedIn', 'payfast' ),
        'section' => 'social-media',
        'settings' => 'linkedin',
    ) ) );

    // Add Instagram Setting
    $wp_customize->add_setting( 'google-plus' , array( 'default' => '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google-plus', array(
        'label' => __( 'Google+', 'payfast' ),
        'section' => 'social-media',
        'settings' => 'google-plus',
    ) ) );

	// Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'payfast_logo', array(
        'label'    => __( 'Site Logo', 'payfast' ),
        'section'  => 'title_tagline',
        'settings' => 'payfast_logo',
    ) ) );

    // Add control for logo uploader (actual uploader) - AFTER SCROLL
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'payfast_logo_scroll', array(
        'label'    => __( 'Site Logo After Scroll', 'payfast' ),
        'section'  => 'title_tagline',
        'settings' => 'payfast_logo_scroll',
    ) ) );
}
add_action( 'customize_register', 'wp_starter_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_starter_customize_preview_js() {
	wp_enqueue_script( 'wp_starter_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_starter_customize_preview_js' );
