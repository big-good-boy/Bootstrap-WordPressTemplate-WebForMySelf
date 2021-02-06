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

	<?php wp_head(); ?>
</head>

<body>
    <div class="preloader d-flex justify-content-center align-items-center">
        <div class="spinner-border text-danger" style="width: 10rem; height: 10rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <button class="scrollToTop"><i class="fas fa-angle-up"></i></button>

    <header class="main-header" <?php echo blurex_get_background('fon_shapki') ?>>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo home_url('/')?>">
                    <?php $custom_logo = wp_get_attachment_image_src( get_theme_mod('custom_logo') ); if($custom_logo): ?>
                        <img src="<?php echo $custom_logo[0] ?>" alt="<?php bloginfo('name') ?>">
                    <?php endif; ?>
                    <?php bloginfo('name') ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'header_menu',
                        'container' => false,
                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0'
                    ) )
                    ?>
                </div>
            </div>
        </nav>
        <div class="main-header-text">
            <?php if( get_field('zagolovok_1') ):?>
                <h3><?php the_field('zagolovok_1') ?></h3>
            <?php endif; ?>
            <?php if( get_field('zagolovok_2') ):?>
                <h4><?php the_field('zagolovok_2') ?></h4>
            <?php endif; ?>
            <?php if( get_field('tekst') ):?>
                <p><?php the_field('tekst') ?></p>
            <?php endif; ?>
            <div class="main-header-buttons">
                <?php
                if( get_field('knopka_1') ):
                $link = get_field('knopka_1');
                ?>
                    <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-pink rounded-pill"><?php echo esc_html($link['title']); ?></a>
                <?php endif; ?>
                <?php
                if( get_field('knopka_2') ):
                $link = get_field('knopka_2');
                ?>
                    <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-violet rounded-pill"><?php echo esc_html($link['title']); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <!-- /.main-header-text -->
    </header>