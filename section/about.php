<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['home-about']) && $lmh_opt['home-about'] ){ ?>
    <section class="w3l-aboutblock py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-5">

                    <h3 class="title-style"> <?php echo __( $lmh_opt['home-about-title'] ,'lmhoang');?></h3>

                    <?php echo ($lmh_opt['home-about-desc']);?>

                </div>
                <div class="col-lg-7 ps-lg-5 mt-lg-0 mt-5">
                    <div class="row align-items-center">
                        <div class="col">
                            <?php if( !empty($lmh_opt['home-about-image-right']['url']) ){ ?>
                                <img src="<?php echo esc_attr($lmh_opt['home-about-image-right']['url']); ?>" alt="" class="img-fluid radius-image">
                            <?php } else { ?> 
                                <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/about1.jpg" alt="" class="img-fluid radius-image">
                            <?php } ?>
                        </div>
                        <div class="col">
                            <?php if( !empty($lmh_opt['home-about-image-left']['url']) ){ ?>
                                <img src="<?php echo esc_attr($lmh_opt['home-about-image-left']['url']); ?>" alt="" class="img-fluid radius-image">
                            <?php } else { ?> 
                                <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/about2.jpg" alt="" class="img-fluid radius-image">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php } ?>