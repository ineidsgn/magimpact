<?php /* Template Name: Sales page */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<figure class="shop-page">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-10 col-sm-offset-1 intro-title">
										<h1>
											<?php if( get_field('page_title') ): ?>

												<?php $value = get_field('page_title'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</h1>
										<?php the_content(); ?>
										<div class="top-20"></div>
										<div class="top-10 hidden-xs"></div>
										<div class="top-20 visible-lg"></div>
										<div class="top-15"></div>
									</div>
								</div>
							</div>
							<div class="choose-option">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 text-center">
											<h1>
												<?php if( get_field('call_to_action_text') ): ?>

													<?php $value = get_field('call_to_action_text'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</h1>

										</div>
									</div>
								</div>
							</div>
							<div id="pricing_anchor"></div>
							<div class="container option-list">
								<div class="row">
									<div class="col-sm-4 col-xs-12 option-box text-center">
										<div class="option-title-price">
											<p class="option-title">
												<?php if( get_field('shop_item_1_title') ): ?>

													<?php $value = get_field('shop_item_1_title'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-price">
												<?php if( get_field('shop_item_1_price') ): ?>

													<?php $value = get_field('shop_item_1_price'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-caption">
												<?php if( get_field('shop_item_1_price_caption') ): ?>

													<?php $value = get_field('shop_item_1_price_caption'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-offer">
												<?php if( get_field('shop_item_1_offer_line_1') ): ?>

													<?php $value = get_field('shop_item_1_offer_line_1'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-offer-2">
												<?php if( get_field('shop_item_1_offer_line_2') ): ?>

													<?php $value = get_field('shop_item_1_offer_line_2'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
										</div>
										<div class="option-short-desc">
											<p>
												<?php if( get_field('shop_item_1_short_desc') ): ?>

													<?php $value = get_field('shop_item_1_short_desc'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
										</div>
										<div class="option-details">
											<?php if( get_field('shop_item_1_details') ): ?>

												<?php $value = get_field('shop_item_1_details'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</div>
										<div class="option-button">
											<?php if( get_field('shop_item_1_purchase_button_text') ): ?>
												<a href="
												<?php if( get_field('shop_item_1_id') ): ?>

													<?php $value = get_field('shop_item_1_id'); ?>

													<?php echo home_url()."/cart/?add-to-cart=".$value; ?>

												<?php endif; ?>
												" class="btn button-purchase btn-block">

														<?php $value = get_field('shop_item_1_purchase_button_text'); ?>

														<?php echo $value; ?>&nbsp;&raquo;

												</a>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12 option-box popular text-center">
										<div class="most-popular-title">
											<?php if( get_field('most_popular_text') ): ?>

												<?php $value = get_field('most_popular_text'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</div>
										<div class="option-title-price">
											<p class="option-title">
												<?php if( get_field('shop_item_2_title') ): ?>

													<?php $value = get_field('shop_item_2_title'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-price">
												<?php if( get_field('shop_item_2_price') ): ?>

													<?php $value = get_field('shop_item_2_price'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-caption">
												<?php if( get_field('shop_item_2_price_caption') ): ?>

													<?php $value = get_field('shop_item_2_price_caption'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-offer">
												<?php if( get_field('shop_item_2_offer_line_1') ): ?>

													<?php $value = get_field('shop_item_2_offer_line_1'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-offer-2">
												<?php if( get_field('shop_item_2_offer_line_2') ): ?>

													<?php $value = get_field('shop_item_2_offer_line_2'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
										</div>
										<div class="option-short-desc">
											<p>
												<?php if( get_field('shop_item_2_short_desc') ): ?>

													<?php $value = get_field('shop_item_2_short_desc'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
										</div>
										<div class="option-details">
											<?php if( get_field('shop_item_2_details') ): ?>

												<?php $value = get_field('shop_item_2_details'); ?>

												<?php echo $value; ?>

											<?php endif; ?>

										</div>
										<div class="option-button">
											<?php if( get_field('shop_item_2_purchase_button_text') ): ?>
												<a href="
												<?php if( get_field('shop_item_2_id') ): ?>

													<?php $value = get_field('shop_item_2_id'); ?>

													<?php echo home_url()."/cart/?add-to-cart=".$value; ?>

												<?php endif; ?>
												" class="btn button-purchase btn-block">

														<?php $value = get_field('shop_item_2_purchase_button_text'); ?>

														<?php echo $value; ?>&nbsp;&raquo;

												</a>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12 option-box text-center">
										<div class="option-title-price">
											<p class="option-title">
												<?php if( get_field('shop_item_3_title') ): ?>

													<?php $value = get_field('shop_item_3_title'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-price">
												<?php if( get_field('shop_item_3_price') ): ?>

													<?php $value = get_field('shop_item_3_price'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-caption">
												<?php if( get_field('shop_item_3_price_caption') ): ?>

													<?php $value = get_field('shop_item_3_price_caption'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-offer">
												<?php if( get_field('shop_item_3_offer_line_1') ): ?>

													<?php $value = get_field('shop_item_3_offer_line_1'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
											<p class="option-offer-2">
												<?php if( get_field('shop_item_3_offer_line_2') ): ?>

													<?php $value = get_field('shop_item_3_offer_line_2'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
										</div>
										<div class="option-short-desc">
											<p>
												<?php if( get_field('shop_item_3_short_desc') ): ?>

													<?php $value = get_field('shop_item_3_short_desc'); ?>

													<?php echo $value; ?>

												<?php endif; ?>
											</p>
										</div>
										<div class="option-details">
											<?php if( get_field('shop_item_3_details') ): ?>

												<?php $value = get_field('shop_item_3_details'); ?>

												<?php echo $value; ?>

											<?php endif; ?>

										</div>
										<div class="option-button">
											<?php if( get_field('shop_item_3_purchase_button_text') ): ?>
												<a href="
												<?php if( get_field('shop_item_3_id') ): ?>

													<?php $value = get_field('shop_item_3_id'); ?>

													<?php echo home_url()."/cart/?add-to-cart=".$value; ?>

												<?php endif; ?>
												" class="btn button-purchase btn-block">

														<?php $value = get_field('shop_item_3_purchase_button_text'); ?>

														<?php echo $value; ?>&nbsp;&raquo;

												</a>
											<?php endif; ?>
										</div>

									</div>
								</div>
							</div>

						<?php if( get_field('text_beneath') ): ?>
							<div class="top-50"></div>
							<div class="container">
								<div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
									<?php $value = get_field('text_beneath'); ?>
									<?php echo $value; ?>
								</div>
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