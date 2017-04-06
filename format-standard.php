<?php
/**
 * Template for standard posts.
 *
 * @package Fixed Child
 * @since 1.0
 */
					// grab the featured image if one specified
					if ( has_post_thumbnail() ) : ?>
						<a class="featured-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large-image' ); ?></a>
					<?php endif; ?>

					<div class="box-wrap">
						<div class="box">
							<div class="format-standard post-content">
								<header>
									<?php if( is_single() ) : ?>
										<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<?php else : ?>
										<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php endif; ?>
								</header>

								<?php if( is_search() || is_archive() || is_home() ) : ?>
									<div class="excerpt-more">
										<?php the_excerpt( __( 'Read More', 'fixed' ) ); ?>
									</div>
								<?php else : ?>
									<?php the_content( __( 'Read More', 'fixed' ) ); ?>

									<?php if( is_single() ) : ?>
										<div class="pagelink">
											<?php wp_link_pages(); ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>
							</div><!-- .post-content -->
						</div><!-- .box -->
					</div><!-- .box-wrap -->
