<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-blog" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="banner-title">Blog Details</h1>
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
            <main class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">

                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', get_post_type() );

                            the_post_navigation(
                                array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'band-digital' ) . '</span> <span class="nav-title">%title</span>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'band-digital' ) . '</span> <span class="nav-title">%title</span>',
                                )
                            );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>


                        <div class="comments my-4">
                            <h3 class="mb-5">Comments :</h3>

                            <div class="media mb-4">
                                <img src="assets/img/blog/2.jpg" alt="" class="img-fluid d-flex mr-4 rounded">
                                <div class="media-body">
                                    <h5>John michele</h5>
                                    <span class="text-muted">20 Jan 2018</span>
                                    <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laborum dolores quidem ea optio fuga nesciunt tempora, in tenetur iusto!</p>

                                    <a href="#" class="reply">Reply <i class="fa fa-reply"></i></a>

                                    <div class="media mt-5">
                                        <img src="assets/img/blog/2.jpg" alt="" class="img-fluid d-flex mr-4 rounded">
                                        <div class="media-body">
                                            <h5>John michele</h5>
                                            <span class="text-muted">20 Jan 2018</span>
                                            <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laborum dolores quidem ea optio fuga nesciunt tempora, in tenetur iusto!</p>

                                            <a href="#" class="reply">Reply <i class="fa fa-reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img src="assets/img/blog/2.jpg" alt="" class="img-fluid d-flex mr-4 rounded">
                                <div class="media-body">
                                    <h5>John michele</h5>
                                    <span class="text-muted">20 Jan 2018</span>
                                    <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laborum dolores quidem ea optio fuga nesciunt tempora, in tenetur iusto!</p>

                                    <a href="#" class="reply">Reply <i class="fa fa-reply"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 mb-3">
                            <h3 class="mt-5 mb-2">Leave a comment</h3>
                            <p class="mb-4">We don't spam at your inbox.</p>
                            <form action="#" class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <textarea cols="30" rows="6" class="form-control"  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <a href="#" class="btn btn-hero btn-circled">Send a message</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </main>

            <!-- BlOG SIDEBAR -->
            <?php get_sidebar()?>
        </div>
    </div>
</section>
<!--  Blog AREA End -->

<?php get_footer(); ?>
