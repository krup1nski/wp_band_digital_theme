<?php get_header()?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-service" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white"><?php the_title()?></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<section id="service-2" class="section-padding">
    <div class="container">

        <?php the_content()?>

    </div>
</section>



<!--  SERVICE AREA START  -->
<?php echo get_template_part('template-parts/content', 'service', ['class' => 'service-style-two', 'custom_title' => 'Yслуги'])?>
<!--  SERVICE AREA END  -->

<!--  PARTNER START  -->
<section id="clients" class="section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <h3 class="mb-2">Trusted by hundred over years</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, dignissimos?</p>
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


<?php get_footer()?>
