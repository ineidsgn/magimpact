<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php if (!( is_single() )) : ?>
				<a href="<?php the_permalink(); ?>">
			<?php endif; ?>

			<?php the_post_thumbnail('full'); ?>

			<?php if (!( is_single() )) : ?>
				</a>
			<?php endif; ?>
		</div>
		<div class="top-10 visible-xs"></div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="entry-meta">
				<?php magimpact_entry_meta(); ?>
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
				<span>
					<?php if( get_field('get_updates_href',44) ): ?>

						<?php $value = get_field('get_updates_href',44); ?>

						<?php echo $value; ?>

					<?php endif; ?>
				</span>

			</div><!-- .entry-meta -->
		<?php else : ?>

			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>

		<?php endif; // is_single() ?>


	</header><!-- .entry-header -->

	<?php if ( is_single() ) : ?>
		<div class="entry-content">
			<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
			?>
		</div><!-- .entry-content -->

	<?php else : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>

			<a class="read-more-link" href="<?php the_permalink(); ?>" rel="bookmark">Read More...</a>
		</div><!-- .entry-summary -->
	<?php endif; ?>


</article><!-- #post -->
