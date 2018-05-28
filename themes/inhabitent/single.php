<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="journal-container">
			<div class="journal-entrys">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<div class="comment-box">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>
			</div>
			
			<?php get_sidebar(); ?>
			
			

		<?php endwhile; // End of the loop. ?>


		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
