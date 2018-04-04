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
        </div>
    </section>
    <?php if (has_nav_menu('social-navigation')) { ?>
        <div id="site-social" class="site-social">
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'social-navigation',
                    'container'         => 'nav',
                    'container_id'      => 'menu-social',
                    'container_class'   => 'menu-social',
                    'menu_id'           => 'menu-social-items',
                    'menu_class'        => 'menu-items',
                    'depth'             => 1,
                    'link_before'       => '<span class="screen-reader-text">',
                    'link_after'        => '</span>',
                    'fallback_cb'       => '',
                ));                                  
            ?>
        </div>
    <?php } ?>
    <footer id="site-footer" class="site-footer">
		<div id="site-info" class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'perfect-choice')); ?>">
                <?php printf(esc_html__('Proudly Powered by %s', 'perfect-choice'), 'WordPress'); ?>
            </a>
            <br />
			<?php printf(esc_html__('Theme: %1$s by %2$s.', 'perfect-choice' ), 'Perfect Choice', '<a href="https://www.benjlu.com/">Benjamin Lu</a>');
			?>
		</div><!-- .site-info -->
    </footer>
    <?php wp_footer(); ?>
</body>
</html>