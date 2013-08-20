<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>云仓存储</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">

	<!-- Parallax slider -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/slider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/flexslider.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/blue.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-responsive.css">

	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico"></head>

<body>
    <div class="wrapper">

        <header>
            <div class="container">
                <div class="span6 cl">
                    <div class="logo">
                        <h1>
                            <a href="<?php echo home_url(); ?>">云仓科技</a>
                        </h1>
                    </div>
                </div>

                <div class="span5">
                    <div class="form">
                        <form method="get" id="searchform" action="#" class="form-search">
                            <input type="text" value="" name="s" id="s" class="input-medium">
                            <button type="submit" class="btn">Search</button>
                        </form>
                    </div>
                </div>
                
            </div>
            
            <div class="primary-main">
                <div class="navbar">
                        <div class="navbar-inner">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span>Menu</span>
				</a>

				
				<div class="nav-collapse collapse">
                                    <?php  wp_nav_menu( array(
                                            'container' => false,
                                            'menu_class' => 'nav',
                                            'menu_id'=>'tabs',
                                            'menu_class'=>'nav tabs',
                                            'walker' => new galaxyio_hover_walker()
                                    ));
                                    //echo get_template_part('menu'); 
                                    ?>
				</div>
			</div>
		</div>
            </div>
        </header>