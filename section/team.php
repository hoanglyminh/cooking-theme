<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['home-team']) && $lmh_opt['home-team'] ){ ?>
    <?php 
        $args = array(
            'numberposts' => empty( $lmh_opt['home-team-num'] ) ? 3 : $lmh_opt['home-team-num'],
            'post_type'   => 'team',
          );
        $latest_teams = get_posts( $args );
    ?>
    <?php if ( $latest_teams ) { ?>
        <div class="w3l-team-grids-sec py-5" id="team">
            <div class="container pb-lg-5 pb-md-4 pb-2">
                <h5 class="sub-title text-center"><?php echo $lmh_opt['home-team-desc'];?></h5>
                <h3 class="title-style text-center"><?php echo $lmh_opt['home-team-title'];?></h3>
                <div class="row cards">
                    <?php foreach ( $latest_teams as $post ) :  setup_postdata( $post ); ?>
                        <div class="col-lg-4 col-md-4 mt-5">
                            <a href="<?php the_permalink(); ?>" class="card">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <img src="<?php echo get_image_url_id(get_the_ID());?>" class="card__image radius-image" alt="<?php the_title(); ?>" />
                                <?php } else { ?>
                                    <img src="<?php echo esc_url(empty($lmh_opt["image_default"]['url']) ? (THEME_URL . "/assets/images/no-image.jpg") : $lmh_opt["image_default"]['url']); ?>" class="card__image radius-image" alt="<?php the_title(); ?>" />
                                <?php } ?>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <div class="card__header-text">
                                            <h3 class="card__title"><?php the_title(); ?></h3>
                                            <span class="card__status"></span>
                                        </div>
                                    </div>
                                    <p class="card__description">
                                        <?php echo wp_strip_all_tags( get_the_excerpt() ); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php wp_reset_postdata(); } ?>
<?php } ?>