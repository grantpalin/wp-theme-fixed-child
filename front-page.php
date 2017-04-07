<?php
/**
 * The front page template.
 *
 * This is used when a static page is specified for the site homepage via Settings -> Reading.
 *
 * @package Fixed Child
 * @since 1.0
 */
get_header(); ?>

		<div id="content">
			<div class="posts">
				<div class="home-widget-container">
					<?php dynamic_sidebar( 'home_widgets' ); ?>
				</div>
			</div><!-- .posts -->
		</div><!-- .content -->

		<?php get_footer(); ?>
