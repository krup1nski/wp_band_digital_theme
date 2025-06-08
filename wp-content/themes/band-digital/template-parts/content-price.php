

<!-- PRICE AREA START  -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading">
                    <h4 class="section-title"><?php echo $args['custom_title']; ?></h4>
                    <p><?php echo $args['custom_description']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            global $post;

            $query = new WP_Query( [
                'posts_per_page' => 3,
                'post_type'        => 'tariffs',
                'order'         => 'asc',
            ] );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>

                    <div class="col-lg-4 col-sm-6">
                        <div class="pricing-block ">
                            <div class="price-header">
                                <i class="flaticon-start"></i>
                                <h4 class="price"><small>$</small><?php the_title()?></h4>
                                <h5><?php the_excerpt(); ?></h5>
                            </div>
                            <div class="line"></div>
                            <?php the_content(); ?>
                            <a href="#" class="btn btn-hero btn-circled">Выбрать план</a>
                        </div>
                    </div>

                    <?php
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

        </div>
    </div>
</section>
<!-- PRICE AREA END  -->