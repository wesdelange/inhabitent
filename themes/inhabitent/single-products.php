<?php
/**
 * The template for displaying single products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			
			
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="single-product-container">
				
			<div class="img-container">
				<header class="entry-header">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					
				</header><!-- .entry-header -->
			</div>
				
			<div class="description-container">
					
					<div class="entry-content">
						
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						
						<span><?php echo CFS()->get( 'price' ); ?></span><!--custom field suite -->

						<?php the_content(); ?>
					
					</div><!-- .entry-content -->
			

					<footer class="entry-footer">
						<button><i class="fab fa-facebook-f"></i> like</button>
						<button><i class="fab fa-twitter"></i> tweet</button>
						<button><i class="fab fa-pinterest"></i> pin</button>
					</footer><!-- .entry-footer -->
				
			</div><!-- description container -->
		
		</div><!-- single-container -->
		
		</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
