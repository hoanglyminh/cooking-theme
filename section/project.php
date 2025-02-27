<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['home-project']) && $lmh_opt['home-project'] ){ ?>
    <?php 
        $args = array(
            'numberposts' => 9,
            'post_type'   => 'project',
          );
        $latest_projects = get_posts( $args );
    ?>

    <?php if ( $latest_projects ) { ?>
        <div class="w3l-team-grids-sec py-5" id="project">
            <div class="container pb-lg-5 pb-md-4 pb-2">
                <h5 class="sub-title text-center"><?php echo $lmh_opt['home-project-desc'];?></h5>
                <h3 class="title-style text-center"><?php echo $lmh_opt['home-project-title'];?></h3>
                <div class="row cards">
                    <?php foreach ( $latest_projects as $post ) :  setup_postdata( $post ); ?>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <a href="<?php echo get_image_url_id(get_the_ID());?>" class="card" data-lightbox="<?php echo $lmh_opt['home-project-desc'];?>"> 
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <img src="<?php echo get_image_url_id(get_the_ID());?>" class="card__image radius-image" alt="<?php the_title(); ?>" style="height: 320px;" />
                                <?php } else { ?>
                                    <img src="<?php echo esc_url(empty($lmh_opt["image_default"]['url']) ? (THEME_URL . "/assets/images/no-image.jpg") : $lmh_opt["image_default"]['url']); ?>" class="card__image radius-image " alt="<?php the_title(); ?>" style="height: 320px;" />
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