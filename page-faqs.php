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

	<div id="primary" class="content-area faqs">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( !is_front_page() ) { ?>
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<header class="entry-header">
										<h1 class="entry-title"><?php the_title(); ?></h1>
									</header><!-- .entry-header -->
								</div>
							</div>
						</div>
					<?php } ?>

					<div class="entry-content">
						<figure class="faq-page">

							<div class="container">
								<div class="row questions">
									<div class="col-sm-7 left-column">
										<?php the_content(); ?>
									</div>
									<div class="col-sm-4 col-sm-offset-1 right-column">
										<?php if( get_field('faq_image_1') ): ?>

											<?php $image = get_field('faq_image_1'); ?>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										<?php endif; ?>
									</div>
								</div>
							</div>

								<?php if( get_field('faq_answer_1') ): ?>

									<div class="gray">
										<div class="container">
											<div class="row answer one">
												<div class="col-sm-7 left-column">
													<?php $value = get_field('faq_answer_1'); ?>

													<?php echo $value; ?>
												</div>
												<div class="col-sm-4 col-sm-offset-1 right-column">
													<?php if( get_field('answer_image_1') ): ?>

														<?php $image = get_field('answer_image_1'); ?>

														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

													<?php endif; ?>
													<?php if( get_field('answer_1_right_text') ): ?>

														<?php $value = get_field('answer_1_right_text'); ?>

														<h5 class="answer-text-right">
															<?php echo $value; ?>
														</h5>

													<?php endif; ?>
													<?php if( get_field('answer_1_right_btn_href') ): ?>

													<?php $value = get_field('answer_1_right_btn_href'); ?>

													<a href="<?php echo $value; ?>" class="btn button-primary">
														<?php if( get_field('answer_1_right_btn_text') ): ?>

															<?php $value = get_field('answer_1_right_btn_text'); ?>

															<?php echo $value; ?>

														<?php endif; ?>
													</a>

													<?php endif; ?>
												</div>
											</div>

										</div>
									</div>



								<?php endif; ?>

								<?php if( get_field('faq_answer_2') ): ?>

									<div class="container">
										<div class="row answer two">
											<div class="col-sm-7 left-column">
												<?php $value = get_field('faq_answer_2'); ?>

												<?php echo $value; ?>
											</div>
											<div class="col-sm-4 col-sm-offset-1 right-column">
												<?php if( get_field('answer_image_2') ): ?>

													<?php $image = get_field('answer_image_2'); ?>

													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

												<?php endif; ?>
												<?php if( get_field('answer_2_right_text') ): ?>

													<?php $value = get_field('answer_2_right_text'); ?>

													<h5 class="answer-text-right">
														<?php echo $value; ?>
													</h5>

												<?php endif; ?>
												<?php if( get_field('answer_2_right_btn_href') ): ?>

													<?php $value = get_field('answer_2_right_btn_href'); ?>

													<a href="<?php echo $value; ?>" class="btn button-primary">
														<?php if( get_field('answer_2_right_btn_text') ): ?>

															<?php $value = get_field('answer_2_right_btn_text'); ?>

															<?php echo $value; ?>

														<?php endif; ?>
													</a>

												<?php endif; ?>
											</div>
										</div>
									</div>

								<?php endif; ?>

								<?php if( get_field('faq_answer_3') ): ?>

									<div class="gray">
										<div class="container">
											<div class="row answer gray three">
												<div class="col-sm-7 left-column">
													<?php $value = get_field('faq_answer_3'); ?>

													<?php echo $value; ?>
												</div>
												<div class="col-sm-4 col-sm-offset-1 right-column">
													<?php if( get_field('answer_image_3') ): ?>

														<?php $image = get_field('answer_image_3'); ?>

														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

													<?php endif; ?>
													<?php if( get_field('answer_3_right_text') ): ?>

														<?php $value = get_field('answer_3_right_text'); ?>

														<h5 class="answer-text-right">
															<?php echo $value; ?>
														</h5>

													<?php endif; ?>
													<?php if( get_field('answer_3_right_btn_href') ): ?>

														<?php $value = get_field('answer_3_right_btn_href'); ?>

														<a href="<?php echo $value; ?>" class="btn button-primary">
															<?php if( get_field('answer_3_right_btn_text') ): ?>

																<?php $value = get_field('answer_3_right_btn_text'); ?>

																<?php echo $value; ?>

															<?php endif; ?>
														</a>

													<?php endif; ?>
												</div>
											</div>

										</div>
									</div>

								<?php endif; ?>


								<?php if( get_field('faq_answer_4') ): ?>

								<div class="container">
									<div class="row answer four">
										<div class="col-sm-7 left-column">
											<?php $value = get_field('faq_answer_4'); ?>

											<?php echo $value; ?>
										</div>
										<div class="col-sm-4 col-sm-offset-1 right-column">
											<?php if( get_field('answer_image_4') ): ?>

												<?php $image = get_field('answer_image_4'); ?>

												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

											<?php endif; ?>

										</div>
									</div>
								</div>

								<?php endif; ?>

								<?php if( get_field('faq_answer_5') ): ?>

									<div class="gray">
										<div class="container">

											<div class="row answer gray five">
												<div class="col-sm-7 left-column">
													<?php $value = get_field('faq_answer_5'); ?>

													<?php echo $value; ?>
												</div>
												<div class="col-sm-4 col-sm-offset-1 right-column">
													<?php if( get_field('answer_image_5') ): ?>

														<?php $image = get_field('answer_image_5'); ?>

														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

													<?php endif; ?>

												</div>
											</div>

										</div>
									</div>
								<?php endif; ?>




								<?php if( get_field('faq_answer_6') ): ?>

									<div class="container">

										<div class="row answer six">
											<div class="col-sm-7 left-column">
												<?php $value = get_field('faq_answer_6'); ?>

												<?php echo $value; ?>
											</div>
											<div class="col-sm-4 col-sm-offset-1 right-column">
												<?php if( get_field('answer_image_6') ): ?>

													<?php $image = get_field('answer_image_6'); ?>

													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

												<?php endif; ?>
												<?php if( get_field('answer_6_right_text') ): ?>

													<?php $value = get_field('answer_6_right_text'); ?>

													<h5 class="answer-text-right">
														<?php echo $value; ?>
													</h5>

												<?php endif; ?>
												<?php if( get_field('answer_6_right_btn_href') ): ?>

													<?php $value = get_field('answer_6_right_btn_href'); ?>

													<a href="<?php echo $value; ?>" class="btn button-primary">
														<?php if( get_field('answer_6_right_btn_text') ): ?>

															<?php $value = get_field('answer_6_right_btn_text'); ?>

															<?php echo $value; ?>

														<?php endif; ?>
													</a>

												<?php endif; ?>
											</div>
										</div>
									</div>

								<?php endif; ?>

								<?php if( get_field('faq_answer_7') ): ?>

									<div class="gray">
										<div class="container">
											<div class="row answer seven">
												<div class="col-sm-7 left-column">
													<?php $value = get_field('faq_answer_7'); ?>

													<?php echo $value; ?>
												</div>
												<div class="col-sm-4 col-sm-offset-1 right-column">
													<?php if( get_field('answer_image_7') ): ?>

														<?php $image = get_field('answer_image_7'); ?>

														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

													<?php endif; ?>

												</div>
											</div>
										</div>
										<div class="top-50"></div>
										<div class="top-50"></div>
										<div class="top-10"></div>
									</div>

								<?php endif; ?>

						</figure>
					</div><!-- .entry-content -->


				<!-- .entry-meta -->

				</article><!-- #post -->


			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>