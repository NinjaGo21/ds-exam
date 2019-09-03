<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom-Template-ds-exam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <title>CrazyDemo</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'custom-template-ds-exam' ); ?></a>

	<header>
        <div class="wrapper">
            <h1 class="logo">CrazyDemo</h1>
            <nav>
                <h2>Main Navigation</h2>
                <ul>
                    <li><span>+1234 5657</span></li>
                    <li><span>|</span></li>
                    <li><span>mail@crazydomains.com</span></li>
                    <li><span><a href="">BOOK NOW</a></span></li>
                </ul>
            </nav>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
