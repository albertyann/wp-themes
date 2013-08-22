
<div style="clear:both"></div>
<div class="container">
    <footer> 

        <div class="row">

                    <div class="span6">
                        <div class="fwidget">

                            <div class="col-l">
                                <h6>导航</h6>
                                <?php wp_nav_menu(array('theme_location' => 'menu-one',)); ?>

                            </div>
                            <div class="col-r">
                                <h6>&nbsp;</h6>
                                <?php wp_nav_menu(array('theme_location' => 'menu-two',)); ?>
                            </div>

                        </div>
                    </div>

                    <div class="span3">
                        <div class="fwidget">
                            <h6>关注云仓</h6>
                            <?php wp_nav_menu(array('theme_location' => 'menu-four',)); ?>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="fwidget">
                            <h6>更多</h6>
                            <?php wp_nav_menu(array('theme_location' => 'menu-five',)); ?>
                        </div>
                    </div>

        </div>
        
        <div class="row">
            <div class="span12">
                    <div class="copy">
                        <p>
                            Copyright ©
                            <a href="/">云仓科技</a>
                            -
                            <a href="/aboutus">关于我们</a>
                            |
                            <a href="/contactus">联系我们</a>
                        </p>
                    </div>
                </div>
            </div>
    </footer>
</div>
</div><!--end wrapper -->
</body>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/easing.js"></script>
<!-- Easing -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<!-- Flex slider -->
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<!-- Flex slider -->
</html>