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
							<div class="col-md-12">
								<header class="entry-header">
									<h1 class="entry-title"><?php the_title(); ?></h1>
								</header><!-- .entry-header -->
							</div>
						</div>
					</div>

					<div class="entry-content">
						<figure class="services">
							<div class="container">
								<div class="row">
									<div class="col-sm-6">

										<?php echo get_post_meta($post->ID, 'branding_content', true) ?>

									</div>
									<div class="top-50 visible-xs"></div>
									<div class="top-20 visible-xs"></div>
									<div class="col-sm-6">

										<?php echo get_post_meta($post->ID, 'websites_content', true) ?>

									</div>
								</div>

								<div class="top-50"></div>
								<div class="top-20"></div>

								<div class="row">
									<div class="col-sm-6">

										<?php echo get_post_meta($post->ID, 'traffic_building_content', true) ?>

									</div>
									<div class="top-50 visible-xs"></div>
									<div class="top-20 visible-xs"></div>
									<div class="col-sm-6">

										<?php echo get_post_meta($post->ID, 'email_marketing_content', true) ?>

									</div>
								</div>

								<div class="top-50"></div>
								<div class="top-20"></div>

								<div class="row">
									<div class="col-sm-6">

										<?php echo get_post_meta($post->ID, 'lead_generation_content', true) ?>

									</div>
									<div class="top-50 visible-xs"></div>
									<div class="top-20 visible-xs"></div>
									<div class="col-sm-6">

										<?php echo get_post_meta($post->ID, 'social_media_content', true) ?>

									</div>
								</div>

								<div class="top-50"></div>
								<div class="top-20"></div>

								<div class="row mytools-service">

									<div class="col-sm-7 col-md-8 content">
										<?php the_content(); ?>
									</div>
									<div class="col-sm-5 col-md-4 image">
										<?php echo get_post_meta($post->ID, 'mytools_service_img', true) ?>
									</div>

								</div>
								<div class="top-50"></div>
								<div class="top-50"></div>
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