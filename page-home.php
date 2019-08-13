<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">

						<figure class="home-page">
							<div class="finding-success">
								<div class="container">
									<div class="row">
										<div class="col-md-1 hidden-sm hidden-xs"></div>
										<div class="col-md-10 text-center message-block">

											<h4>
												<?php if( get_field('home_top_title') ): ?>

													<?php $value = get_field('home_top_title'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</h4>

											<a href="
												<?php if( get_field('home_top_block_button_href') ): ?>

													<?php $value = get_field('home_top_block_button_href'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											" class="btn get-guide-button">
												<?php if( get_field('home_top_button_text') ): ?>

													<?php $value = get_field('home_top_button_text'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</a>

										</div>
										<div class="col-md-1 hidden-sm hidden-xs"></div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="top-40 hidden-xs"></div>
								<div class="top-20"></div>
								<div class="top-10 hidden-sm"></div>
								<div class="row">
									<div class="col-sm-12 text-center">
										<h4 class="content-title">
											<?php if( get_field('home_page_content_title') ): ?>

												<?php $value = get_field('home_page_content_title'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</h4>
									</div>
								</div>
								<div class="top-15"></div>
								<div class="top-15 hidden-sm hidden-xs"></div>
								<div class="row">
									<div class="col-md-2 col-sm-2"></div>
									<div class="col-md-5 col-sm-5 home-page-content">
										<?php the_content(); ?>
									</div>
									<div class="top-30 visible-xs"></div>
									<div class="right-column-content col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0">
										<?php if( get_field('home_page_content_right_column') ): ?>

											<?php $image = get_field('home_page_content_right_column'); ?>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										<?php endif; ?>
									</div>
									<div class="col-sm-1"></div>
								</div>
							</div>
							<div class="top-50"></div>
							<div class="top-30"></div>
							<div class="top-20 hidden-sm"></div>
							<div class="top-10 visible-xs"></div>
							<div class="container-fluid beautiful-website">
								<div class="row">
									<div class="col-sm-2 visible-sm"></div>
									<div class="col-md-12 col-sm-8 text-center text-container">
										<h4>
											<?php if( get_field('home_page_bottom_title') ): ?>

												<?php $value = get_field('home_page_bottom_title'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</h4>
										<div class="top-20"></div>
										<a href="
											<?php if( get_field('home_page_bottom_button_href') ): ?>

												<?php $value = get_field('home_page_bottom_button_href'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										" class="btn get-guide-button">
											<?php if( get_field('home_page_bottom_button_text') ): ?>

												<?php $value = get_field('home_page_bottom_button_text'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</a>

									</div>
									<div class="col-sm-2 visible-sm"></div>
								</div>
							</div>
						</figure>



					</div><!-- .entry-content -->

				<!-- .entry-meta -->

				</article><!-- #post -->


			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>