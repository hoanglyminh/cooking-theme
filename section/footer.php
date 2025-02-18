
<?php if( isset($lmh_opt['home-footer']) && $lmh_opt['home-footer'] ){ ?>
    <?php $istagrams = new WP_Query($args = array('post_type'=> 'post','posts_per_page' => 8, 'orderby'=> 'rand')); ?>
    <?php if ($istagrams->have_posts()) : ?>
        <div class="projects" id="special">
            <div class="projects-grids">
                <div class="istagram-feeds">
                    <?php while ($istagrams->have_posts()) : $istagrams->the_post(); ?>
                        <div class="projects-w3l-grid-info">
                            <a href="<?php the_permalink() ?>">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <img src="<?=(get_image_url_id(get_the_ID(),'thumbnail'))?>" class="img-fluid" />  
                                <?php } else { ?>
                                    <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/blog-s1.jpg" class="img-fluid" />
                                <?php } ?>
                                <div class="content-overlay"></div>
                                <div class="content-details fadeIn-top">
                                    <span class="fa fa-instagram"></span>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?> 
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php } ?>