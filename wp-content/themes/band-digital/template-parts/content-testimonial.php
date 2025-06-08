<!-- TESTIMONIAL AREA START -->
<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <h3 class="mb-2">
                        <?php
                        if(!empty($args['custom_title'])){
                            echo esc_html($args['custom_title']);
                        }else{
                            echo 'Отзывы клиентов';
                        }
                        ?>
                    </h3>
                    <p>
                        <?php
                        if(!empty($args['custom_description'])){
                            echo esc_html($args['custom_description']);
                        }else{
                            echo 'Наши клиенты о нас';
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
                        $query = new WP_Query([
                            'posts_per_page' => 3,
                            'post_type'      => 'testimonials',
                        ]);
                        ?>

                        <ol class="carousel-indicators">
                            <li data-target="#test-carousel2" data-slide-to="0" class="active"></li>
                            <?php
                            for ($i = 1; $i < $query->post_count; $i++) {
                                echo '<li data-target="#test-carousel2" data-slide-to="' . esc_attr($i) . '"></li>';
                            }
                            ?>
                        </ol>

                        <?php
                        if ($query->have_posts()) {
                            $cnt = 0;
                            while ($query->have_posts()) {
                                $query->the_post();
                                $role = get_post_meta(get_the_ID(), 'role', true);
                                ?>
                                <div class="carousel-item <?php echo $cnt == 0 ? 'active' : ''; ?>">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="testimonial-content style-2">
                                                <div class="author-info">
                                                    <div class="author-img">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <p><i class="icofont icofont-quote-left"></i><?php the_content(); ?><i class="icofont icofont-quote-right"></i></p>
                                                <div class="author-text">
                                                    <h5><?php the_title(); ?></h5>
                                                    <?php if (!empty($role)) : ?>
                                                        <p><?php echo esc_html($role); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $cnt++;
                            }
                        } else {
                            echo '<p>Отзывов пока нет.</p>';
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIAL AREA END -->