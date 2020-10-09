<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inohara-bui2
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'inohara-bui2' ); ?></a>

	<header id="header">
            <h1>
                <a href="../"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/common/hd_logo.png" alt="Logo" /></a>
            </h1>
            <div id="toggle" class="menu_collapse">
                <img class="icon_open" src="<?php echo get_template_directory_uri(); ?>/img/common/icon_hd_open.png" alt="">
                <img class="icon_close" src="<?php echo get_template_directory_uri(); ?>/img/common/icon_hd_close.png" alt="">
            </div>
            <nav id="gNav" class="gNav_wrapper">
                <ul>
                    <li><a href="<?php echo home_url() ?>">トップ</a></li>
                    <li><a href="<?php echo home_url() ?>/company">会社案内</a></li>
                    <li><a href="<?php echo home_url() ?>/product">取扱製品</a></li>
                    <li><a href="<?php echo home_url() ?>/recruit">採用情報</a></li>
                    <li class="mail_contact"><a href="<?php echo home_url() ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/img/common/hd_mail_contact.png" alt=""></a></li>
                </ul>
            <!--nav--></nav>

	</header><!-- #masthead -->
