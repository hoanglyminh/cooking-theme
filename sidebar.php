
<div class="col-lg-4 left-text-9 mt-lg-0 mt-5">

    <?php $categories = get_categories( array( 'orderby' => 'name', 'order' => 'ASC', 'parent' => 0 ) ); ?>

    <?php if($categories){ ?>
        <aside class="categories left-aside mb-4">
            <h6 class="heading-small-text-9"><?php echo __("Categories", "lmhoang");?></h6>
            <ul>
                <?php foreach( $categories as $category ) { 
                    printf( '<li><a href="%1$s">%2$s</a></li>',
                        esc_url( get_category_link( $category->term_id ) ),
                        esc_html( $category->name )
                    );
                } ?>
            </ul>
        </aside>
    <?php } ?>

    <?php
        $mostviews = new WP_Query( array( 'posts_per_page' => 10, 'meta_key' => 'views', 'orderby' => 'meta_value_num', 'order' => 'DESC' ));
        if ( $mostviews->have_posts() ) {
            ?>
                <aside class="posts-w3 left-aside mb-4">
                    <h6 class="heading-small-text-9 mb-3"><?php echo __("Most View" , "lmhoang"); ?></h6>
                    <?php while ( $mostviews->have_posts() ) { $mostviews->the_post(); ?>
                        <div class="mt-2 d-flex">
                           
                            <img class="img-fluid" src="<?php echo ( get_image_url_id( get_the_ID()) )?>" alt="<?php the_title(); ?>" >
                            
                            <div class="content-blog">
                                <h6 class="text-left-inner-9"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                <span class="sub-inner-text-9"><?php the_time('d/m/Y H:i:s'); ?></span>
                            </div>
                        </div>
                    <?php } ?>
                </aside>
            <?php 
            wp_reset_query();
        }
    ?>

    <!-- tags blog 

        <aside class="categories left-aside mb-4">
            <h6 class="heading-small-text-9">Advertisement</h6>
            <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/about.jpg" class="img-fluid radius-image">
        </aside>

        <aside class="tags-block left-aside mt-5">
            <h6 class="heading-small-text-9">Tags</h6>
            <a href="blog-single.html" class="">Cooking</a>
            <a href="blog-single.html" class="">Homemade</a>
            <a href="blog-single.html" class="">Recipes</a>
            <a href="blog-single.html" class="">Kitchen</a>
            <a href="blog-single.html" class="">Tasty</a>
        </aside>
    -->
</div>
