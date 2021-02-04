<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .preloader {
			position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            background-color: #FEFEFE;
        }
	</style>

    <title>Hello, world!</title>
	<?php wp_head(); ?>
</head>

<body>
    <div class="preloader d-flex justify-content-center align-items-center">
        <div class="spinner-border text-danger" style="width: 10rem; height: 10rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <button class="scrollToTop"><i class="fas fa-angle-up"></i></button>

    <header class="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt=""> BlueRex</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main-header-text">
            <h3>We are best and creative agency</h3>
            <h4>We turn creative ideas into your business.</h4>
            <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem ipsum ese
                terds.</p>
            <div class="main-header-buttons">
                <button type="button" class="btn btn-pink rounded-pill">Our story</button>
                <button type="button" class="btn btn-violet rounded-pill">Read more</button>
            </div>
        </div>
        <!-- /.main-header-text -->
    </header>

    <section class="section-watch section-tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h3>Dream Big Inspire the World</h3>
                    <h4>We turn creative ideas into your business.</h4>

                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill active" id="webdesign-tab" data-bs-toggle="tab"
                                href="#webdesign" role="tab" aria-controls="webdesign" aria-selected="true">Web
                                design</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill" id="mobileapp-tab" data-bs-toggle="tab" href="#mobileapp"
                                role="tab" aria-controls="mobileapp" aria-selected="false">Mobile app</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill" id="branding-tab" data-bs-toggle="tab" href="#branding"
                                role="tab" aria-controls="branding" aria-selected="false">Branding</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="webdesign" role="tabpanel"
                            aria-labelledby="home-tab">
                            <p>webdesign Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut
                                rhoncus lorem ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing
                                elit. Sed sodales enim ut rhoncus lorem ipsum ese terds.Lorem ipsum dolor sit am et,
                                consec tetur adipi scing elit.</p>
                            <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                        </div>
                        <div class="tab-pane fade" id="mobileapp" role="tabpanel" aria-labelledby="profile-tab">
                            <p>mobileapp Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut
                                rhoncus lorem ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing
                                elit. Sed sodales enim ut rhoncus lorem ipsum ese terds.Lorem ipsum dolor sit am et,
                                consec tetur adipi scing elit.</p>
                            <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                        </div>
                        <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="contact-tab">
                            <p>branding Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut
                                rhoncus lorem ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing
                                elit. Sed sodales enim ut rhoncus lorem ipsum ese terds.Lorem ipsum dolor sit am et,
                                consec tetur adipi scing elit.</p>
                            <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->

                <div class="col-lg-6 text-center">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/watch.png" alt="">
                </div>
                <!-- /.col-md-6 -->
            </div>
        </div>
    </section>
    <!-- /.section-watch -->

    <section class="section-progress text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 progress-item">
                    <div><i class="fas fa-bullhorn"></i></div>
                    <div class="num">500+</div>
                    <h4><span>Successfully</span> completed projects</h4>
                    <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem
                        ipsum ese terds.</p>
                </div>
                <!-- /.col-md-4 progress-item -->
                <div class="col-md-4 progress-item">
                    <div><i class="fas fa-bullhorn"></i></div>
                    <div class="num">254+</div>
                    <h4><span>Highly</span> specialised employees</h4>
                    <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem
                        ipsum ese terds.</p>
                </div>
                <!-- /.col-md-4 progress-item -->
                <div class="col-md-4 progress-item">
                    <div><i class="fas fa-bullhorn"></i></div>
                    <div class="num">45+</div>
                    <h4><span>Awards</span> around the world</h4>
                    <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem
                        ipsum ese terds.</p>
                </div>
                <!-- /.col-md-4 progress-item -->
            </div>
        </div>
    </section>
    <!-- /.section-progress -->

    <section class="section-lets text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Let's Grow Together</h3>
                    <h4>We turn creative ideas into your business.</h4>
                    <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem
                        ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing elit.</p>
                    <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section-lets text-center -->

    <section class="section-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>We are best and creative agency</h3>
                    <h4>We turn creative ideas into your business.</h4>
                    <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem
                        ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut
                        rhoncus lorem ipsum ese terds.</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <span><i class="far fa-comments"></i></span>
                            <h2>Graphic Design</h2>
                            <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus
                                lorem ipsum ese terds.</p>
                            <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6 mb-3">
                            <span><i class="fas fa-bullhorn"></i></span>
                            <h2>Graphic Design</h2>
                            <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus
                                lorem ipsum ese terds.</p>
                            <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9 mt-5">
                        <iframe id="videoPlayer" class="embed-responsive-item"
                            src="https://www.youtube.com/embed/wdyfS9oQues?enablejsapi=1&amp;html5=1&amp;rel=0&amp;&amp;showinfo=0"
                            allowfullscreen></iframe>
                        <div id="videoPlayBtn"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section-design -->

    <section class="section-work section-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h4>Our Recent Work</h4>
                    <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem
                        ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut
                        rhoncus lorem ipsum ese terds.Lorem ipsum dolor sit am et, consec tetur adipi scing elit.</p>
                </div>
                <!-- /.col-md-8 -->

                <div class="col-md-12">
                    <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill active" id="webdesign2-tab" data-bs-toggle="tab"
                                href="#webdesign2" role="tab" aria-controls="webdesign2" aria-selected="true">Web
                                design</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill" id="mobileapp2-tab" data-bs-toggle="tab" href="#mobileapp2"
                                role="tab" aria-controls="mobileapp2" aria-selected="false">Mobile app</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-pill" id="branding2-tab" data-bs-toggle="tab" href="#branding2"
                                role="tab" aria-controls="branding2" aria-selected="false">Branding</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="webdesign2" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="gallery text-center row">
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/1.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/2.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/3.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/4.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/5.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/6.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/7.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/8.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/9.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mobileapp2" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="gallery text-center row">
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/7.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/8.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/9.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/1.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/2.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/3.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/4.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/5.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/6.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="branding2" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="gallery text-center row">
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/4.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/5.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/6.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/7.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/8.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/9.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/1.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/2.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt=""></a></div>
                                <div class="col-sm-4 gallery-item"><a href="img/gallery/3.jpg"><img
                                            src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
        </div>
    </section>
    <!-- /.section-work -->

    <section class="section-brands">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center align-self-center"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-cisco.png" alt="Cisco"></div>
                <div class="col-sm-3 text-center align-self-center"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-adidas.png" alt="Adidas"></div>
                <div class="col-sm-3 text-center align-self-center"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-lenovo.png" alt="Lenovo"></div>
                <div class="col-sm-3 text-center align-self-center"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-disnei.png" alt="Disnei"></div>
            </div>
            <div class="row">
                <div class="col-sm-3 text-center align-self-end"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-amazon.png" alt="Amazon"></div>
                <div class="col-sm-3 text-center align-self-end"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-puma.png" alt="Puma"></div>
                <div class="col-sm-3 text-center align-self-end"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-apple.png" alt="Apple"></div>
                <div class="col-sm-3 text-center align-self-end"><img src="<?php bloginfo('template_url') ?>/assets/img/brand-mini.png" alt="Mini"></div>
            </div>
        </div>
    </section>
    <!-- /.section-brands -->

    <section class="section-reviews">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="carousel-caption">
                                    <h3>Our Happy Client</h3>
                                    <h4>Testimonials</h4>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing elit.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Mr. John Doe</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- /.col-sm-7 -->
                            <div class="col-sm-5 d-none d-sm-block">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
                            </div>
                            <!-- /.col-sm-5 -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="carousel-caption">
                                    <h3>Our Happy Client</h3>
                                    <h4>Testimonials</h4>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing elit.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Mr. Jack</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- /.col-sm-7 -->
                            <div class="col-sm-5 d-none d-sm-block">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
                            </div>
                            <!-- /.col-sm-5 -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="carousel-caption">
                                    <h3>Our Happy Client</h3>
                                    <h4>Testimonials</h4>
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing elit.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">Mr. David</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- /.col-sm-7 -->
                            <div class="col-sm-5 d-none d-sm-block">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
                            </div>
                            <!-- /.col-sm-5 -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>
    <!-- /.section-rewievs -->

    <section class="section-form text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Need Help?</h4>
                    <h5>Don't Forget to Contact With Us</h5>
                    <p>Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus lorem ipsum ese terds. Lorem ipsum dolor sit am et, consec tetur adipi scing elit. Sed sodales enim ut rhoncus.</p>
                    <form class="text-start">
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-violet btn-shadow">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section-form -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Aproach</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                        <!-- /.col-6 -->
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Aproach</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                        <!-- /.col-6 -->
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Aproach</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                        <!-- /.col-6 -->
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Aproach</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                        <!-- /.col-6 -->
                    </div>
                </div>
                <!-- /.col-md-6 -->

                <div class="col-md-6 footer-images">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/footer_img1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/footer_img2.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/footer_img3.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/footer_img4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.footer -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <span class="nav-link">&copy; 2022 Theme by psdfreebies.com</span>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Privacy</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.copyright -->
	<?php wp_footer(); ?>
</body>

</html>