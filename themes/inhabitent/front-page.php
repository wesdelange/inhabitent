<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="front-page-content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg">
			</div>
		
		
		
		<!-- displays shop categories -->
		<h1>shop stuff</h1>	
		<section class="shop-entry-container">
			<ul>
				<?php 
					$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide-empty' => false
					));
					?>
				<?php foreach ( $terms as $term ) : ?>
				<li>	
					<!--<?php echo $term->name;?>-->
					<img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo $term->slug;?>.svg">
					<p><?php echo $term->description;?></p>
					<a href="<?php echo get_permalink(); ?>/product_type/<?php echo $term->slug;?>">
						<button><?php echo strtoupper($term->slug);?> STUFF</button>
					</a>
				</li>
				<?php endforeach;?>
			</ul>	
		</section>

		
		
		<!-- displays posts -->
	<h1>inhabitent journal</h1>	
	<section class="latest-entry-container">
		<ul>
		<?php
		$args = array( 
			'post_type' => 'post', 
			'posts_per_page' => 3,
		);
		$product_posts = get_posts( $args ); 
		?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		<li>
			<div>
				<?php the_post_thumbnail( 'large' ) ?>
			</div>	
			<p>
				<?php the_date() ?> / <?php comments_number() ?>
			</p>
			<a href="<?php the_permalink();?>"><h2><?php the_title() ?></h2></a>
			<a href="<?php the_permalink();?>"><button> Read Entry </button></a>
		</li>	
		<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</section>

		<!-- display adventure journal -->

<h1>latest adventures</h1>
<section class="adventure">
	<div class="canoe"><h1>Getting back to Nature in a Canoe</h1><span>Read Entry</span></div>
	<div class="container">
		<div class="beach"><h1>A Night with Friends at the Beach</h1><span>Read Entry</span></div>
		<div class="mountain"><h2>Taking in the view at Big Mountain</h2><span>Read Entry</span></div>
		<div class="sky"><h2>Star-Gazing at the Night Sky</h2><span>Read Entry</span></div>
	</div>
</section>
<span class="more-adventures">more adventures</span>
		
		
		
		
		
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

<?php get_footer(); ?>