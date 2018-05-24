<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>
		</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class='container'>
		<div class="contact-info">
			<h3>contact info</h3>
				<p><i class="fa fa-envelope"></i>info@inhabitent.com</p>
				<p><i class="fa fa-phone"></i>778-888-7777</p>
				<p><i class="fab fa-facebook-square"></i>
					<i class="fab fa-twitter-square"></i>
					<i class="fab fa-google-plus-square"></i>
				</p>
		</div>

		<div class="business-hours">
			<h3>business hours</h3>
				<p><span>Monday to Friday:</span> 9am to 5pm</p>
				<p><span>Saturday:</span> 10am to 2pm</p>
				<p><span>Sunday:</span> Closed</p>
		</div>

		<div class="footer-logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="logo"/> 	
		</div>
		<div class="site-info">
			<p>Copywright &copy;2018 Inhabitent</p>
		</div>					
	</div>
	
	<!--end of footer-->
		
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
