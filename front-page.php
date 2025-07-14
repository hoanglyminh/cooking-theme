<?php global $lmh_opt; ?>

<?php get_header(); ?>

<!-- banner section -->
    <?php require( THEME_DIR . "/section/slides.php"); ?>
<!-- //banner section -->

    <?php $layout = $lmh_opt['home-blocks']['enabled'] ?? false;

        if ( $layout ): 
            foreach ( $layout as $key => $value ) {
                switch($key) {
                    case 'about': 
                        if( file_exists(THEME_DIR . "/section/about.php") ) require( THEME_DIR . "/section/about.php");
                    break;

                    case 'video': 
                        if( file_exists(THEME_DIR . "/section/video.php") ) require( THEME_DIR . "/section/video.php");
                    break;

                    case 'blogs':
                        if( file_exists(THEME_DIR . "/section/blogs.php") ) require( THEME_DIR . "/section/blogs.php");
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

                    case 'thank': 
                        if( file_exists(THEME_DIR . "/section/thank.php") ) require( THEME_DIR . "/section/thank.php");
                    break;
                }
            }
        endif;
    ?>

    <?php require( THEME_DIR . "/section/ads_footer.php"); ?>

    <?php require( THEME_DIR . "/section/footer.php"); ?>

<?php get_footer() ?>