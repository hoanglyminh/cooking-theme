<?php get_header(); ?>

<section class="inner-banner py-5" 
    <?php if( has_post_thumbnail() ) { echo 'style="background-image:url(\'' . get_image_url_id(get_the_ID()) . '\')"'; }  ?>
>
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-5 pb-sm-4 pb-2">
            <h4 class="inner-text-title font-weight-bold pt-5"><?php the_title()?> </h4>
            <?php if(function_exists('bcn_display')) { ?>
                <ul class="breadcrumbs-custom-path">
                    <?php bcn_display();?>
                </ul>
            <?php } ?>
        </div>
    </div>
</section>

<section class="w3l-blog py-2">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part( 'template/single', get_post_type() ); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h3>Không tìm thấy</h3>
                <?php endif; ?>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</section>

<?php get_footer() ?>