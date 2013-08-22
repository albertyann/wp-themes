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

                <!-- <div class="span5">
                    <div class="form">
                        <form method="get" id="searchform" action="#" class="form-search">
                            <input type="text" value="" name="s" id="s" class="input-medium">
                            <button type="submit" class="btn">Search</button>
                        </form>
                    </div>
                </div>-->
                
            </div>
            
            <div class="primary-main">
                <div class="navbar">
                        <div class="navbar-inner">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span>Menu</span>
				</a>

				
				<div class="nav-collapse collapse">
                                    <?php /*wp_nav_menu( array(
                                            'container' => false,
                                            'menu_class' => 'nav',
                                            'menu_id'=>'tabs',
                                            'menu_class'=>'nav tabs',
                                            'walker' => new galaxyio_hover_walker()
                                    ));*/
                                    //echo get_template_part('menu'); 
                                    
                                    //wp_nav_menu(array('theme_location' => 'menu-one',));
                                    ?>
                                    
<ul id="tabs" class="nav tabs">
	<li id="menu-item-4" class="tab">
		<section role="group">
			<a href="#" class="dropdown-toggle">产品技术</a>
                        
                        <div class="columns count2" style="display:none;">
                            <div class="col-l">
                                <?php wp_nav_menu(array('theme_location' => 'menu-one',)); ?>
                            </div>
                            <div class="col-r">
                                <?php wp_nav_menu(array('theme_location' => 'menu-two',)); ?>
                            </div>
			</div>
		</section>
	</li>
	<li id="menu-item-14" class="tab">
		<section role="group">
			<a href="http://wp.yann/company" class="dropdown-toggle">解决方案</a>
			<div class="columns count5" style="display:none;">
                            <?php wp_nav_menu(array('theme_location' => 'menu-three',)); ?>
                        </div>
		</section>
	</li>
	<li id="menu-item-35" class="tab">
		<section role="group">
			<a href="http://wp.yann/category/blog">关于我们</a>
                        <div class="columns count5" style="display:none;">
                            <?php wp_nav_menu(array('theme_location' => 'menu-four',)); ?>
                        </div>
		</section>
	</li>
        <li id="menu-item-35" class="tab">
		<section role="group">
			<a href="http://wp.yann/category/blog">更多信息</a>
                        <div class="columns count5" style="display:none;">
                            <?php wp_nav_menu(array('theme_location' => 'menu-five',)); ?>
                        </div>
		</section>
	</li>
</ul>
                                    
				</div>
			</div>
		</div>
            </div>
        </header>