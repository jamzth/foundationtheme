<?php
/**
 * Author: James Hammack
 * URL: https://james.hammack.us
 *
 * FoundationTheme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationTheme
 * @since FoundationTheme 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationtheme-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationtheme-top-bar-walker.php' );
require_once( 'library/class-foundationtheme-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationtheme-protocol-relative-theme-assets.php' );

/** Add Customizer Options */
function foundation_theme_customizer( $wp_customize ) {
    //Custom Logo
    $wp_customize->add_section( 'foundation_image_section' , array(
        'title'       => __( 'Logo Image', 'foundation' ),
        'priority'    => 30,
        'description' => 'Upload an image as your logo',
    ) );

    $wp_customize->add_setting( 'foundation_image' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'foundation_image', array(
        'label'    => __( 'Logo Image', 'foundation' ),
        'section'  => 'foundation_image_section',
        'settings' => 'foundation_image',
    ) ) );

    //Custom Connect
    $wp_customize->add_section( 'foundation_connect' , array(
        'title'       => __( 'Social Connect', 'foundation' ),
        'priority'    => 60,
        'description' => 'Add Twitter and Facebook urls',
    ) );

    $wp_customize->add_setting( 'foundation_connect_twitter' );

    $wp_customize->add_control( 'foundation_connect_twitter',
    	array(
        'label'    => __( 'Connect Twitter', 'foundation' ),
        'section'  => 'foundation_connect',
        'settings' => 'foundation_connect_twitter',
        'type' => 'text',
    ) );

    $wp_customize->add_setting( 'foundation_connect_facebook' );

    $wp_customize->add_control( 'foundation_connect_facebook',
    	array(
        'label'    => __( 'Connect Facebook', 'foundation' ),
        'section'  => 'foundation_connect',
        'settings' => 'foundation_connect_facebook',
        'type' => 'text',
    ) );

    //Custom Footer
    $wp_customize->add_section( 'foundation_custom_footer' , array(
        'title'       => __( 'Custom Footer Text', 'foundation' ),
        'priority'    => 60,
        'description' => 'Add your custom footer text here',
    ) );

    $wp_customize->add_setting( 'custom_footer' );

    $wp_customize->add_control( 'custom_footer',
    	array(
        'label'    => __( 'Custom Footer Text', 'foundation' ),
        'section'  => 'foundation_custom_footer',
        'settings' => 'custom_footer',
        'type' => 'text',
    ) );

}
add_action('customize_register', 'foundation_theme_customizer');
