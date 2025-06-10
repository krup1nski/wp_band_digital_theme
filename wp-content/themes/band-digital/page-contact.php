<?php get_header(); ?>
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Let's Connect with us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->


<!--  Contact START  -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="mb-5">
                    <h2 class="mb-2">Get in touch</h2>
                    <p>Have a project on mind,want to make an consultant. Don't hesistate to contact us.Let's have atalk together.Colaborat eyour project to done quickly</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <?php echo do_shortcode('[contact-form-7 id="70afd52" title="Контактная форма"]') ?>
            </div>



            <div class="col-lg-5 pl-4 mt-4 mt-lg-0">

                <p class="mb-3"><?php
                    if (function_exists('get_field')) {
                        $value = get_field('address', 10);
                        echo $value ?: 'Пустое значение';
                    } else {
                        echo 'Плагин ACF не активирован';
                    }
                    ?></p>
                <h4>Office Address</h4>
                <p class="mb-3">
                    <?php
                    $address = get_field('address', 10);
                    echo $address ? esc_html($address) : 'Адрес не указан';
                    ?>
                </p>

                <h4>Contact Info</h4>
                <p class="mb-3">
                    <?php
                    $current_address = get_field('address', get_the_ID());
                    echo $current_address ? esc_html($current_address) : 'Адрес не указан';
                    ?>
                </p>

                <h4>Contact Mail</h4>
                <p class="mb-3">
                    <?php
                    $email = get_field('email', 10);
                    echo $email ? antispambot(esc_html($email)) : 'Email не указан';
                    ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!--  CONTACT END  -->

<!--  PARTNER START  -->
<section id="map" class="section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-6 col-md-3">
            </div>
        </div>
    </div>
</section>
<!--  PARTNER END  -
<?php get_footer(); ?>
