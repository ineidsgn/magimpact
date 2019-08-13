<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/manifest.json">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/safari-pinned-tab.svg" color="#1e75bb">
	<meta name="apple-mobile-web-app-title" content="magIMPACT">
	<meta name="application-name" content="magIMPACT">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

	<!-- Patch for mouse scroll issue in IE -->
	<script>
	  if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./)  || navigator.userAgent.match(/Edge\/13\./)) {
	    $('body').on("mousewheel", function () {
	      event.preventDefault();
	      var wd = event.wheelDelta;
	      var csp = window.pageYOffset;
	      window.scrollTo(0, csp - wd);
	    });
	  }
	</script>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header
		<?php
			$template_slug = get_page_template_slug();
			global $post;
			$page_slug = get_post( $post )->post_name;
			if (($template_slug == "shop.php") || ($page_slug == "checkout") || ($page_slug == "cart")) { echo "header-shop"; }
		?>" role="banner">

			<nav class="navbar navbar-default navbar-fixed-top magimpact-nav">
				<div class="container-fluid">
					<div class="navbar-header">
						<?php
							$page_slug = get_post( $post )->post_name;
							if (($template_slug != "shop.php") && ($page_slug != "checkout") && ($page_slug != "cart")) {
						?>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<i class="fa fa-bars"></i>
							</button>
						<?php } ?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/magIMPACT-logos-556-100px.png" alt="MagImpact"/></a>
					</div>

					<?php
					if (($template_slug != "shop.php") && ($page_slug != "checkout") && ($page_slug != "cart")) {
						wp_nav_menu( array( 'theme_location' => 'primary', 'container'=>'div', 'container_class'=>'navbar-collapse collapse', 'container_id'=>'navbar','menu_class' => 'nav navbar-nav', 'menu_id' => 'primary-menu' ) );
					} else { ?>
					<div class="help-button pull-right">
						<a class="btn button-transparent" href="/contact">HELP</a>
					</div>

						<?php if ($template_slug == "shop.php") { ?>

						<div class="view-cart-button pull-right">
							<a class="btn button-transparent" href="/cart">VIEW CART</a>
						</div>

						<?php } ?>

					<?php } ?>

				</div>
			</nav>

		</header><!-- #masthead -->

		<div id="main" class="site-main">
