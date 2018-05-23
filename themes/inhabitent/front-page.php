<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<section class="hero">
		<div class="hero-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg">
		</div>
	</section>
		
		
		
		<!-- displays shop categories -->
	<section class="shop-categories">	
		<?php 
			$terms = get_terms( array(
				'taxonomy' => 'product_type',
				'hide-empty' => false
			));
		?>
		<?php 
			foreach ( $terms as $term ) : ?>
		<div class="shop-entry-container">
		<div class="shop-entry-<?php echo $term->name;?>">
			<div class="icon-container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo $term->slug;?>.svg">
			</div>
            <p><?php echo $term->description;?></p>
            <button><?php echo strtoupper($term->slug);?> STUFF</button>
            <?php endforeach;?>	
		</div>
		</div>	
	</section>
		
		
		<!-- displays posts -->
		
	<section class="latest-entry">
		<?php
		$args = array( 
			'post_type' => 'post', 
			'posts_per_page' => 3,
		);
		$product_posts = get_posts( $args ); 
		?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		<div class="journal-entry">
			<?php the_post_thumbnail( 'thumbnail' ) ?>
			<div>
				<?php the_date() ?> / <?php comments_number() ?>
			</div>
			<h3><?php the_title() ?></h3>
			<button>
				<a href="<?php the_permalink();?>"> Read Entry </a>
			</button>
		</div>	
		<?php endforeach; wp_reset_postdata(); ?>
	</section>

		
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</div><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>