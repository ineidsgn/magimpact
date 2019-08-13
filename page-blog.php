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

					<?php if ( !is_front_page() ) { ?>
						<div class="container">
							<div class="row">
								<div class="col-sm-11 col-sm-offset-1">
									<header class="entry-header">
										<h1 class="entry-title"><?php the_title(); ?></h1>
									</header><!-- .entry-header -->
								</div>
							</div>
						</div>
					<?php } ?>

					<div class="entry-content">
						<figure class="blog-page">
							<div class="container">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-1">
										<div class="top-10 visible-xs hidden-320"></div>
										<h2>
											<?php if( get_field('tags_title') ): ?>

												<?php $value = get_field('tags_title'); ?>

												<?php echo $value; ?>

											<?php endif; ?>
										</h2>
										<div class="row blog-tags">
											<?php
											$tags = get_tags(array('orderby' => 'name', 'order' => 'ASC'));
											$html = '';
											$tag_pos = 0;
											$html .= '<div class="col-sm-4">';

											foreach ( $tags as $tag ) {
												$tag_pos++;
												$tag_link = get_tag_link( $tag->term_id );

												$html .= "<span class='blog-tag'><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>{$tag->name}</a></span>";

												if (($tag_pos == ceil((count($tags)/3))) || ($tag_pos == ceil((count($tags)*2/3)))) {
													$html .= '</div><div class="col-sm-4">';
												}

											}

											$html .= '</div>';

											echo $html;
											?>
										</div>
										<div class="top-50"></div>
										<div class="top-10"></div>
										<div class="top-20 visible-xs visible-sm"></div>
									</div>

									<div class="col-sm-10 col-sm-offset-1 blog-items">
										<div class="row">
											<div class="col-md-6">
												<?php if( get_field('category_1_name') ): ?>

													<?php

													$value1 = get_field('category_1_name');
													?>

													<h2>
														<?php echo $value1; ?>
													</h2>
													<div class="top-5"></div>

													<?php

													$category_id1 = get_cat_ID($value1);

													if ($category_id1) {

														$args = array('numberposts' => '3', 'category' => $category_id1, 'post_status' => 'publish');
														$recent_posts = wp_get_recent_posts($args);

														$html = '';
														foreach ($recent_posts as $recent) {
															$html .= '<div class="blog-recent clearfix">';
															if (has_post_thumbnail($recent["ID"]) && !post_password_required($recent)) :
																$html .= '<div class="image-parent"><div class="image-container"><img src="' . get_the_post_thumbnail_url($recent["ID"], array(300, 200)) . '"/></div></div>';
															endif;
															$html .= '<div class="link-date"><a href="' . get_permalink($recent["ID"]) . '">' . (__($recent["post_title"])) . '</a><span>' . mysql2date('M j, Y', $recent["post_date"]) . '</span></div>';
															$html .= '</div>';
															//$html .= var_dump($recent);
														}

														wp_reset_postdata();

														echo $html;
													}
													?>

												<?php endif; ?>

												<div class="top-20"></div>
												<div>
													<a class="read-more btn button-primary" href="<?php echo get_category_link( $category_id1 ); ?> ">READ MORE <nobr>"<?php echo $value1; ?>"</nobr></a>
												</div>
											</div>
											<div class="top-50 visible-xs visible-sm"></div>
											<div class="top-30 visible-xs visible-sm"></div>
											<div class="top-5 visible-xs visible-sm"></div>
											<div class="top-10 visible-xs"></div>
											<div class="col-md-6">
												<?php if( get_field('category_2_name') ): ?>

													<?php

													$value2 = get_field('category_2_name');
													?>

													<h2>
														<?php echo $value2; ?>
													</h2>
													<div class="top-5"></div>

													<?php

													$category_id2 = get_cat_ID($value2);

													if ($category_id2) {
														$args = array( 'numberposts' => '3', 'category' => $category_id2, 'post_status' => 'publish' );
														$recent_posts = wp_get_recent_posts( $args );

														$html = '';
														foreach( $recent_posts as $recent ){
															$html .= '<div class="blog-recent clearfix">';
															if ( has_post_thumbnail($recent["ID"]) && ! post_password_required($recent) ) :
																$html .= '<div class="image-parent"><div class="image-container"><img src="'. get_the_post_thumbnail_url( $recent["ID"], array(300, 200) ) .'"/></div></div>';
															endif;
															$html .= '<div class="link-date"><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a><span>'. mysql2date('M j, Y', $recent["post_date"]) .'</span></div>';
															$html .= '</div>';
															//$html .= var_dump($recent);
														}

														wp_reset_postdata();

														echo $html;
													}

													?>

												<?php endif; ?>
												<div class="top-20"></div>
												<div>
													<a class="read-more btn button-primary" href="<?php echo get_category_link( $category_id2 ); ?> ">READ MORE <nobr>"<?php echo $value2; ?>"</nobr></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="top-50"></div>
							<div class="top-50"></div>
							<div class="top-10"></div>
						</figure>
					</div><!-- .entry-content -->


				<!-- .entry-meta -->

				</article><!-- #post -->


			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>