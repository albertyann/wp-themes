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

	<header>
		<div class="container">
                    <div class="span6">
			<div class="logo">
				<h1>
					<a href="/">云仓科技</a>
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
	</header>

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
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



<!--					<ul class="nav">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Product <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="technology.html">Technology</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Pages #2 <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="coming-soon.html">Coming Soon</a>
								</li>
								<li>
									<a href="features-4.html">Features</a>
								</li>
								<li>
									<a href="statement.html">Statement</a>
								</li>
								<li>
									<a href="tasks.html">Tasks</a>
								</li>
								<li>
									<a href="resume.html">Resume</a>
								</li>
								<li>
									<a href="projects.html">Projects</a>
								</li>
								<li>
									<a href="make-post.html">Make Post</a>
								</li>
								<li>
									<a href="events.html">Events</a>
								</li>
								<li>
									<a href="error-log.html">Error Log</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="service.html">Service</a>
						</li>
						<li>
							<a href="aboutus.html">About Us</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Blog
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="blog-2.html">Blog #1</a>
								</li>
								<li>
									<a href="blog-4.html">Blog #1</a>
								</li>
								<li>
									<a href="blog-single.html">Blog Single</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="portfolio.html">Portfolio</a>
						</li>
						<li>
							<a href="contactus.html">Contact</a>
						</li>
					</ul>-->
				</div>
			</div>
		</div>
	</div>