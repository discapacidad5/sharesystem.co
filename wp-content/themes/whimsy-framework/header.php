<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up to <div id="content">
 *
 * @package whimsy-framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) {
		function whimsy_render_title() {
	?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php
		}
		add_action( 'wp_head', 'whimsy_render_title' );
	}
?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="description" content="Somos una empresa especializada en el desarrollo de sistemas de información estratégica para las empresas de Venta Directa y Multinivel, basados en nuestro software ERP" />
<meta name="msvalidate.01" content="96F21D030D8642093CC9F836F26E305A" />
<META NAME="Author" CONTENT="contacto@networksoft.com.mx">
<meta name="REVISIT-AFTER" content="1 days">
<meta name="robots" content="index, all, follow" />
<meta name="language" content="ES">
<meta name="VW96.objecttype" content="Document">
<meta name="classification" content="Business" />
<meta name="distribution" content="global">
<meta name="rating" content="general" />
<link type="image/x-icon" rel="shortcut icon" href="http://networksoft.mx/wp-content/themes/netsoftuno/images/earth4.gif" >
<title>Networksoft Multinivel</title>
<style type="text/css">
body {
    background-image: url(NSP/Imagenes/bgUni.png);
}
</style>
<link href="NSP/2.0/css/plantilla_5_s.css" rel="stylesheet" type="text/css" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38754161-2', 'networksoft.com.mx');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php whimsy_body_start(); ?>

<div id="page" class="hfeed site grid">

<?php whimsy_header_before(); ?>

	<div id="header-container">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'whimsy-framework' ); ?></a>		
		
		<?php whimsy_nav_before(); ?>

		<nav id="site-navigation">

			<div class="mobile-site-branding"><!-- Does not display on screens larger than 980px -->
				
				<?php if ( get_theme_mod( 'whimsy_framework_logo_mobile' ) ) : ?>

				    <div class="site-logo">
				        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'whimsy_framework_logo_mobile' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
				    </div>
				
				<?php else : // If no logo is set, display title as text. ?>

						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php endif; // End mobile logo check. ?>

			</div><!-- /.mobile-site-branding -->

			<?php whimsy_nav_inside_before(); ?>

			<?php whimsy_responsive_nav(); ?>

			<?php whimsy_nav_inside_after(); ?>

		</nav><!-- /#site-navigation -->

		<?php whimsy_nav_after(); ?>

		<header id="masthead" class="site-header" role="banner">
		
		<?php whimsy_header_inside_before(); ?>

			<div class="site-branding"><!-- Does not display on screens smaller than 980px -->
				
				<?php if ( get_theme_mod( 'whimsy_framework_logo_desktop' ) ) : ?>

				    <div class="site-logo">
				        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'whimsy_framework_logo_desktop' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
				    </div><!-- /.site-logo -->
				
				<?php else : // If no logo is set, display title and description text. ?>

					<hgroup>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</hgroup>

				<?php endif; // End desktop logo check. ?>

			</div><!-- /.site-branding -->
				
		<?php if ( get_header_image() ) : ?>

			<div class="custom-header">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">						
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
			
			</div><!-- /.custom-header -->

		<?php endif; // End header image check. ?>
		
		<?php whimsy_header_inside_after(); ?>

		</header><!-- /#masthead -->

	</div><!-- /#header-container -->

	<?php whimsy_header_after(); ?>

	<div id="content-container">