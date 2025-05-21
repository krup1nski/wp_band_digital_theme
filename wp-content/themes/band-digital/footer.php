<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-8 col-md-8">

                <?php if (!dynamic_sidebar('sidebar-footer-text')) : dynamic_sidebar('sidebar-footer-text') ?>
                <?php endif; ?>

            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <?php wp_nav_menu( array(
                        'theme_location'  => 'footer_left',
                        'container'       => 'div',
                        'container_class' => 'footer-widget footer-link',
                        'menu_class'      => '',
                        'echo'            => true,
                        'items_wrap'      => '<h4>Инфо</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 2,
                        ) ); ?>
            </div>

            <div class="col-lg-2 col-sm-6 col-md-6">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'footer_right',
                    'container'       => 'div',
                    'container_class' => 'footer-widget footer-link',
                    'menu_class'      => '',
                    'echo'            => true,
                    'items_wrap'      => '<h4>Cсылки</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 2,
                ) ); ?>
            </div>


            <div class="col-lg-3 col-sm-6 col-md-6">

                <?php if (!dynamic_sidebar('sidebar-footer-contacts')) : dynamic_sidebar('sidebar-footer-contacts') ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-copy">
                    © <?php echo date('Y')?> Promodise inc. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</section>
<!--  FOOTER AREA END  -->