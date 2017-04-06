<?php
/**
 * Template for aside posts.
 *
 * @package Fixed Child
 * @since 1.0
 */
?>
					<div class="box-wrap">
						<div class="box">
							<div class="format-aside post-content">
								<header>
									<?php if( is_single() ) : ?>
										<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<?php else : ?>
										<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<?php endif; ?>
								</header>

								<?php the_content( __( 'Read More', 'fixed' ) ); ?>
							</div><!-- .post-content -->
						</div><!-- .box -->
					</div><!-- .box-wrap -->
