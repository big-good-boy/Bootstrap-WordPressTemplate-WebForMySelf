<?php get_header('main') ?>

<?php
$design_cat = get_category(3);

if($design_cat):
    $posts = get_posts( array(
        'numberposts' => 3,
        'category' => $design_cat->term_id,
    ) );
?>
<section class="section-watch section-tabs" <?php echo blurex_get_background('fonovoe_izobrazhenie', $design_cat) ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <?php if( get_field('zagolovok', $design_cat) ):?>
                    <h3><?php the_field('zagolovok', $design_cat) ?></h3>
                <?php endif; ?>
                <?php if( $design_cat->description ):?>
                    <h4><?php echo $design_cat->description ?></h4>
                <?php endif; ?>
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <?php
                    $data = [];
                    $i = 0;
                    foreach($posts as $post):
                        setup_postdata($post);
                        $data[$i]['post_name'] = $post->post_name;
                        $data[$i]['url'] = get_the_permalink();
                        $data[$i]['content'] = get_the_content('');
                    ?>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill <? if(!$i) echo 'active' ?>" id="<?php echo $post->post_name ?>-tab" data-bs-toggle="tab" href="#<?php echo $post->post_name ?>" role="tab" aria-controls="webdesign" aria-selected="true"><?php the_title() ?></a>
                    </li>
                    <?php $i++; endforeach; ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php foreach($data as $k => $item): ?>
                    <div class="tab-pane fade show <? if(!$k) echo 'active' ?>" id="<?php echo $item['post_name'] ?>" role="tabpanel" aria-labelledby="<?php echo $item['post_name'] ?>-tab">
                        <?php echo $item['content'] ?>
                        <p><a href="<?php echo $item['url'] ?>" class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex') ?></a></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /.col-md-6 -->

            <div class="col-lg-6 text-center">
                <?php if( get_field('dopolnitelnoe_izobrazhenie', $design_cat) ): ?>
                <img src="<?php echo get_field('dopolnitelnoe_izobrazhenie', $design_cat) ?>" alt="">
                <?php endif; ?>
            </div>
            <!-- /.col-md-6 -->
        </div>
    </div>
    <?php wp_reset_postdata(); unset($data, $posts); ?>
</section>
<!-- /.section-watch -->
<?php endif; ?>

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

<?php get_footer() ?>