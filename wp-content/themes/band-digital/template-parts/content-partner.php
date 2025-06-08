<!--  PARTNER START  -->
<section id="clients" class="section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <h3 class="mb-2"><?php
                        if(!empty($args['custom_title'])){
                            echo esc_html($args['custom_title']);
                        }else{
                            echo 'Партнеры';
                        }
                        ?></h3>
                    <p><?php
                        if(!empty($args['custom_description'])){
                            echo esc_html($args['custom_description']);
                        }
                        ?></p>
                </div>
            </div>
        </div>

        <div class="row">

            <?php
            global $post;

            $query = new WP_Query( [
                'posts_per_page' => 4,
                'post_type'        => 'partners',
            ] );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="partner" class="img-fluid img-services">
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
<!--  PARTNER END  -->