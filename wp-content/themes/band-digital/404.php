<?php get_header() ?>

    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-blog" id="page-banner">
        <div class="overlay dark-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                    <div class="banner-content content-padding">
                        <h5 class="subtitle bg-danger">Ошибка 404</h5>
                        <h1 class="banner-title ">Страница не найдена</h1>
                    </div>

                    <?php the_widget('WP_Widget_Search') ?>

                    <a href="/wordpress/" class="btn btn-white btn-circled">Перейти на главную</a>

                </div>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->

<?php get_footer() ?>