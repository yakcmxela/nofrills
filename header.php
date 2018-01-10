<?php

// The footer template. No Frills Oil.
// Author: Alex McKay 2017
// Bold Coast Creative www.boldcoastcreative.com

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112262700-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112262700-1');
</script>
</head>

<?php
// Custom Fields
$logo = get_field('logo', 'option');
$nav_bg = get_field('nav_bg', 'option');
?>

<nav>
	<div class="nav-container block-shadow d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/nav-bg.jpg');">
		<div class="nav-bar d-flex align-items-center">
			<div class="nav-button mr-auto">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<a href="<?php echo get_site_url(); ?>/"><img class="logo" src="<?php echo $logo['url']; ?>"></a>
		</div>
	</div>
	<div class="nav-full">
		<ul class="left-menu">
			<li>
				<a href="<?php echo get_site_url(); ?>/"><h4>Home</h4></a>
			</li>
			<li>
				<a href="<?php echo get_site_url(); ?>/our-company"><h4>Our Company</h4></a>
			</li>
			<li>
				<a href="<?php echo get_site_url(); ?>/products-services"><h4>Products &amp; Services</h4></a>
			</li>
			<li>
				<a href="<?php echo get_site_url(); ?>/delivery-area"><h4>Delivery Area</h4></a>
			</li>
			<li>
				<a href="<?php echo get_site_url(); ?>/price-plans"><h4>Price Plans</h4></a>
			</li>
		</ul>
		<ul class="right-menu">
			<li>
				<a href="<?php echo get_site_url(); ?>/sign-up"><h4>Become a Customer</h4></a>
			</li>
			<li>
				<a href="<?php echo get_site_url(); ?>/contact-us"><h4>Contact Us</h4></a>
			</li>
			<li class="connect-icons">
				<a href="tel:2074223581"><i class="fa fa-phone-square fa-2x"></i></a>
				<a href="mailto:info@nofrillsoil.com"><i class="fa fa-envelope-square fa-2x"></i></a>
				<a href="https://www.facebook.com/No-Frills-Oil-157836401223/"><i class="fa fa-facebook-square fa-2x"></i></a>
			</li>
		</ul>
	</div>
</div>

</nav>
