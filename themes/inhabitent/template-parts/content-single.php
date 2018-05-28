<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h2><?php the_title(); ?></h2>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="entry-meta">
			<p><?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?></p>
		</div><!-- .entry-meta -->
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
		<div class="social-links">
			<button><i class="fab fa-facebook-f"></i> like</button>
			<button><i class="fab fa-twitter"></i> tweet</button>
			<button><i class="fab fa-pinterest"></i> pin</button>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
