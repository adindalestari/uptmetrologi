<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until id="main-core".
 *
 * @package ThinkUpThemes
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<?php thinkup_hook_header(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?><?php thinkup_bodystyle(); ?>>
<?php wp_body_open(); ?>
<div id="body-core" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'grow' ); ?></a>
	<!-- .skip-link -->

	<header>
	<div id="site-header">

		
	
		<div id="pre-header">
		<div class="wrap-safari">
		<div id="pre-header-core" class="main-navigation">
  
			<?php if ( has_nav_menu( 'pre_header_menu' ) ) : ?>
			<?php wp_nav_menu( array( 'container_class' => 'header-links', 'container_id' => 'pre-header-links-inner', 'theme_location' => 'pre_header_menu' ) ); ?>
			<?php endif; ?>

			<?php /* Pre Header Search */ thinkup_input_preheadersearch(); ?>

			<?php /* Social Media Icons */ thinkup_input_socialmediaheaderpre(); ?>

		</div>
		</div>
		</div>
		<!-- #pre-header -->
		<html
		<body>
			<h3>
			<img style="float: left; margin:20px" src="<?php echo get_template_directory_uri(); ?>/images/logooo.png" width="420px" height="auto">
			<h3>
		</body>
		</html>
		<div id="header">
		<div id="header-core">
			<div id="logo">
			<!-- <?php /* Custom Logo */ echo thinkup_custom_logo(); ?> -->
			</div>
	
			<div id="header-links" class="main-navigation">
			<div id="header-links-inner" class="header-links">
				<?php $walker = new thinkup_menudescription;
				wp_nav_menu(array( 'container' => false, 'theme_location'  => 'header_menu', 'walker' => new thinkup_menudescription() ) ); ?>
				
				<?php /* Header Search */ thinkup_input_headersearch(); ?>

			</div>
			</div>
			<!-- #header-links .main-navigation -->
			<nav>
			<ul>
				<li><a href="http://profile.uptmetrologilegalpekanbaru.com/">Home</a></li>
				<li><a href="#">Profil</a></li>
				<li><a href="https://profile.uptmetrologilegalpekanbaru.com/index.php/kontak/">Kontak</a></li>
				<li><a href="#">Galeri</a></li>
				<li><a href="https://profile.uptmetrologilegalpekanbaru.com/index.php/pelayanan/">Pelayanan</a></li>
			</ul>
			</nav>
 	
			<?php /* Add responsive header menu */ thinkup_input_responsivehtml1(); ?>

		</div>
		</div>
		<!-- #header -->
		<?php /* Add responsive header menu */ thinkup_input_responsivehtml2(); ?>

		<?php /* Custom Slider */ thinkup_input_sliderhome(); ?>

		<?php /* Custom Intro - Above */ thinkup_custom_introabove(); ?>
 

	</div>

	</header>
	<!-- header -->

	<?php /*  Call To Action - Intro */ thinkup_input_ctaintro(); ?>
	<?php /*  Pre-Designed HomePage Content */ thinkup_input_homepagesection(); ?>

	<div id="content">
	<div id="content-core">

		<div id="main">
		<div id="main-core">