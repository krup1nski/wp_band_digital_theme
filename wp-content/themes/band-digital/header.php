<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="dreambuzz">

    <?php wp_head();?>

    <title>Promodise - seo and digital marketing solution </title>

</head>

<body data-spy="scroll" data-target=".fixed-top">

<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">

            <?php
            if(has_custom_logo()){
                echo get_custom_logo();
            }
            ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <?php
            wp_nav_menu( [
                'theme_location'  => 'header',
                'container'       => 'false',
                'menu_class'      => 'navbar-nav',
                'echo'            => true,
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 2,
                'walker' => new bootstrap_4_walker_nav_menu,
            ] );
            ?>

<!--            <ul class="navbar-nav ">-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Home-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarWelcome">-->
<!--                        <a class="dropdown-item " href="index.html">-->
<!--                            Home-1-->
<!--                        </a>-->
<!--                        <a class="dropdown-item " href="index-2.html">-->
<!--                            Home-2-->
<!--                        </a>-->
<!--                        <a class="dropdown-item " href="index-3.html" target="blank">-->
<!--                            Onepage-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link smoth-scroll" href="about.html">About</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link smoth-scroll" href="service.html">Service</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link smoth-scroll" href="pricing.html">Pricing</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link smoth-scroll" href="blog.html">Blog</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link smoth-scroll" href="contact.html">Contact</a>-->
<!--                </li>-->
<!--            </ul>-->
        </div>
    </div>
</nav>
<!--MAIN HEADER AREA END -->