<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package dream
 * @subpackage null
 * @since Albert Yann 0.2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta content="" name="description">
	<meta name="keywords" content="传媒梦工坊, 传媒, 央视, 梦想, 媒体, 大学生, 媒体专业, CCTV, 奋斗、给你一个亿
" />
	<meta name="description" content="传媒梦工坊, 大学生励志就业平台" />
	<title>梦工坊 - 还记得最初的梦吗？</title>

	
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico" type="image/vnd.microsoft.icon" />
	<link href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php bloginfo('stylesheet_directory');?>/css/blueberry.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script src="http://upcdn.b0.upaiyun.com/libs/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.blueberry.js"></script>

	<script>
	$(window).load(function() {
		$('.blueberry').blueberry();
	});
	</script>
</head>

<body>
	

	<div class="header">
		<div class="container top">
			<div class="logo">
				<a href="/">传媒梦工坊</a>
			</div>
			<div class="slogan">
				<h2>奋斗传媒梦工坊</h2>
			</div>
		</div>

		<div class="header-navbar">
			<?php wp_nav_menu( array('menu_class'=>'nav', 'menu'=>'nav' ) ); ?>
			<span class="hot">new</span>
		</div>
	</div>



