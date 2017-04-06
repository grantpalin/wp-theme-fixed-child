<?php
/**
 * Template for video posts.
 *
 * @package Fixed Child
 * @since 1.0
 */
					if ( get_post_meta( $post->ID, '_format_video_embed', true ) ) : ?>
						<div class="fitvid">
							<?php echo get_post_meta( $post->ID, '_format_video_embed', true ); ?>
						</div>
					<?php endif; ?>

					<div class="box-wrap">
						<div class="box">
							<div class="format-video post-content">
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
