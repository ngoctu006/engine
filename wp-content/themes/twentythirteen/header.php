<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
        <link rel="stylesheet" id="twentythirteen-style-css" href="<?php echo get_template_directory_uri(); ?>/css/css3.css?ver=2013-07-18" type="text/css" media="all">
        <link rel="stylesheet" id="twentythirteen-style-css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css?ver=2013-07-18" type="text/css" media="all">

</head>

<body <?php body_class(); ?>>
    <div class="wrap-container">
        <div class="wrap-container-1">
	<div id="page" class="hfeed site">
            <div id="main" class="site-main">
                <div class="container">
