<?php global $lmh_opt; ?>

<?php get_header(); ?>

    <section class="inner-banner py-5"
        <?php if( !empty($lmh_opt["image_default"]['url']) ) { echo 'style="background-image:url(\'' . esc_url($lmh_opt["image_default"]['url']) . '\')"'; }  ?>
    >
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5"><?php the_title()?> </h4>
                <ul class="breadcrumbs-custom-path">
                    <?php if(function_exists('bcn_display')) { bcn_display(); }?>
                </ul>
            </div>
        </div>
    </section>

    <section class="w3l-blog py-2">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                
                <div class="col-lg-8">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="blog-single-post">
                                <div class="post-content entry px-0 border-0">
                                    <?php the_content() ?>
                                </div>

                                <div class="comment-icons">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> <?php the_date("Y-m-d H:i:s");?></li>
                                        <li><i class="fa fa-comment"></i> <?php printf( _nx("%d comments", "%d comment", get_comments_number() , "comments" , "lmhoang")  , number_format_i18n( get_comments_number() ) ); ?></li>
                                        <?php if( function_exists("the_views") ) { ?><li><i class="fa fa-eye"></i> <?php the_views(); ?> <?php echo __("view","lmhoang");?></li><?php } ?>
                                    </ul>
                                </div>

                                <div class="single-pagination d-flex justify-content-between">
                                    <div class="col-md-6 col-sm-6" id="nav-previous">
                                        <?php previous_post_link( '%link', '<i class="fas fa-arrow-left me-1"></i> %title' ); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6" id="nav-next">
                                        <?php next_post_link( '%link', '%title <i class="fas fa-arrow-right ms-1"></i>' ); ?>
                                    </div>
                                </div>
                                
                            </div>

                        <?php endwhile; ?>
                    <?php else : ?>
                        <h3> Không tìm thấy</h3>
                    <?php endif; ?>
                </div>

                <?php get_sidebar() ?>

            </div>
        </div>
    </section>

    <?php require( THEME_DIR . "/section/ads_footer.php"); ?>

<?php get_footer() ?>