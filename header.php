<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<section class="main-block">
        <div class="container">
            <header class="header">
                <a href="#" class="burger">
                    <img src="<?php echo get_template_directory_uri() ?> ./asset/img/Button.png" alt="burger">
                </a>
                <a href="#" class="logo">
                    <img src="<?php echo get_template_directory_uri() ?> ./asset/img/Logo.png" alt="logo">
                </a>
                <div class="follow">
                <a href="#" class="follow-text">follow us</a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?> ./asset/img/dribbble.png" alt="dribbble">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?> ./asset/img/twitter.png" alt="twitter">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?> ./asset/img/youtube.png" alt="youtube">
                </a>
                </div>
                <div class="nav-con-sr">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?> ./asset/img/User-icon.png" alt="User-icon">
                    </a>
                    <a href="#" class="search">
                        <img src="<?php echo get_template_directory_uri() ?> ./asset/img/search.png" alt="search">
                    </a>
                </div>
            </header>
