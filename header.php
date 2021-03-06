<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Архив сайта <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body>
<div id="page">
<div id="header">
	<div id="headertitle">
		<h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
		<p><?php bloginfo('description') ?></p>
	</div> 
	<div class="search">
	<?php  include (TEMPLATEPATH . "/searchform.php"); ?>
	</div> 	
</div>

<div id="hmenu">
<ul>
	<li class="hmenu1"><a href="<?php echo get_settings('home'); ?>"><?php _e('Главная') ?></a></li>
	<?php wp_list_pages('title_li=&depth=1') ?>
</ul>
</div>
<div id="wrapper">
