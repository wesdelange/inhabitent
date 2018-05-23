<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// change logo at log-in
function inhabitent_login_logo() {
	echo '<style type="text/css">
	 .login h1 a {background-image: url('.get_bloginfo('template_directory').
							'/images/logos/inhabitent-logo-text-dark.svg) !important;
			background-size: contain;
			height: 55px;
			width: 300px;			
						}
	</style>';
	}
	add_action('login_head', 'inhabitent_login_logo');

	function inhabitent_login_logo_title() {
		return 'Inhabitent';
	}
	add_filter('login_headertitle', 'inhabitent_login_logo_title');
	
	
	
	function inhabitent_login_logo_url($url) {
		return get_home_url();
	}
	add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );
		

	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	   }
	   add_filter('upload_mimes', 'cc_mime_types');

/**
 * make hero image customizable
 */

 // check if on the about page

function get_hero_image(){
		if ( ! is_page_template( 'page-templates/about.php' )){
			return;
		}
		$image = CFS()->get( 'header_image' );
		
		if ( ! $image ){
			return;
		}

		$hero_css = ".page-template-about .entry-header {
			background-size: cover, cover;
			height: 700px;
			width: 100%;
			background-image: url( '{$image}' );
		}";
		wp_add_inline_style( 'inhabitent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'get_hero_image' );

 // get image url from custom field suite


 // add custom css, that uses that image url for a background image


 // call this above function