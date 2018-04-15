<?php
/*
================================================================================================
Perfect Choice - jetpack.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the required file for
a theme. The jetpack.php template file allows you to enable certain features within jetpack's
plugin. In this case, the only feature is supported in this theme is portfolio feature. 

@package        Perfect Choice WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/

/*
================================================================================================
Table of Content
================================================================================================
 1.0 - Jetpack Setup
================================================================================================
*/

/*
================================================================================================
 1.0 - Jetpack Setup
================================================================================================
*/
function perfect_choice_jetpack_setup() {
    add_theme_support('jetpack-responsive-videos');
}
add_action('after_setup_theme', 'perfect_choice_jetpack_setup');
