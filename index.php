<?php global $lmh_opt; ?>

<?php get_header() ?>

    <section class="inner-banner py-5"
        <?php if( ! empty($lmh_opt["image_default"]['url']) ) { echo 'style="background-image:url(\'' . esc_url($lmh_opt["image_default"]['url']) . '\')"'; }  ?>
    >
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5">
                    <?php _e(apply_filters( "lmh_title_index", "Title Index" )); ?>
                </h4>
                <ul class="breadcrumbs-custom-path">
                    <?php if(function_exists('bcn_display')) {  bcn_display(); }?>
                </ul>
            </div>
        </div>
    </section>

    <section class="w3l-blog" id="blog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row inner-sec-w3ls">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part( 'template/content', get_post_type() ); ?>
                    <?php endwhile; else : ?>
                <?php endif; ?> 
            </div>
            <div class="pagination-wrapper mt-5 text-center">
                <ul class="page-pagination">
                    <?php pagination(true); ?>
                </ul>
            </div>
        </div>
    </section>

    <?php require( THEME_DIR . "/section/ads_footer.php"); ?>

<?php get_footer() ?>