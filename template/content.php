
<?php global $lmh_opt; ?>

<div class="col-lg-4 col-md-6 about-in blog-grid-info text-left mt-4">
    <div class="card img blog-info">
        <div class="card-body img">
            <div class="img-thumbnails">
                <a href="<?php the_permalink() ?>" class="d-block">
                    <?php if ( has_post_thumbnail() ) { ?>                
                        <img src="<?php echo get_image_url_id(get_the_ID());?>" class="img-fluid radius-image">                                
                    <?php } else { ?>
                        <img src="<?php echo esc_url(empty($lmh_opt["image_default"]['url']) 
                                    ? (THEME_URL . "/assets/images/no-image.jpg") 
                                    : $lmh_opt["image_default"]['url']); ?>" 
                                class="img-fluid radius-image">
                    <?php } ?>
                </a>
            </div>
            <div class="blog-des">
                <ul class="admin-post mb-3">
                    <li><span class="fas fa-user"></span> <?php the_author() ?></li>
                    <li><span class="fas fa-eye"></span> <?php echo (function_exists('the_views') ? the_views(false) : 0) ;?></li>
                    <li><span class="fas fa-comments"></span> <?php echo (get_comments_number());?></li>
                </ul>
                <h5 class="card-title lmh-title mb-3">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h5>
            </div>
        </div>
    </div>
</div>