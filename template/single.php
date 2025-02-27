<div class="blog-single-post">                   
    <div class="post-content entry px-0 border-0">
        <?php the_content() ?>
    </div>

    <div class="comment-icons">
        <ul>
            <li><i class="fa fa-tag"></i> <?php the_category(", ");?></a></li>
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