Frist Install Theme:

Create Folder core in theme folder

Download Core Layout Theme:
```
https://github.com/hoanglyminh/core-theme-wp-product
```

Includue file init.php in file funtions.php:

```
global $sieuthiweb, $lmh_themes;

define('THEME_URL', get_template_directory_uri() );
define('THEME_DIR', get_template_directory() );
define('CORE' , THEME_DIR . '/core' );
define( "CORE_URL" , THEME_URL . "/core" );

if( file_exists( CORE . '/store_info.php' ) ) { 
	require_once( CORE . '/store_info.php' );
}

if( file_exists( CORE . '/init.php' ) ) {
	require_once( CORE . '/init.php' );
}

if( class_exists("Lmh_Themes") ){
	$lmh_themes = new Lmh_Themes();
}
```

Good Luck!
