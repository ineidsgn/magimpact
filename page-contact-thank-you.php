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
								<header class="entry-header contact-thanks">
									<h1 class="entry-title"><?php the_title(); ?></h1>
								</header><!-- .entry-header -->
							</div>
						</div>
					</div>


					<div class="entry-content">
						<figure class="contact-thanks">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 main-content">
										<?php the_content(); ?>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 left-content">
										<?php echo get_post_meta($post->ID, 'left_content', true) ?>
									</div>
									<div class="col-sm-6 right-content">
										<div class="contacts-column">
											<?php echo get_post_meta($post->ID, 'right_content', true) ?>
										</div>
									</div>
								</div>
							</div>
						</figure>
						<div class="top-50"></div>
						<div class="top-50"></div>
						<div class="top-50 hidden-xs hidden-sm"></div>
					</div><!-- .entry-content -->


				<!-- .entry-meta -->

				</article><!-- #post -->


			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>