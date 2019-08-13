<?php
/**
 * The template for displaying Author archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<article class="hentry">

				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<header class="entry-header">
								<h1 class="entry-title">Blog</h1>
							</header><!-- .entry-header -->
						</div>
					</div>
				</div>


				<div class="entry-content">

					<div class="container">
						<div class="row">
							<div class="col-sm-9 col-md-8 col-md-offset-1 col-sm-push-3">
								<figure class="blog-listing">

									<?php if ( have_posts() ) : ?>

										<?php
										/*
										 * Queue the first post, that way we know what author
										 * we're dealing with (if that is the case).
										 *
										 * We reset this later so we can run the loop
										 * properly with a call to rewind_posts().
										 */
										the_post();
										?>

										<header>
											<h2 class="search-query">
												<?php printf( __( 'All posts by %s', 'twentythirteen' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?>
											</h2>
										</header>

										<?php
										/*
										 * Since we called the_post() above, we need to
										 * rewind the loop back to the beginning that way
										 * we can run the loop properly, in full.
										 */
										rewind_posts();
										?>

										<?php /* The loop */ ?>
										<?php while ( have_posts() ) : the_post(); ?>
											<?php get_template_part( 'content', get_post_format() ); ?>
										<?php endwhile; ?>

										<?php twentythirteen_paging_nav(); ?>

									<?php else : ?>
										<?php get_template_part( 'content', 'none' ); ?>
									<?php endif; ?>

								</figure>

							</div>
							<div class="col-sm-3 col-sm-pull-9">
								<figure class="blog-article">
									<?php get_template_part( 'blog-sidebar' ); ?>
								</figure>
							</div>
						</div>

					</div>
					<div class="top-50"></div>
					<div class="top-50"></div>
					<div class="top-10"></div>

				</div><!-- .entry-content -->

			</article><!-- #post -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
