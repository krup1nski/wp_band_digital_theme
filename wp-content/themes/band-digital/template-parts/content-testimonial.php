<!--  TESTIMONIAL AREA START  -->
<section id="testimonial" class="section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <h3 class="mb-2">
                        <?php
                        if(!empty($args['custom_title'])){
                            echo $args['custom_title'];
                        }else{
                            echo 'Список услуг';
                        }
                        ?>
                    </h3>
                    <p>
                        <?php
                        if(!empty($args['custom_description'])){
                            echo $args['custom_description'];
                        }else{
                            echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, dignissimos?';
                        }
                        ?>
                        </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 m-auto col-sm-12 col-md-12">
                <div class="carousel slide" id="test-carousel2">
                    <div class="carousel-inner">

                        <?php
                        global $post;

                        $query = new WP_Query( [
                            'posts_per_page' => 3,
                            'post_type'        => 'testimonials',
                        ] );
                        ?>

                        <ol class="carousel-indicators">
                            <li data-target="#test-carousel2" data-slide-to="0" class="active"></li>
                            <?php
                            for ($i=1; $i < $query->post_count; $i++) {?>
                                <li data-target="#test-carousel2" data-slide-to="<?php echo $i ?>"></li>
                            <?php }
                            ?>
                        </ol>

                        <?php
                        if ( $query->have_posts() ) {
                            $cnt=0;
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                ?>
                                <div class="carousel-item <?php echo $cnt == 1 ? 'active' : ''; ?>">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="testimonial-content style-2">
                                                <div class="author-info ">
                                                    <div class="author-img">
                                                        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" class="img-fluid">
                                                    </div>
                                                </div>

                                                <p><i class="icofont icofont-quote-left"></i>They is a great platform to anyone like who want to start buisiness but not get right decision. It’s really great placefor new to start the buisness in righ way! <i class="icofont icofont-quote-right"></i></p>
                                                <div class="author-text">
                                                    <h5><?php the_title() ?></h5>
                                                    <p>Senior designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $cnt++;
                            }
                        } else {
                            // Постов не найдено
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>

                        <!--  ITEM END  -->

                        <!--  ITEM END  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  TESTIMONIAL AREA END  -->