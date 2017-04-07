<?php
/**
 * The blog page template.
 *
 * This is used when a specific page is selected to show the main posts listing via Settings -> Reading.
 *
 * @package Fixed Child
 * @since 1.0
 */
get_header(); ?>

		<div id="content">
			<div class="posts">
				<h1 class="archive-title"><i class="fa fa-folder-open"></i> <?php _e( 'Blog Archive', 'fxdchld' ); ?></h1>
				<?php if(!is_paged()): // only show the following markup on the first page ?>
				<div class="browse browse-chronological">
					<h2>Browse by Month & Year</h2>

					<?php if (function_exists( 'compact_archive' )) : ?>
					<ul>
					<?php compact_archive($style='block', $before='<li class="year">', $after='</li>'); ?>
					</ul>
					<?php endif; ?>
				</div><!-- .browse.browse-chronological

				--><div class="browse browse-categories">
					<h2>Browse by Category</h2>

					<ul class="categories-list">
					<?php wp_list_categories(array(
						'title_li' => ''
					)); ?>
					</ul>
				</div><!-- .browse.browse-categories -->

				<hr>

				<h2>Recent Posts</h2>
				<?php
				endif; // checking whether on first page

				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article <?php post_class( 'post' ); ?>>
					<?php
						if( in_array( get_post_format(), array( 'aside', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) ) ) :
							get_template_part( 'format', get_post_format() );
						else :
							get_template_part( 'format', 'standard' );
						endif; ?>
					<ul class="meta">
						<li><span><?php _e( 'Date', 'fixed' ); ?></span> <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></li>
						<li><span><?php _e( 'Author', 'fixed' ); ?></span> <?php the_author_posts_link(); ?></li>
						<li><span><?php _e( 'Category', 'fixed' ); ?></span> <?php the_category(' '); ?></li>
						<?php $posttags = get_the_tags();
						if ( $posttags ) : ?>
							<li><span><?php _e( 'Tag', 'fixed' ); ?></span> <?php the_tags('', ' ', ''); ?></li>
						<?php endif; ?>
						<li><span><?php _e( 'Comments', 'fixed' ); ?></span> <a href="<?php the_permalink(); ?>#comments-title"><?php comments_number( __( 'No Comments', 'fixed' ), __( '1 Comment', 'fixed' ), __( '% Comments', 'fixed' ) );?></a></li>
					</ul><!-- .meta -->
				</article><!-- .post -->

				<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- .posts -->

			<?php fixed_page_nav(); ?>

		</div><!-- .content -->

		<?php get_footer(); ?>
