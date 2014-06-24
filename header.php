<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package untame
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'untame' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" class="header-image">
			</a>
		<?php endif; // End header image check. ?>
		<div class="site-branding">
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'untame' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'after' => '<li class="menu-divider">|</li>' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
  			js = d.createElement(s); 
			js.id = id;
  			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=150827075004636";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<script>!function(d,s,id){
			var js, fjs=d.getElementsByTagName(s)[0],
				p=/^http:/.test(d.location)?'http':'https';
			if (!d.getElementById(id)) {
				js=d.createElement(s);
				js.id=id;
				js.src=p+'://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js,fjs);
			}
		}(document, 'script', 'twitter-wjs');</script>
		<div class="undertitle">
	  	<div class="centerbox" id="centerbox">
