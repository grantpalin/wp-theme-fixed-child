<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fixed Child
 * @since 1.0
 */
get_header(); ?>

		<div id="content">
			<div class="posts">
				<?php if( is_search() ) : ?>
					<h1 class="archive-title"><i class="fa fa-search"></i> <?php printf( __( 'Search Results for: %s', 'fixed' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php elseif( is_tag() ) : ?>
					<h1 class="archive-title"><i class="fa fa-tag"></i> <?php single_tag_title(); ?></h1>
				<?php elseif( is_day() ) : ?>
					<h1 class="archive-title"><i class="fa fa-time"></i> <?php _e( 'Archive:', 'fixed' ); ?> <?php echo get_the_date(); ?></h1>
				<?php elseif( is_month() ) : ?>
					<h1 class="archive-title"><i class="fa fa-clock-o"></i> <?php echo get_the_date( 'F Y' ); ?></h1>
				<?php elseif( is_year() ) : ?>
					<h1 class="archive-title"><i class="fa fa-clock-o"></i> <?php echo get_the_date( 'Y' ); ?></h1>
				<?php elseif( is_category() ) : ?>
					<h1 class="archive-title"><i class="fa fa-folder-open"></i> <?php single_cat_title(); ?></h1>
				<?php elseif( is_author() ) : ?>
					<h1 class="archive-title"><i class="fa fa-pencil"></i> <?php the_post(); printf( __( 'Author: %s', 'publisher' ), '' . get_the_author() . '' ); rewind_posts(); ?></h1>
				<?php endif; ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article <?php post_class( 'post' ); ?>>
					<?php
						if( in_array( get_post_format(), array( 'aside', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) ) ) :
							get_template_part( 'format', get_post_format() );
						else :
							get_template_part( 'format', 'standard' );
						endif;

						if( ! is_page() ) : ?>
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
					<?php endif; ?>
				</article><!-- .post -->

				<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- .posts -->

			<?php fixed_page_nav(); ?>

			<?php if( is_single () ) : ?>
				<?php if ( 'open' == $post->comment_status ) : ?>
				<div id="comment-jump" class="comments">
					<?php comments_template(); ?>
				</div><!-- .comments -->
				<?php endif; ?>
			<?php endif; ?>

			<?php if (is_singular('post')): ?>
				<nav class="post-pagination">
				<?php if(get_previous_post()): ?>
					<div class="nav-previous">
						<?php previous_post_link('%link', '<span>Previous:</span>%title'); ?>
					</div><!-- .nav-previous -->
				<?php
				endif;
				if (get_next_post()):
				?>
					<div class="nav-next">
						<?php next_post_link('%link', '<span>Next:</span>%title'); ?>
					</div><!-- .nav-next -->
				<?php endif; ?>
				</nav><!-- .post-pagination -->
			<?php endif; ?>
		</div><!-- .content -->

		<?php get_footer(); ?>
