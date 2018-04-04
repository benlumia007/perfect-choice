<?php
/*
===========================================================================================================
Perfect Choice - functions.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a 
theme (the other being template-tags.php). This functions.php template file allows you to add features and 
functionality to a WordPress theme which is stored in the theme's sub-directory in the theme folder. The 
second template file template-tags.php allows you to add additional features and functionality to the 
WordPress theme which is stored in the includes folder and it's called in the functions.php.

@package        Perfect Choice WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
===========================================================================================================
*/

/*
===========================================================================================================
Table of Content
===========================================================================================================
 1.0 - Theme Setup
 2.0 - Enqueue Scripts and Styles
 3.0 - Content Width
 4.0 - Register Sidebars
 5.0 - Required Files
===========================================================================================================
*/

/*
===========================================================================================================
 1.0 - Theme Setup
===========================================================================================================
*/
function perfect_choice_theme_setup() {
    register_nav_menus(array(
        'primary-navigation'    => esc_html__('Primary Navigation', 'perfect-choice')
    ));
    
    /*
    =======================================================================================================
    Enable and activate add_theme_support('html5'); for Perfect Choice WordPress Theme. This 
    feature allows the use of HTML5 markup for search forms, comment forms, comment list, gallery, 
    and captions.
    =======================================================================================================
    */
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form', 
        'gallery',
        'caption'
    ));
}
add_action('after_setup_theme', 'perfect_choice_theme_setup');

/*
===========================================================================================================
 2.0 - Enqueue Scripts and Styles
===========================================================================================================
*/
function perfect_choice_enqueue_scripts_styles_setup() {
    wp_enqueue_style('perfect-choice-style', get_stylesheet_uri());
    wp_enqueue_style('perfect-choice-normalize', get_template_directory_uri() . '/extras/normalize/normalize.css', '04012018', true);
    
    /*
    ============================================================================================
    Enable and activate Google Fonts (Sanchez and Merriweather) locally for Perfect Choice 
    WordPress Theme. For more information regarding this feature, please go the following url to 
    begin the awesomeness of Google WebFonts Helper. 
    Reference: (https://google-webfonts-helper.herokuapp.com/fonts)
    ============================================================================================
    */
    wp_enqueue_style('perfect-choice-custom-fonts', get_template_directory_uri() . '/extras/fonts/custom-fonts.css', '04012018', true);
    
    /*
    ============================================================================================
    Enable and activate Font Awesome 4.7 locally for Camaraderie WordPress Theme. For more 
    information about Font Awesome, please navigate to the URL for more information. 
    Reference: (http://fontawesome.io/)
    ============================================================================================
    */
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/extras/font-awesome/css/font-awesome.css', '04012018', true);
    
    /*
    ============================================================================================
    Enable and activate (JavaScript/JQuery) to support Navigation Menu for Primary Navigation for 
    Perfect Choice WordPress Theme. This allows you to use click feature for dropdowns and multiple 
    depths, When using this new feature of the navigation. The Menu for mobile side is now at the 
    bottom of the page.
    ============================================================================================
    */
    wp_enqueue_script('perfect-choice-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '04012018', true);
    wp_localize_script('perfect-choice-navigation', 'perfectchoiceScreenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . esc_html__('expand child menu', 'perfect-choice') . '</span>',
		'collapse' => '<span class="screen-reader-text">' . esc_html__('collapse child menu', 'perfect-choice') . '</span>',
	));
}
add_action('wp_enqueue_scripts', 'perfect_choice_enqueue_scripts_styles_setup');

/*
===========================================================================================================
 3.0 - Content Width
===========================================================================================================
*/
function perfect_choice_content_width_setup() {
	$GLOBALS['content_width'] = apply_filters('family_grows_content_width_setup', 800);
}
add_action( 'after_setup_theme', 'perfect_choice_content_width_setup', 0 );

/*
===========================================================================================================
 4.0 - Register Sidebars
===========================================================================================================
*/
function perfect_choice_register_sidebars_setup() {
    
}
add_action('widgets_init', 'perfect_choice_register_sidebars_setup');

/*
===========================================================================================================
 5.0 - Required Files
===========================================================================================================
*/
require_once(get_template_directory() . '/includes/extras.php');