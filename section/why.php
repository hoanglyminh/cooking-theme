
<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['home-why']) && $lmh_opt['home-why'] ){ ?>
    <section class="w3l-whyblock pt-5">
        <div class="pb-lg-5 pb-md-4 pb-2">
            <div class="row align-items-center m-0">

                <div class="col-lg-6 ps-0">
                    <?php if(empty($lmh_opt['home-why-image']['url'])) { ?>
                        <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/about.jpg" class="img-fluid" alt="<?php echo __("Features") . " - " . get_bloginfo("name"); ?>" />
                    <?php } else { ?>
                        <img src="<?php echo ($lmh_opt['home-why-image']['url']); ?>" class="img-fluid" alt="<?php echo __("Features") . " - " . get_bloginfo("name"); ?>" />
                    <?php } ?>
                </div>

                <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">

                    <h5 class="sub-title"><?php echo __("Đặc trưng"); ?> </h5>

                    <h3 class="title-style mb-4"><?php echo (empty($lmh_opt['home-why-title']) ? "Why Choose Us?" : $lmh_opt['home-why-title']); ?></h3>

                    <p><?php echo (empty($lmh_opt['home-why-desc']) ? "" : $lmh_opt['home-why-desc']); ?></p>

                    <div class="two-grids mt-5">
                        <div class="grids_info">
                            <i class="<?php echo (empty($lmh_opt['home-why-icon-select-1']) ? "fas fa-trophy" : $lmh_opt['home-why-icon-select-1']); ?>"></i>
                            <div class="detail">
                                <h4><?php echo (empty($lmh_opt['home-why-title-1']) ? "" : $lmh_opt['home-why-title-1']); ?></h4>
                                <p><?php echo (empty($lmh_opt['home-why-desc-1']) ? "" : $lmh_opt['home-why-desc-1']); ?></p>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                            <i class="<?php echo (empty($lmh_opt['home-why-icon-select-2']) ? "fas fa-user-friends" : $lmh_opt['home-why-icon-select-2']); ?>"></i>
                            <div class="detail">
                                <h4><?php echo (empty($lmh_opt['home-why-title-2']) ? "" : $lmh_opt['home-why-title-2']); ?></h4>
                                <p><?php echo (empty($lmh_opt['home-why-desc-2']) ? "" : $lmh_opt['home-why-desc-2']); ?></p>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                            <i class="<?php echo (empty($lmh_opt['home-why-icon-select-3']) ? "fas fa-hourglass-half" : $lmh_opt['home-why-icon-select-3']); ?>"></i>
                            <div class="detail">
                                <h4><?php echo (empty($lmh_opt['home-why-title-3']) ? "" : $lmh_opt['home-why-title-3']); ?></h4>
                                <p><?php echo (empty($lmh_opt['home-why-desc-3']) ? "" : $lmh_opt['home-why-desc-3']); ?></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
<?php } ?>