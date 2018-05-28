<?php
/**
 * The template for displaying product type pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
					<h1><?php echo str_replace("Product Type: ", "", get_the_archive_title()); ?></h1>
					<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			<div class="shop-container">

				<?php while ( have_posts() ) : the_post(); ?>

				<div class="item-container">
					
					<?php
						get_template_part( 'template-parts/content', 'product' );
					?>

				</div>	

				<?php endwhile; ?>

			</div> <!-- shop container -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>