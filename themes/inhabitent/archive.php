<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="journal-container">
				<div class="journal-entrys">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content' );
						?>

					<?php endwhile; ?>
				</div>
					<?php get_sidebar(); ?>
					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
