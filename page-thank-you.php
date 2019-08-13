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
						<figure class="thank-you-page">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="entry-title">
											<?php the_title(); ?>
										</h2>
										<div class="top-20"></div>
										<div class="top-10 hidden-xs hidden-sm hidden-md hidden-lg visible-320"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 content-text">
										<?php the_content(); ?>
										<div class="top-10 hidden-320"></div>
										<div class="top-15 hidden-320"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<h4 class="text-center">FREE BONUS!</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<p class="text-center">As a magIMPACT customer, you are eligble to join the...</p>
										<div class="top-15 hidden-320"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<p class="text-center">
											<?php if( get_field('thank_you_image') ): ?>

												<?php $image = get_field('thank_you_image'); ?>

												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title=""/>

											<?php endif; ?>
										</p>
										<div class="top-10 hidden-320"></div>
										<div class="top-10 hidden-320"></div>
										<div class="top-5"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="marketing-club">
											<a href="https://www.facebook.com/groups/magimpact.marketing.club" target="_blank">magIMPACT Marketing Club</a>
											<p>Private Facebook Group</p>
										</div>
										<div class="top-10"></div>
										<div class="top-10 hidden-xs hidden-sm hidden-md hidden-lg visible-320"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<p class="club-desc">Our Marketing Club is an online water cooler for our community of business owners and marketing stuff. We encourage you to: </p>
										<ul class="thankyou-list">
											<li>Network</li>
											<li>Ask questions</li>
											<li>Share ideas</li>
											<li>Help each other solve problems</li>
											<li>Keep each other informed of accomplishments and successful actions</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 text-center">
										<a href="https://www.facebook.com/groups/magimpact.marketing.club" target="_blank" class="btn btn-block button-primary join-button">JOIN THE CLUB FOR FREE TODAY!</a>
									</div>
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