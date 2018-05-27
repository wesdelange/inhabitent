<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		

		

		<?php if ( 'post' === get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h2><?php the_title(); ?></h2>
		
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="excerpt"><?php the_excerpt(); ?></div>
		<div class="entry-meta">
			<p><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></p>
		</div>
		<div class="read-more"><a href="<?php echo get_permalink(); ?>"><span>Read More -></span></a></div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
