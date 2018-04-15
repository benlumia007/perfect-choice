<?php
/*
===========================================================================================================
Perfect Choice - extras.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the required file for a theme. 
This extras.php template file allows you to add additional features and functionality to a WordPress theme 
which is stored in the extras folder and its called in the functions.php

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
 1.0 - Pingback Setup
 2.0 - Post Thumbnail Setup
 3.0 - Excerpt Length Setup
 4.0 - Breadcrumb Trail Setup
===========================================================================================================
*/

/*
===========================================================================================================
 1.0 - Pingback Setup
===========================================================================================================
*/
function perfect_choice_pingback_setup() {
    /*
    =======================================================================================================
    A pingback is a type of comment that is created when you link to another blog post where pingbacks are
    enabled. The best way to think about pingbacks is remote comments.
    =======================================================================================================
    */
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'perfect_choice_pingback_setup');

/*
===========================================================================================================
 2.0 - Post Thumbnail Setup
===========================================================================================================
*/
function perfect_choice_unset_has_post_thumbnail($classes) {
    $class_key = array_search('has-post-thumbnail', $classes);
    if (is_singular() || is_post_type_archive('jetpack-portfolio') || is_post_type_archive('jetpack-testimonial')) {
        unset($classes[$class_key]);
    }     
    return $classes;
}
add_filter('post_class', 'perfect_choice_unset_has_post_thumbnail');

/*
===========================================================================================================
 3.0 - Excerpt Length Setup
===========================================================================================================
*/

/*
===========================================================================================================
 4.0 - Breadcrumb Trail Setup
===========================================================================================================
*/