<?php
    define('THEME_URL', get_template_directory_uri() );
    define('THEME_DIR' , get_stylesheet_directory() );
    define('CORE' , THEME_DIR . '/core' );
    
    if( file_exists( CORE . '/init.php' ) ) { 
        require_once( CORE . '/init.php' );
    }

    if( class_exists("Lmh_Themes") ){
        $lmh_themes = new Lmh_Themes();
    }

?>