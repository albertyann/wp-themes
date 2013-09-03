
<div style="clear:both"></div>
<div class="container">
    <footer> 

        <div class="row">

                    <div class="span6">
                        <div class="fwidget">

                            <div class="col-l">
                                <h6>公司产品</h6>
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'menu-one',
                                    'menu_class'=>'',
                                    )); ?>

                            </div>
                            <div class="col-r">
                                <h6>&nbsp;</h6>
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'menu-two',
                                    'menu_class'=>'',
                                    )); ?>
                            </div>

                        </div>
                    </div>

                    <div class="span3">
                        <div class="fwidget">
                            <h6>关注云仓</h6>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'menu-four',
                                'menu_class'=>'',
                                )); ?>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="fwidget">
                            <h6>更多</h6>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'menu-five',
                                'menu_class'=>'',
                                )); ?>
                        </div>
                    </div>

        </div>
        
        <div class="row">
            <div class="span12">
                    <div class="copy">
                        <p>
                            Copyright 2013 &copy;
                            <a href="<?php echo home_url(); ?>">云仓科技</a>
                            -
                            <a href="<?php echo get_permalink(32); ?>">关于云仓</a>
                            |
                            <a href="<?php echo get_permalink(326); ?>">联系我们</a>
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