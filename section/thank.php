<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['home-thank']) && ($lmh_opt['home-thank']) ) { ?>
    <section class="lmh-content-block1 py-5"  style="<?php echo (empty($lmh_opt['home-thank-image']['url']) ? "" : "background: url({$lmh_opt['home-thank-image']['url']}) no-repeat center;"); ?>">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 col-md-8 title-content py-md-5">
                    <h3 class="title-style text-white">
                        <?php echo (empty($lmh_opt['home-thank-title']) ? get_bloginfo("name") : __($lmh_opt['home-thank-title'])); ?>
                    </h3>
                    <p class="mt-3 text-light">
                        <?php echo (empty($lmh_opt['home-thank-desc']) ? get_bloginfo("description") : __($lmh_opt['home-thank-desc'])); ?>
                    </p>
                    <a href="<?php echo (empty($lmh_opt['home-thank-btn-url']) ? home_url() : $lmh_opt['home-thank-btn-url']); ?>" class="btn btn-style mt-5">
                        <?php echo (empty($lmh_opt['home-thank-btn-title']) ? __("Read More") : __($lmh_opt['home-thank-btn-title'])); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>