<?php global $lmh_opt; ?>

<?php 
    $slides = [
        get_bloginfo( 'template_url' ). "/assets/images/banner1.jpg",
        get_bloginfo( 'template_url' ). "/assets/images/banner2.jpg",
        get_bloginfo( 'template_url' ). "/assets/images/banner3.jpg",
        get_bloginfo( 'template_url' ). "/assets/images/banner4.jpg",
    ];
?>
<section class="w3l-main-slider" id="home">
    <div class="banner-content">
        <div id="demo-1"
            data-zs-src='[<?php echo '"'. implode('","',$slides) . '"';?>]'
        >
            <div class="demo-inner-content text-center">
                <div class="container">
                    <div class="banner-info">
                        <h5><?php bloginfo('name') ?></h5>
                        <h3 class="mt-2 mb-5"><?=($lmh_opt['sologan']??"")?></h3>
                        <p><?php bloginfo('description') ?></p>
                        <a href="" class="btn btn-style mt-4"><?php echo __('Read More' ,'lmhoang')?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>