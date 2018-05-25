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
				<!--<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>-->
				<?php $terms = get_terms(array(
					'taxonomy' => 'product_type',
					'hide_empty' => false
				));
				?>
				<h1>shop stuff</h1>
				<div class="stuff-container">
				<?php foreach( $terms as $term ) : ?>
				<!-- markup here -->
					<h3><?php echo $term->name; ?></h3>
				<?php endforeach; ?>
				</div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="shop-container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="item-container">
				<a href="<?php the_permalink();?>">
				<?php
					get_template_part( 'template-parts/content', 'product' );
				?></a>
				<p><?php the_title(); ?></p>
				</div>

			<?php endwhile; ?>
			</div>
			
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>