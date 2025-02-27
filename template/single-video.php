<?php  $lmh_video_url = get_post_meta( get_the_ID(), '_lmh_video_url', true ); ?>

<div class="blog-single-post">

    <div id="show_video">
        <div class="ratio ratio-16x9">
            <iframe src='<?php echo esc_attr(get_url_iframe($lmh_video_url));?>' frameborder='0' allowfullscreen></iframe>
        </div>
    </div>

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
</div>