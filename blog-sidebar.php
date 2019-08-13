<figure class="blog-article">
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<label>
			<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
			<input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		</label>
		<button class="search-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
	</form>
	<div class="top-30"></div>
	<div class="top-10 hidden-sm"></div>
	<div class="top-30 visible-xs"></div>
	<div class="founder-profile">
		<?php if( get_field('founder_image',44) ): ?>

			<?php $image = get_field('founder_image',44); ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>
		<div class="top-30"></div>
		<div class="top-10 visible-xs"></div>
		<?php if( get_field('founder_name_title',44) ): ?>

			<?php $value = get_field('founder_name_title',44); ?>

			<?php echo $value; ?>

		<?php endif; ?>
		<div class="top-15 brief-text">
			<?php if( get_field('founder_brief',44) ): ?>

				<?php $value = get_field('founder_brief',44); ?>

				<?php echo $value; ?>

			<?php endif; ?>
		</div>

	</div>
	<div class="top-30"></div>
	<div class="top-15 hidden-sm"></div>
	<div class="finding-success">
		<div class="text">
			<?php if( get_field('finding_success_text',44) ): ?>

				<?php $value = get_field('finding_success_text',44); ?>

				<?php echo $value; ?>

			<?php endif; ?>


		</div>
		<div class="success-button">
			<a href="
														<?php if( get_field('get_guide_button_href',44) ): ?>

															<?php $value = get_field('get_guide_button_href',44); ?>

															<?php echo $value; ?>

														<?php endif; ?>
														" class="btn button-primary btn-block">
				<?php if( get_field('get_guide_button_text',44) ): ?>

					<?php $value = get_field('get_guide_button_text',44); ?>

					<?php echo $value; ?>

				<?php endif; ?>
			</a>
		</div>
	</div>
	<div class="top-20"></div>
	<div class="top-15"></div>
	<div class="top-15 visible-xs"></div>
	<div class="recommended-articles">
		<h2>
			<?php if( get_field('recommended_articles_title',44) ): ?>

				<?php $value = get_field('recommended_articles_title',44); ?>

				<?php echo $value; ?>

			<?php endif; ?>
		</h2>
		<div class="top-5 visible-xs hidden-320"></div>
		<?php

		$args = array(
			'category_name'=>'recommended',
			'posts_per_page'=>5
		);
		$secondary_query = new WP_Query($args);

		echo '<ul>';
		while ( $secondary_query->have_posts() ) :
			$secondary_query->the_post();
			echo '<li class="clearfix"><a class="post-img" href="'.get_post_permalink().'">';
			echo the_post_thumbnail('post-thumbnail');
			echo '</a>';
			echo '<a class="post-link" href="'.get_post_permalink().'">'. get_the_title() . '</a></li>';
		endwhile;
		echo '</ul>';
		wp_reset_postdata();
		?>
	</div>
</figure>