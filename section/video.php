<?php global $lmh_opt; ?>

<?php
    $my_youtube = [
        'K-ICvWjyOfQ',
        'Qs-Hu6Lq5OY',
        'SETlIshmWk8',
    ];
?>

<?php if( isset($lmh_opt['home-video']) && $lmh_opt['home-video'] ){ ?>
    <section class="w3l-courses pt-5" id="courses">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <h5 class="sub-title text-center"><?php echo $lmh_opt['home-video-desc'];?></h5>
            <h3 class="title-style text-center"><?php echo $lmh_opt['home-video-title'];?></h3>
            <div class="row justify-content-center">
                <?php foreach ($my_youtube as $val) { ?>
                    <div class="col-lg-4 col-md-6 item mt-5">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <iframe src='https://youtube.com/embed/<?php echo esc_attr($val);?>' frameborder='0' allowfullscreen width='100%' height='315'></iframe>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </section>
<?php } ?>