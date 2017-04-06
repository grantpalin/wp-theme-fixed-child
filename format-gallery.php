<?php
/**
 * Template for gallery posts.
 *
 * @package Fixed Child
 * @since 1.0
 */
					if( function_exists( 'array_gallery' ) ) :
						array_gallery();
					endif; ?>

					<div class="box-wrap">
						<div class="box">
							<div class="format-gallery post-content">
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
								<?php else :
									the_content( __( 'Read More', 'fixed' ) );
								endif; ?>
							</div><!-- .post-content -->
						</div><!-- .box -->
					</div><!-- .box-wrap -->
