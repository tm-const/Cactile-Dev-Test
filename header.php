<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cactile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap');</style>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="page-wrapper">
	
<?php include get_theme_file_path( '/template-parts/page-blocks/navigation.php' ); ?>
