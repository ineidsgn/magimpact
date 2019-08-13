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

					<div class="container">
						<div class="row">
							<div class="col-sm-11 col-sm-offset-1">
								<header class="entry-header">
									<h1 class="entry-title"><?php the_title(); ?></h1>
								</header><!-- .entry-header -->
							</div>
						</div>
					</div>

					<div class="entry-content">
						<figure class="our-story">
							<div class="container">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-1 main-content">
										<h2>
											<?php if( get_field('main_content_title') ): ?>

												<?php $value = get_field('main_content_title'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</h2>
									</div>
									<div class="col-sm-5">

										<div id="story-slider" class="slider-column">
											<img src="<?php echo get_stylesheet_directory_uri();?>/img/ourstory_ph.jpg " title=""/>
											<div class="slide slide0">
												<?php if( get_field('right_image_1') ): ?>

													<?php $image = get_field('right_image_1'); ?>

													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="" />

												<?php endif; ?>
											</div>
											<div class="slide slide1" style="display: none;">
												<?php if( get_field('right_image_2') ): ?>

													<?php $image = get_field('right_image_2'); ?>

													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title=""/>

												<?php endif; ?>
											</div>
											<div class="slide slide2" style="display: none;">
												<?php if( get_field('right_image_3') ): ?>

													<?php $image = get_field('right_image_3'); ?>

													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title=""/>

												<?php endif; ?>
											</div>

										</div>
										<div class="top-15 visible-xs"></div>

									</div>

									<div class="col-sm-6 col-sm-offset-1">
										<div class="top-40 visible-xs"></div>
										<div class="top-10 visible-xs hidden-320"></div>
										<?php the_content(); ?>
										<div class="top-30"></div>
										<div class="top-5"></div>
										<div class="top-10 hidden-320"></div>
										<div class="top-15 hidden-320"></div>
									</div>

								</div>
								<div class="top-10"></div>
							</div>
							<div class="container-fluid clients-logos">
								<div class="row">
									<div class="col-md-12">
										<h2>
											<?php if( get_field('customers_title') ): ?>

												<?php $value = get_field('customers_title'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</h2>
										<?php if( get_field('customers_image_1') ): ?>

											<?php $image = get_field('customers_image_1'); ?>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										<?php endif; ?>
										<?php if( get_field('customers_image_2') ): ?>

											<?php $image = get_field('customers_image_2'); ?>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-1 about-founder">
										<div class="top-5"></div>
										<?php if( get_field('founder_content') ): ?>

											<?php $value = get_field('founder_content'); ?>

											<?php echo $value; ?>

										<?php endif; ?>
									</div>
									<div class="col-sm-3 col-sm-offset-1 founder-column">
										<div class="founder-image">
											<div class="row">
												<div class="col-md-12">
													<?php if( get_field('founder_image') ): ?>

														<?php $image = get_field('founder_image'); ?>

														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

													<?php endif; ?>
												</div>
											</div>
											<div class="top-40 visible-md visible-lg"></div>
											<div class="top-20 visible-sm visible-xs"></div>
											<div class="top-5 visible-sm visible-xs"></div>
											<div class="row">
												<div class="col-xs-9 col-lg-9 col-md-12 col-sm-12 founder-name">
													<?php if( get_field('founder_name_title') ): ?>

														<?php $value = get_field('founder_name_title'); ?>

														<?php echo $value; ?>

													<?php endif; ?>
												</div>
												<div class="col-xs-3 col-lg-3 col-md-12 col-sm-12 founder-in">
													<div class="top-5 visible-sm"></div>
													<a href="
														<?php if( get_field('founder_in_link') ): ?>

															<?php $value = get_field('founder_in_link'); ?>

															<?php echo $value; ?>

														<?php endif; ?>
													">
														<span class="fa-stack fa-lg">
															<i class="fa fa-circle fa-stack-2x"></i>
															<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
														</span>
													</a>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 founder-brief top-10">
													<?php if( get_field('founder_brief') ): ?>

														<?php $value = get_field('founder_brief'); ?>

														<?php echo $value; ?>

													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="top-50 hidden-xs hidden-sm"></div>
								<div class="top-20 hidden-320"></div>
								<div class="top-30"></div>
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