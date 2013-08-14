<?php
//add_menu_page('Page title', 'Top-level menu title', 'manage_options', 'my-top-level-handle', 'my_magic_function');

require( dirname( __FILE__ ) . '/inc/theme-options.php' );


add_action('admin_menu', 'register_dreams_post_page');

function register_dreams_post_page() {
	add_posts_page('梦之星', '梦之星', 'read', 'edit.php?post_type=post&category_name=start');
	add_posts_page('名师团队', '名师团队', 'read', 'edit.php?post_type=post&category_name=teacher');
}

//add_custom_background();
register_nav_menu( 'primary', __( 'Primary Menu', 'twentyeleven' ) );
add_theme_support('post-thumbnails');


function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}

function ay_extract_image_url($content) {


	$img_src = '';//get_stylesheet_directory_uri().'/img/avatar.jpg';

	if(!empty($content)){
		preg_match('/<img.+?src="(.+?)".+?>/i', $content, $match);

		if(isset($match[1])){
			$img_src = $match[1];
		}
	}
	return $img_src;
}
