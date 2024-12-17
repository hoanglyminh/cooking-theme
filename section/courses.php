<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['video-youtube']) && $lmh_opt['video-youtube'] ){ ?>
    <?php if( $lmh_opt['video-youtube-link'] ){ ?>
        <section class="w3l-courses pt-5" id="courses">
            <div class="container pb-lg-5 pb-md-4 pb-2">
                
                <h5 class="sub-title text-center"><?php echo __('Our Reviews', 'lmhoang');?></h5>
                <h3 class="title-style text-center"><?php echo __('Popular Videos', 'lmhoang');?></h3>
                
                <div class="row justify-content-center">

                    <?php for($i = 0; $i < 3 ; $i++ ) { ?>
                        
                        <div class="col-lg-4 col-md-6 item mt-5">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <iframe src='https://youtube.com/embed/<?php echo youtube_id($lmh_opt['video-youtube-link'][$i]);?>' frameborder='0' allowfullscreen width='100%' height='315'></iframe>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>

            </div>
        </section>
    <?php } ?>
<?php } ?>