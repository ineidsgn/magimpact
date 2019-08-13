<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<article class="hentry">

				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php if ( !is_front_page() ) { ?>
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<header class="entry-header">
										<h1 class="entry-title">Blog</h1>
									</header><!-- .entry-header -->
								</div>
							</div>
						</div>
					<?php } ?>



					<div class="entry-content">
						<figure class="blog-article">
							<div class="container">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-1 col-sm-push-3">
										<?php get_template_part( 'content', get_post_format() ); ?>
										<div class="top-10 visible-xs"></div>
										<h2>
											<?php if( get_field('further_reading_title',44) ): ?>

												<?php $value = get_field('further_reading_title',44); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</h2>
										<div class="top-5 visible-xs"></div>
										<p class="post-topics">Topics: <?php magimpact_entry_tags(); ?></p>

										<?php zemanta_related_posts();?>
										<div class="top-30 hidden-sm hidden-320"></div>
										<div class="top-10 hidden-sm hidden-xs"></div>
										<div class="top-5 hidden-xs"></div>
										<?php
										if (comments_open()) { ?>
											<h2>
												<?php if( get_field('comments_title',44) ): ?>

													<?php $value = get_field('comments_title',44); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</h2>
										<?php }	?>


										<?php comments_template(); ?>

									</div>
									<div class="col-sm-3 col-sm-pull-9">
										<?php get_template_part( 'blog-sidebar' ); ?>
									</div>
								</div>

							</div>
							<div class="top-50"></div>
							<div class="top-50"></div>
							<div class="top-10"></div>
						</figure>
					</div><!-- .entry-content -->

				</article><!-- #post -->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->





<?php get_sidebar(); ?>
<?php get_footer(); ?>