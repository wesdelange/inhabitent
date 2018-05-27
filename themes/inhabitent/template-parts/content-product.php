<?php
/**
 * Template part for displaying single products.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		
		
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
			<?php endif; ?>
		
		
		<div>
			<?php the_title( '<h2 class="entry-title"></h2>' ); ?><?php echo ( '............' );?><span><?php echo CFS()->get( 'price' ); ?><!--custom field suite --></span>
		</div>
	
	</div><!-- .entry-content -->

</article><!-- #post-## -->