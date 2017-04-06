<?php
/**
 * Template for link posts.
 *
 * @package Fixed Child
 * @since 1.0
 */

					if ( has_post_thumbnail() ) : ?>
					<a class="featured-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large-image' ); ?></a>
					<?php endif; ?>

					<div class="box-wrap">
						<div class="box">
							<div class="format-link post-content">
								<header>
									<?php if( is_single() ) : ?>
										<h1 class="entry-title"><a href="<?php echo get_post_meta($post->ID, '_format_link_url', true); ?>"><?php the_title(); ?></a></h1>
									<?php else : ?>
										<h2 class="entry-title"><a href="<?php echo get_post_meta($post->ID, '_format_link_url', true); ?>"><?php the_title(); ?></a></h2>
									<?php endif; ?>
								</header>
								<?php the_content(); ?>
							</div><!-- .post-content -->
						</div><!-- .box -->
					</div><!-- .box-wrap -->
