<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['home-video']) && $lmh_opt['home-video'] ){ ?>

    <?php 
        $args = array(
            'numberposts' => 3,
            'post_type'   => 'video',
            'fields' => 'ids',
          );
        $latest_videos = get_posts( $args );
    ?>

    <?php if ( $latest_videos ) { ?>
        <section class="w3l-courses pt-5" id="courses">
            <div class="container pb-lg-5 pb-md-4 pb-2">
                <h5 class="sub-title text-center"><?php echo $lmh_opt['home-video-desc'];?></h5>
                <h3 class="title-style text-center"><?php echo $lmh_opt['home-video-title'];?></h3>
                <div class="row justify-content-center">
                    <?php foreach ($latest_videos as $video) { ?>
                        <?php  $lmh_video_url = get_post_meta( $video, '_lmh_video_url', true ); ?>
                        <div class="col-lg-4 col-md-6 item mt-5">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <div class="ratio ratio-16x9">
                                        <iframe src='<?php echo esc_attr(get_url_iframe($lmh_video_url));?>' frameborder='0' allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
        </section>
    <?php wp_reset_postdata(); } ?>
    
<?php } ?>