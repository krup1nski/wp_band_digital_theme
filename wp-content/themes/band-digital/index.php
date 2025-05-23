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

<!--  ABOUT AREA START  -->
<section id="intro" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="section-heading">
                    <p class="lead">We are creative digital marketing agency with expertise to grow any business that need proper guidance and a committed service.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5  d-none d-lg-block col-sm-12">
                <div class="intro-img">
                    <img src="assets/img/banner/why-choose.png" alt="intro-img" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 ">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>01.</span>
                            <h4>Management</h4>
                            <p>we founded September with the goal of creating meaningful digital experiences that connect with people.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>02.</span>
                            <h4>Strategy</h4>
                            <p>We’re full service which means we’ve got you covered on design & content right through to digital. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>03.</span>
                            <h4>Experience</h4>
                            <p>You’ll form a lasting relationship with us, collaboration is central to we do.Digital experiences connect people.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>04.</span>
                            <h4>Build</h4>
                            <p>Technology and design are the core of success for real estate related businesses. Leverage our years.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-cta">
                            <p class="lead ">Still have any question on mind ? <a href="#contact" class="smoth-scroll">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  ABOUT AREA END  -->

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

<!--  SERVICE PARTNER START  -->
<section id="service-head" class=" bg-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading text-white">
                    <h4 class="section-title">Full stack digital marketing solution</h4>
                    <p>We’re full service which means we’ve got you covered on design & content right through to digital. You’ll form a lasting relationship with us.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE PARTNER END  -->

<!--  SERVICE AREA START  -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <img src="assets/img/icon/007-digital-marketing-3.png" alt="service-icon" class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Video Marketing</h4>
                        <p>Reach a huge area of users and get a publicty of your product and service ,<span>video marketing</span> solution.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box ">
                    <div class="service-img-icon">
                        <img src="assets/img/icon/008-digital-marketing-2.png" alt="service-icon" class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Email Marketing</h4>
                        <p>Email Marketing is a great solution to reach a <span>high range of customers</span> eagrerly waiting to get a service.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <img src="assets/img/icon/003-task.png" alt="service-icon" class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>SEO optimization</h4>
                        <p>we provide wide range of<span> seo service</span> to make your site at top to reach your target customers provided.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <img src="assets/img/icon/010-digital-marketing.png" alt="service-icon" class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Custom Website</h4>
                        <p>We  provide <span>custom website</span> for any small and large company web based service in large compact package.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <img src="assets/img/icon/006-analytics.png" alt="service-icon" class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Content Growth</h4>
                        <p>Content is king,Having a blog site and want to <span>build content</span> make a platform of earning too we assist you.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <img src="assets/img/icon/004-hiring.png" alt="service-icon" class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Link Building </h4>
                        <p>Want to grow your <span>potential visitor</span> your site to make it more effective and succesful business .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->

<!-- PRICE AREA START  -->
<section id="pricing" class="section-padding bg-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading">
                    <h4 class="section-title">Affordable pricing plan for you</h4>
                    <p>We have different type of pricing table to choose with your need. Check which one is most suitble for you and your business purpose. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-block ">
                    <div class="price-header">
                        <i class="flaticon-start"></i>

                        <h4 class="price"><small>$</small>26</h4>
                        <h5>Monthly pack</h5>
                    </div>
                    <div class="line"></div>
                    <ul>
                        <li>5 GB Bandwidth</li>
                        <li>Highest Speed</li>
                        <li>1 GB Storage</li>
                        <li>Unlimited Website</li>
                        <li>Unlimited Users</li>
                        <li>Data Security and Backups</li>
                        <li>24x7 Great Support</li>
                        <li>Monthly Reports and Analytics</li>
                    </ul>

                    <a href="#" class="btn btn-hero btn-circled">select plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-block ">
                    <div class="price-header">
                        <i class="flaticon-value"></i>

                        <h4 class="price"><small>$</small>46</h4>
                        <h5>Monthly pack</h5>
                    </div>
                    <div class="line"></div>
                    <ul>
                        <li>5 GB Bandwidth</li>
                        <li>Highest Speed</li>
                        <li>1 GB Storage</li>
                        <li>Unlimited Website</li>
                        <li>Unlimited Users</li>
                        <li>Data Security and Backups</li>
                        <li>24x7 Great Support</li>
                        <li>Monthly Reports and Analytics</li>
                    </ul>

                    <a href="#" class="btn btn-hero btn-circled">select plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-block">
                    <div class="price-header">
                        <i class="flaticon-idea"></i>

                        <h4 class="price"><small>$</small>76</h4>
                        <h5>Monthly pack</h5>
                    </div>
                    <div class="line"></div>
                    <ul>
                        <li>5 GB Bandwidth</li>
                        <li>Highest Speed</li>
                        <li>1 GB Storage</li>
                        <li>Unlimited Website</li>
                        <li>Unlimited Users</li>
                        <li>Data Security and Backups</li>
                        <li>24x7 Great Support</li>
                        <li>Monthly Reports and Analytics</li>
                    </ul>

                    <a href="#" class="btn btn-hero btn-circled">select plan</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PRICE AREA END  -->

<!--  TESTIMONIAL AREA START  -->
<section id="testimonial" class="section-padding ">
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
            <div class="col-lg-8 m-auto col-sm-12 col-md-12">
                <div class="carousel slide" id="test-carousel2">
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#test-carousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#test-carousel2" data-slide-to="1"></li>
                            <li data-target="#test-carousel2" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info ">
                                            <div class="author-img">
                                                <img src="assets/img/author/3b.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <p><i class="icofont icofont-quote-left"></i>They is a great platform to anyone like who want to start buisiness but not get right decision. It’s really great placefor new to start the buisness in righ way! <i class="icofont icofont-quote-right"></i></p>
                                        <div class="author-text">
                                            <h5>Marine Joshi</h5>
                                            <p>Senior designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info ">
                                            <div class="author-img">
                                                <img src="assets/img/author/5b.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <p><i class="icofont icofont-quote-left"></i>They is a great platform to anyone like who want to start buisiness but not get right decision. It’s really great placefor new to start the buisness in righ way! <i class="icofont icofont-quote-right"></i></p>
                                        <div class="author-text">
                                            <h5>Marine Joshi</h5>
                                            <p>Senior designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  ITEM END  -->

                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info ">
                                            <div class="author-img">
                                                <img src="assets/img/author/3b.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <p><i class="icofont icofont-quote-left"></i>They is a great platform to anyone like who want to start buisiness but not get right decision. It’s really great placefor new to start the buisness in righ way!<i class="icofont icofont-quote-right"></i></p>
                                        <div class="author-text">
                                            <h5>Marine Joshi</h5>
                                            <p>Senior designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  ITEM END  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  TESTIMONIAL AREA END  -->

<!--  PARTNER START  -->
<section  class="section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                <img src="assets/img/clients/client01.png" alt="partner" class="img-fluid">
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                <img src="assets/img/clients/client06.png" alt="partner" class="img-fluid">
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                <img src="assets/img/clients/client04.png" alt="partner" class="img-fluid">
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                <img src="assets/img/clients/client05.png" alt="partner" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!--  PARTNER END  -->


<!--  BLOG AREA START  -->
<section id="blog" class="section-padding bg-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading">
                    <h4 class="section-title">Latest Blog news</h4>
                    <div class="line"></div>
                    <p>Our blog journey may come handy to build a community to make more effective success for business. Latest and trend tricks will help a lot </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block ">
                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    <div class="blog-text">
                        <h6 class="author-name"><span>Tips and tricks</span>john Doe</h6>
                        <a href="blog-single.html" class="h5 my-2 d-inline-block">
                            Best tips to grow your content quality and standard.
                        </a>
                        <p>If you want to grow your content quality and standard you should foolow these tips properly voluptatibus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block ">
                    <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                    <div class="blog-text">
                        <h6 class="author-name"><span>Branding</span>john Doe</h6>
                        <a href="blog-single.html" class="h5 my-2 d-inline-block">
                            Brand your site at top in few minuts.
                        </a>
                        <p>Brand your site at top, boost your audioance corporis facilis animi voluptas alias ex saepe quo voluptatibus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block ">
                    <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                    <div class="blog-text">
                        <h6 class="author-name"><span>Marketing</span>john Doe</h6>
                        <a href="blog-single.html" class="h5 my-2 d-inline-block">
                            How to become a best sale <br>marketer in a year!
                        </a>
                        <p>Becomeing a best sale marketer is not easy but not impossible too.Need to follow up some proper guidance and strategy .</p>
                    </div>
                </div>
            </div>
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
                    <span class="counter">460</span>
                    <h5>Our Happy Clients</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="counter-stat">
                    <i class="icofont icofont-rocket"></i>
                    <span class="counter">60</span>
                    <h5>Projects Done</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="counter-stat">
                    <i class="icofont icofont-hand-power"></i>
                    <span class="counter">30</span>
                    <h5>Experienced stuff</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="counter-stat">
                    <i class="icofont icofont-shield-alt"></i>
                    <span class="counter">25</span>
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