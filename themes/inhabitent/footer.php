<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">

				<div class="contact-info">
					<h3>contact info</h3>
					<p class="email">info@inhabitent.com</p>
					<p class="phone">778-888-7777</p>
					<p><span class="facebook"></span><span class="twitter"></span><span class="google"></span></p>
				</div>

				<div class="business-hours">
					<h3>business hours</h3>
					<p>Monday to Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>
				</div>

				<div class="footer-logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" 
					alt="logo" width="280px" height="auto" /> 	
				</div>

				</div>
				<div class="site-info">
					<p>Copywright</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
