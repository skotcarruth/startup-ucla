<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title>Startup UCLA</title>

<script type="text/javascript" src="//use.typekit.net/gwm2oqw.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.gif" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>





<body <?php body_class(); ?>>


<div id="header">
	<div id="header-wrapper">

		<a id="logo" href="<?php echo home_url(); ?>"></a>
		
		<ul id="nav">
			<li><a href="<?php echo get_permalink( get_page_by_title('accelerator')); ?>">Accelerator</a></li>
			<li><a href="<?php echo get_permalink( get_page_by_title('startups')); ?>" class="first">Startups</a></li>
			<li><a href="<?php echo home_url('/news-and-events'); ?>">News & Events</a></li>
			<li><a href="<?php echo get_permalink( get_page_by_title('internships')); ?>">Internships</a></li>	
			<li><a href="<?php echo get_permalink( get_page_by_title('sponsors')); ?>">Sponsors</a></li>
		</ul>

	</div>
</div><!-- #header -->

	<div id="wrapper" >
	<div id="main">
