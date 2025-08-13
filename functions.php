<?php
    if (! defined("THEME_URL") ) { define( "THEME_URL" , get_template_directory_uri() ); }
    if (! defined("THEME_DIR") ) { define( "THEME_DIR" , get_template_directory() ); }
    if (! defined("CORE") ) { define( "CORE" , THEME_DIR . "/core_lmh" ); }
    if (! defined("CORE_URL") ) { define( "CORE_URL" , THEME_URL . "/core_lmh" ); }
    
    if( file_exists( CORE . '/init.php' ) ) { 
        require_once( CORE . '/init.php' );
    }
?>