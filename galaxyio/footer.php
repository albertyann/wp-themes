
	<footer>
		<div class="container">
                    
                   
			<div class="row">

				<div class="widgets">
					<div class="span6">
						<div class="fwidget">

							<div class="col-l">
								<h6>导航</h6>
                                                                 <?php wp_nav_menu(array('theme_location'=>'footer-menu-one',)); ?>
								
							</div>

						</div>
					</div>

					<div class="span3">
						<div class="fwidget">
							<h6>关注云仓</h6>
							<?php wp_nav_menu(array('theme_location'=>'footer-menu-two',)); ?>
						</div>
					</div>

					<div class="span3">
						<div class="fwidget">
							<h6>更多</h6>
							<?php wp_nav_menu(array('theme_location'=>'footer-menu-three',)); ?>
						</div>
					</div>
				</div>

				<div class="span12">
					<div class="copy">
						<p>
							Copyright ©
							<a href="/">云仓科技</a>
							-
							<a href="/aboutus">关于我们</a>
							|
							<a href="/faq">FAQ</a>
							|
							<a href="/contactus">联系我们</a>
						</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</footer>
</body>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.js"></script>

	<script src="<?php bloginfo( 'template_url' ); ?>/js/easing.js"></script>
	<!-- Easing -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.flexslider-min.js"></script>
	<!-- Flex slider -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>
	<!-- Flex slider -->
</html>