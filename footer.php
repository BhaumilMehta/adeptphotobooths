<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adeptphotobooths
 */

?>


	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-logo">
					<a href="#">
					   <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/footer-logo.png" alt="">
					</a>
				</div>
				<div class="footer-main">
					 <div class="footer-info">
						<div class="user-info">
							<a href="tel:1300 233 781">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/phone-black.svg" alt="">
								1300 233 781
							</a>
							<a href="mailto:hello@adeptphotobooths.com.au">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/mail-black.svg" alt="">
								hello@adeptphotobooths.com.au
							</a>
						</div>
						<div class="social-link">
							<h5>Connect with us on social media</h5>
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.svg" alt=""></a>
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/linkdin.svg" alt=""></a>
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/ticktok.svg" alt=""></a>
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/youtube.svg" alt=""></a>
						</div>
					 </div>
					 <div class="footer-navigation">
						 <div class="footer-link">
							 <h6>Experiences</h6>
							 <?php
							   wp_nav_menu(
								   array(
									   'theme_location' => 'experiences-menu',
									   'menu_id'        => 'experiences',
								   )
							   );
							   ?>
						 </div>
						 <div class="footer-link">
							 <h6>Services</h6>
							 <?php
							   wp_nav_menu(
								   array(
									   'theme_location' => 'services-menu',
									   'menu_id'        => 'services',
								   )
							   );
							   ?>
						 </div>
						 <div class="footer-link">
							 <h6>INFO</h6>
							 <?php
							   wp_nav_menu(
								   array(
									   'theme_location' => 'info-menu',
									   'menu_id'        => 'info',
								   )
							   );
							   ?>
						 </div>
						 <div class="footer-link">
							 <h6>About</h6>
							 <?php
							   wp_nav_menu(
								   array(
									   'theme_location' => 'about-menu',
									   'menu_id'        => 'about',
								   )
							   );
							   ?>
						 </div>
					 </div>
				</div>
			</div>
		</div>
		<div class="footer-location">
			<div class="container">
				<div class="location-main-row">
					<div class="location-shape">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/location-sec-shape.png" alt="">
					</div>
					<div class="location-row">
						 <a href="#">
							 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/perth.png" alt="">
							 <h6>Perth</h6>
						 </a>
						 <a href="#">
							 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/sydney.png" alt="">
							 <h6>Sydney</h6>
						 </a>
						 <a href="#">
							 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/melbourne.png" alt="">
							 <h6>Melbourne</h6>
						 </a>
						 <a href="#">
							 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/adelaide.png" alt="">
							 <h6>Adelaide</h6>
						 </a>
						 <a href="#">
							 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/hobart.png" alt="">
							 <h6>Hobart</h6>
						 </a>
						 <a href="#">
							 <img src="<?php echo get_home_url();?>/wp-content/uploads/2025/03/brisbane.png" alt="">
							 <h6>Brisbane</h6>
						 </a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-row">
					<p>© 2025 Adept Photo Booths. All rights reserved.</p>
					<a href="#" class="websitemacker">
					  Website By <strong>Burning Fruit</strong> 
					</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
