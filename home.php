<?php global $lmh_opt; ?>

<?php get_header(); ?>

<!-- banner section -->
    <?php require( THEME_DIR . "/section/slides.php"); ?>
<!-- //banner section -->

    <?php $layout = $lmh_opt['home-blocks']['enabled'] ?? false;

        if ( $layout ): 
            foreach ( $layout as $key => $value ) {
                if( file_exists(THEME_DIR . "/section/{$key}.php") ) require( THEME_DIR . "/section/{$key}.php");
            }
        endif;
    ?>

    <?php require( THEME_DIR . "/section/ads_footer.php"); ?>

    <?php require( THEME_DIR . "/section/footer.php"); ?>

<?php get_footer() ?>