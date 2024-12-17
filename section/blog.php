<?php global $lmh_opt; ?>
<?php if (have_posts()) : ?>
    <section class="w3l-blog" id="blog">
        <div class="container py-md-4 py-2">
            <h5 class="sub-title text-center">
                <?php if( isset($lmh_opt) && !empty($lmh_opt['home-blog-desc']) ){ ?> 
                    <?php echo __( $lmh_opt['home-blog-desc'] ,'lmhoang')?>
                <?php } else { ?> 
                    <?php echo __('Latest News','lmhoang')?>
                <?php }  ?>
            </h5>
            <h3 class="title-style text-center">
                <?php if( isset($lmh_opt) && !empty($lmh_opt['home-blog-title']) ){ ?> 
                    <?php echo __( $lmh_opt['home-blog-title'] ,'lmhoang')?>
                <?php } else { ?> 
                    <?php echo __('Our Fresh Blog Posts','lmhoang')?>
                <?php }  ?>
            </h3>
            <div class="row inner-sec-w3ls">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'template/content', get_post_type() ); ?>
                <?php endwhile; ?> 
            </div>
            <div class="pagination-wrapper mt-5 text-center">
                <ul class="page-pagination">
                    <?php pagination(true); ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>