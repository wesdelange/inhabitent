<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
				<h1>shop stuff</h1>
				
				<div class="term-list">
				
				<?php $terms = get_terms(array(
					'taxonomy' => 'product_type',
					'hide_empty' => false
				));
				?>
					
					<?php foreach( $terms as $term ) : ?>
				
						<p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></p>
					
					<?php endforeach; ?>
				
			
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			
			<div class="shop-container">
			
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				
			<div class="item-container">
	
					<?php get_template_part( 'template-parts/content', 'product' ); ?>
					
			</div><!-- item-container -->

			<?php endwhile; ?>
			
			</div><!-- shop-container -->
			
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
				<!--<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>-->