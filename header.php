<?php global $lmh_opt; ?>
<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if( !empty($lmh_opt['favicon']['thumbnail']) ) { echo "<link rel='shortcut icon' type='image/png' href='{$lmh_opt['favicon']['thumbnail']}' />"; } ?>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  
    <?php wp_head() ?>

    <style>
        :root {
            --primary-color: #f50537;
            --primary-dark: #00c16e;
            --bg-color: <?php echo ($lmh_opt['background-color'] ?? "#fff"); ?>;
            --heading-color: <?php echo ($lmh_opt['title-color'] ?? "#060606");?>;
            --font-color: <?php echo ($lmh_opt['text-color'] ?? "#707070");?>;
            --border-radius: 8px;
            --border-radius-full: 30px;
            --border-color-light: #eee;
            --iframe-filter: grayscale(0%);
            --bg-grey: #f4f4f4;
            --bg-lightgrey: #F8F9FA;
            --layer: rgb(0 0 0 / 40%);
            --layer-light: rgb(0 0 0 / 25%);
            --box-shadow: 0 1rem 3rem #f5f3f3;
            --footer-bg: #060500;
            --footer-bglight: #0e0e0e;
            --banner-layer: linear-gradient(to right, rgb(0 0 0 / 42%) 0%, transparent 100%);
            --white-color: #fff;
            --disable-color: #d8d6d6;
        }
    </style>

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/assets/css/style-liberty.css?v=<?php echo (time());?>">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/assets/css/style-gallery.css?v=<?php echo (time());?>">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/assets/vendor/lightbox/css/lightbox.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/style.css?v=<?php echo (time());?>">

    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/assets/vendor/lightbox/js/lightbox.js"></script>
    
</head>

<body <?php body_class(); ?>>

<div class="lmh_wrapper">
    
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">

                <a class="navbar-brand" href="<?php bloginfo('url') ?>">
                    <?php if( empty($lmh_opt['logo']['thumbnail']) ){ ?>
                        <?php bloginfo("name"); ?>
                    <?php } else { ?>
                        <img src ="<?php echo esc_url($lmh_opt['logo']['thumbnail']); ?>" height="60px"> <?php bloginfo("name"); ?>
                    <?php  } ?>
                </a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarScroll">

                    <?php lmh_menu(['menu_class' => 'navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll','fallback_cb' => 'primary_menu_cb']); ?>

                    <form action="/" method="GET" class="d-flex search-header ms-lg-2">
                        <input name="s" class="form-control" type="search" placeholder="<?php echo __("Enter Keyword");?>..." aria-label="Search" required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
  
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
            </nav>
        </div>
    </header>
