<?php global $lmh_opt; ?>
<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if( !empty($lmh_opt['favicon']['thumbnail']) ) { echo "<link rel='shortcut icon' type='image/png' href='{$lmh_opt['favicon']['thumbnail']}' />"; } ?>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  
    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/assets/css/style-liberty.css?v=<?php echo (time());?>">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/style.css?v=<?php echo (time());?>">

    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/jquery-3.3.1.min.js"></script>

</head>

<body <?php body_class(); ?>>

<div class="lmh_wrapper">
    
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php bloginfo('url') ?>">
                    NoiTro <i class="fas fa-bread-slice ms-1"></i>
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