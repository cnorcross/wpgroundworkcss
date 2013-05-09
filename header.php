<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WPGroundworkCSS
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/html5shiv.min.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'wpgroundworkcss' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wpgroundworkcss' ); ?>"><?php _e( 'Skip to content', 'wpgroundworkcss' ); ?></a></div>

			<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

		<nav class="small-tablet menu nav" data-label="Menu">
            <ul class="row">
              <li class="one small-tablet fourth"><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
              <li class="menu one small-tablet fourth"><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a>
                <ul>
                  <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
                  <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
                  <li><a href="#nowhere" title="Lorum ipsum dolor sit amet" class="disabled" tabindex="-1">Lorem</a></li>
                  <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
                </ul>
              </li>
              <li class="one small-tablet fourth"><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus" class="disabled" tabindex="-1">Praesent</a></li>
              <li class="one small-tablet fourth"><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
            </ul>
          </nav>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
