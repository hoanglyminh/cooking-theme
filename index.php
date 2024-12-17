<?php get_header() ?>

<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-5 pb-sm-4 pb-2">
            <h4 class="inner-text-title font-weight-bold pt-5">
                <?php 
                    if( is_single() || is_page() ) {
                        the_title();
                    } else if ( is_archive() ) {
                        single_cat_title();
                    }
                ?>
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

<?php get_footer() ?>