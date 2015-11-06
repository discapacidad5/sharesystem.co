<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pekcell
 */
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
ll
<head>
    <meta charset="utf-8">
    <title><?php echo bloginfo('name');?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="http://networksoft.mx/pekcellgold/wp-content/themes/pekcell/pekcell/images/IconPekCell.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/vendor.css">
   	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/main.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="height:0px;">
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header>
      <div class="container">
        <nav class="navbar">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              	<img src="<?php echo get_template_directory_uri(); ?>/images/LogoPekCell.png"/>
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php wp_nav_menu( array( 
            	'container_class' => 'collapse navbar-collapse',
            	'container_id' => 'bs-example-navbar-collapse-1',
            	'theme_location' => 'primary', 
            	'menu_id' => 'primary-menu',
            	'menu_class' => 'nav navbar-nav pull-right',	
            ));?>
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </header>
