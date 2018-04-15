<?php
/*
===============================================================================================================
Perfect Choice - index.php
===============================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files for a theme 
(the other being style.css). The index.php template file is flexible. It can be used to include all references 
to the header, content, widget, footer and any other pages created in WordPress. Or it can be divided into 
modular template files, each taking on part of the workload. If you do not provide other template files, 
WordPress may have default files or functions to perform their jobs.

@package        Perfect Choice WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
===============================================================================================================
*/
?>
<?php get_header(); ?>
    <div id="content-area" class="content-area">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', get_post_format()); ?>
        <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
    <?php if ('left-sidebar' == get_theme_mod('global_layout')) { ?>
        <?php get_sidebar(); ?>
    <?php } else if ('right-sidebar' == get_theme_mod('global_layout')) { ?>
        <?php get_sidebar(); ?>
    <?php } ?>
<?php get_footer(); ?>