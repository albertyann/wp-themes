<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); 

		$cat = isset($_GET['cat']) ? $_GET['cat'] : 0;

		$page = 'index';
		switch($cat){
			case 3: $page = 'teacher'; break;
			case 5: $page = 'star'; break;
			case 7: $page = 'video'; break;
			case 11: $page = 'message'; break;
			case 10: $page = 'star'; break;
			default:break;
		}

		get_template_part('category', $page);	



get_footer(); ?>
