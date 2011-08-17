<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div id="logo">
	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" /> 
	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<p><em><?php bloginfo('description'); ?></em></p>
</div>
<div id="header">
	<div id="menu">
		<ul>
			<li class="first page_item<?php if (is_home()) echo ' current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/" class="first">Home</a></li>
			<?php wp_list_pages('title_li=' ); ?>
		</ul>
	</div>
	<div id="header-search">
		<form method="get" action="<?php bloginfo('url'); ?>/">
			<fieldset>
			<input id="header-search-text" type="text" name="s" value="<?php the_search_query(); ?>" />
			<input id="header-search-submit" type="submit" value="GO" />
			</fieldset>
		</form>
	</div>
</div>
<hr />

<!-- start page -->
<div id="page">
<div id="page-bgtop">

