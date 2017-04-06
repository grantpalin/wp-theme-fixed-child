<?php
/**
 * Template for quote posts.
 *
 * @package Fixed Child
 * @since 1.0
 */
?>
					<div class="box-wrap">
						<div class="box">
							<div class="format-quote post-content">
								<figure class="quote">
								<?php the_content();

								$source = get_post_meta($post->ID, '_format_quote_source_name', true);
								$sourceUrl = get_post_meta($post->ID, '_format_quote_source_url', true);

								if ($source && !$sourceUrl) : ?>
									<figcaption class="quote-source"><?php echo $source; ?></figcaption>
								<?php elseif (!$source && $sourceUrl): ?>
									<figcaption class="quote-source"><a href="<?php echo $sourceUrl; ?>"><?php echo $sourceUrl; ?></a></figcaption>
								<?php elseif ($source && $sourceUrl): ?>
									<figcaption class="quote-source"><a href="<?php echo $sourceUrl; ?>"><?php echo $source; ?></a></figcaption>
								<?php endif; ?>
								</figure>
							</div><!-- .post-content -->
						</div><!-- .box -->
					</div><!-- .box-wrap -->
