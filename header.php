<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(home_url('wp-content/themes/finalProject/style.css')); ?>">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<?php 
	// get_template_part( 'template-parts/header/site-header' ); 
	?>
	<header id="masthead" class="site-header has-logo has-title-and-tagline" role="banner">
		<nav class="site-logo">
			<span class="custom-logo-link">
				<a href="https://lamp.computerstudi.es/~Lee200435222/wordpress/">
					<img class="logo" src="<?php echo esc_url(home_url('wp-content/uploads/2021/03/logo.png'));?>" alt="logo">
				</a>
			</span>
			<?php 
				wp_nav_menu(array(
					'menu' => 'Candy World', 
					'theme_location' => '', 
					'depth' => 2,
					'fallback_cd' => false,
				));
			?>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
