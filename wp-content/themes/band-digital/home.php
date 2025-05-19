<?php get_header(); ?>

    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-blog" id="page-banner">
        <div class="overlay dark-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                    <div class="banner-content content-padding">
                        <h1 class="banner-title">Latest news</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->

    <!--  Blog AREA START  -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="row">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-6">
                                <div class="blog-post">
                                    <?php the_post_thumbnail( 'thumbnail', array(
                                            'class' => "img-fluid",
                                    )); ?>
                                    <div class="mt-4 mb-3 d-flex">
                                        <div class="post-author mr-3">
                                            <i class="fa fa-user"></i>
                                            <span class="h6 text-uppercase"><?php the_author(); ?></span>
                                        </div>

                                        <div class="post-info">
                                            <i class="fa fa-calendar-check"></i>
                                            <span><?php the_time('j F Y') ?></span>
                                        </div>
                                    </div>
                                    <a href="<?php echo get_the_permalink() ?>" class="h4 "><?php the_title(); ?></a>
                                    <p class="mt-3"><?php the_excerpt(); ?></p>
                                    <a href="<?php echo get_the_permalink() ?>" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        <?php endwhile; else: ?>
                            Записей нет.
                        <?php endif; ?>


                        <div class="col-lg-12">
                            <?php the_posts_pagination($args = array(
                                'prev_text'    => __('<span class="p-3 border">«</span>'),
                                'next_text'    => __('<span class="p-3 border">»</span>'),
                                'before_page_number' => '<span class="p-3">',
                                'after_page_number'  => '</span>',
                            )); ?>
                        </div>


                    </div>
                </div>


            <?php get_sidebar() ?>

            </div>
        </div>
    </section>
    <!--  Blog AREA End -->

<?php get_footer(); ?>