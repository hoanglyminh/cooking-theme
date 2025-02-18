<?php global $lmh_opt; ?>

<?php get_header(); ?>

<!-- banner section -->
    <?php require( THEME_DIR . "/section/banner.php"); ?>
<!-- //banner section -->

    <?php
        $layout = $lmh_opt['homepage-blocks']['enabled'];
        if ( $layout ): 
            foreach ( $layout as $key => $value ) {
                switch($key) {
                    case 'about': 
                        if( file_exists(THEME_DIR . "/section/about.php") ) require( THEME_DIR . "/section/about.php");
                    break;

                    case 'video': 
                        if( file_exists(THEME_DIR . "/section/video.php") ) require( THEME_DIR . "/section/video.php");
                    break;

                    case 'blog': 
                        if( file_exists(THEME_DIR . "/section/blog.php") ) require( THEME_DIR . "/section/blog.php");
                    break;

                    case 'why': 
                        if( file_exists(THEME_DIR . "/section/why.php") ) require( THEME_DIR . "/section/why.php");
                    break;

                    case 'team': 
                        if( file_exists(THEME_DIR . "/section/team.php") ) require( THEME_DIR . "/section/team.php");
                    break;

                    case 'project':
                        if( file_exists(THEME_DIR . "/section/project.php") ) require( THEME_DIR . "/section/project.php");
                    break;

                    case 'content': 
                        if( file_exists(THEME_DIR . "/section/project.php") ) require( THEME_DIR . "/section/content.php");
                    break;
                }
            }
        endif;
    ?>

    <!-- footer -->
        <?php require( THEME_DIR . "/section/footer.php"); ?>
    <!-- //footer  -->

<?php get_footer() ?>