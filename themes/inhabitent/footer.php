<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

	</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="contactInfo">
				<h3> Contact Info</h3>
					<div class="email">
						<i class="fa fa-envelope" aria-hidden="true"></i> 
						<a class="email-address" href="info@inhabitent.com">info@inhabitent.com</a>
					</div>
					<p>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a class="phone-number" href="tel:778-456-7891">778-456-7891</a>
					</p>
					<p>
						<span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
						<span><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
						<span><i class="fa fa-google-plus-square" aria-hidden="true"></i></span>
					</p>
			</div>
	
			<div class="businessHour"> 
				<h3> Business Hours</h3>
				<p><span class="bolden"> Monday-Friday:</span> 9am to 5pm </p>
				<p><span class="bolden"> Saturday:</span> 10am to 2pm</p>
				<p><span class="bolden"> Sunday:</span> Closed</p>
			</div>
	
			<div class="footerLogo_div">
				<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo">
			</div>

			<div class="copyright">
					<p><?php echo 'copyright © 2016 inhabitent' ?></p>
			</div><!-- .site-info -->

		</footer><!-- #colophon -->
		

		<?php wp_footer(); ?>

	</body>
</html>
