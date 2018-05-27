<?php
/**
 * Template part for displaying single products.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <!--custom field suite -->
		<p><?php echo CFS()->get( 'price' ); ?></p>
	</div><!-- .entry-content -->

	<!--<footer class="entry-footer">-->
<!--social media links-->
	<!--</footer>-->
</article><!-- #post-## -->