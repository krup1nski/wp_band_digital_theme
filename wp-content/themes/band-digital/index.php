<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                        <div class="banner-content content-padding">
                            <h5 class="subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true) ?></h5>
                            <h1 class="banner-title"><?php echo get_post_meta($post->ID, 'banner-title', true) ?></h1>
                            <p><?php echo get_post_meta($post->ID, 'main-description', true) ?></p>

                            <a href="#" class="btn btn-white btn-circled">lets start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->


<section class="section-padding">
    <div class="container">
        <?php the_content() ?>
    </div>
</section>



<!--  SERVICE AREA START  -->
<section id="about" class="bg-light">
    <div class="about-bg-img d-none d-lg-block d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-md-8">
                <div class="about-content">
                    <h5 class="subtitle">About us</h5>
                    <h3>We are making beautiful <br>design layout for your business</h3>
                    <p>We craft beautiful website layout from scratch.You need not to worry about site design and other technial issue.We provide these attractive service as a bonus.Let's have atalk together for your next project.</p>

                    <ul class="about-list">
                        <li><i class="icofont icofont-check-circled"></i> Responsive site</li>

                        <li>
                            <i class="icofont icofont-check-circled"> </i> Latest bootstrap 4
                        </li>

                        <li>
                            <i class="icofont icofont-check-circled"> </i> Modern and clean design
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"> </i> Working contact form
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"> </i> Premium services and support
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"></i> Cross browser compatiabilty
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->



<!--  SERVICE AREA START  -->
<?php echo get_template_part('template-parts/content', 'service', ['class' => 'bg-feature', 'custom_title' => 'Наши услуги'])?>
<!--  SERVICE AREA END  -->


<!-- PRICE AREA START  -->
<?php echo get_template_part('template-parts/content', 'price', ['custom_title' => 'Цены', 'custom_description' => 'У нас есть различные типы таблиц цен, которые вы можете выбрать в соответствии с вашими потребностями. Проверьте, какая из них наиболее подходит для вас и ваших бизнес-целей.'])?>
<!-- PRICE AREA END  -->

<!--  TESTIMONIAL AREA START  -->
<?php echo get_template_part('template-parts/content', 'testimonial', [
        'class' => 'bg-feature',
        'custom_title' => 'Клиенты, которые нам доверяют',
        'custom_description'=>'Описание для отзывов'
])?>
<!--  TESTIMONIAL AREA END  -->

<!--  PARTNER START  -->
<?php echo get_template_part('template-parts/content', 'partner', ['custom_title' => 'Сотни людей, которым доверяли на протяжении многих лет', 'custom_description' => 'Они нам поверили, поверите и вы...'])?>
<!--  PARTNER END  -->


<!--  BLOG AREA START  -->
<section id="blog" class="section-padding bg-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading">
                    <h4 class="section-title">Последние новости блога</h4>
                    <div class="line"></div>
                    <p>Наше путешествие по блогам может пригодиться для создания сообщества, которое будет способствовать более эффективному продвижению бизнеса. Новейшие и модные приемы очень помогут </p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            global $post;

            $query = new WP_Query( [
                'posts_per_page' => 3,
                'orderby'        => 'post',
            ] );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="blog-block ">
                            <?php the_post_thumbnail('post-thumbnail', ['class'=>"img-fluid"]); ?>
<!--                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">-->
                            <div class="blog-text">
                                <?php $category = get_the_category(); ?>
                                <h6 class="author-name"><span><?php echo $category[0]->name; ?></span><?php the_author(); ?></h6>
                                <a href="blog-single.html" class="h5 my-2 d-inline-block">
                                    <?php the_title(); ?>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
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
<!--  BLOG AREA END  -->


<!--  COUNTER AREA START  -->
<section id="counter" class="section-padding">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="counter-stat">
                    <i class="icofont icofont-heart"></i>
                    <span class="counter"><?php echo get_post_meta($post->ID,'clients-count', true);?></span>
                    <h5>Our Happy Clients</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="counter-stat">
                    <i class="icofont icofont-rocket"></i>
                    <span class="counter"><?php echo get_post_meta($post->ID,'projects-count', true);?></span>
                    <h5>Projects Done</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="counter-stat">
                    <i class="icofont icofont-hand-power"></i>
                    <span class="counter"><?php echo get_post_meta($post->ID,'experienced-stuff', true);?></span>
                    <h5>Experienced stuff</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="counter-stat">
                    <i class="icofont icofont-shield-alt"></i>
                    <span class="counter"><?php echo get_post_meta($post->ID,'ongoning-projects', true);?></span>
                    <h5>Ongoning Projects</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  COUNTER AREA END  -->

<?php get_footer()?>

<?php wp_footer()?>

</body>

</html>