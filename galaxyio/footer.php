
	<footer>
		<div class="container">
			<div class="row">

				<div class="widgets">
					<div class="span6">
						<div class="fwidget">

							<div class="col-l">
								<h6>Navigation</h6>
                                                                 <?php wp_nav_menu(array('theme_location'=>'footer-menu-one',)); ?>
								
							</div>

						</div>
					</div>

					<div class="span3">
						<div class="fwidget">
							<h6>Follow us</h6>
							<?php wp_nav_menu(array('theme_location'=>'footer-menu-two',)); ?>
						</div>
					</div>

					<div class="span3">
						<div class="fwidget">
							<h6>More</h6>
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
							<a href="/aboutus">About Us</a>
							|
							<a href="/faq">FAQ</a>
							|
							<a href="/contactus">Contact Us</a>
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