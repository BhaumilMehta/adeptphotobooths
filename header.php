<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adeptphotobooths
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'adeptphotobooths' ); ?></a>

	<header id="masthead" class="site-header">
		 <div class="topbar">
			 <div class="container">
                <div class="topbar-row">
					<div class="reviews-text">
						 over <span class="counter">280<span>+ Google Reviews
					</div>
					<div class="location">
						 <a href="#">wa</a>
						 <a href="#">sa</a>
						 <a href="#">nsw</a>
						 <a href="#">vic</a>
						 <a href="#">qld</a>
						 <a href="#">tas</a>
					</div>
					<div class="user-info">
						<a href="tel:1300 233 781">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/mail-white.svg" alt="">
							1300 233 781
						</a>
						<a href="mailto:hello@adeptphotobooths.com.au">
						    <img src="<?php echo get_template_directory_uri();?>/assets/images/phone-white.svg" alt="">
							hello@adeptphotobooths.com.au
						</a>
					</div>
				</div>
			 </div>
		 </div>
		 <div class="sticky-header">
			<div class="container">
				<div class="main-header">
					<div class="site-branding">
						<?php the_custom_logo();?>
					</div><!-- .site-branding -->
					<div class="header-main">
						<div class="close-btn toggle">
					     	<img src="<?php echo get_template_directory_uri();?>/assets/images/close-btn.svg" alt="">
						</div>
						<div class="header-navigation">
							   <?php
							   wp_nav_menu(
								   array(
									   'theme_location' => 'header-menu',
									   'menu_id'        => 'primary-menu',
								   )
							   );
							   ?>
						</div>
						<div class="defualt-btn">
							<a href="#" class="defualt_btn">Get in touch</a>
						</div>
					</div>
					<div class="toggle_menu toggle">
					    <img src="<?php echo get_template_directory_uri();?>/assets/images/menu.svg" alt="">
					</div>
				</div>
			</div>
		 </div>
	</header><!-- #masthead -->
    <?php dd_woocommerce_breadcrumb(); ?>
