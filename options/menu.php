<?php 

// Create file 'class_menu_walker.php' in folder 'options' of YOUR THEME to customize the MENU WALKER configuration

if( file_exists( THEME_DIR . "/options/class_menu_walker.php" ) ){
    include_once THEME_DIR . "/options/class_menu_walker.php";
} else {
    include_once CORE . "/class/class_menu_walker.php";
}

register_nav_menu('primary-menu', 'Primary Menu');

if( ! function_exists('lmh_menu') ){
   function lmh_menu( $data = [] ) {
      $menu = [
         'theme_location' => empty($data['theme_location']) ? 'primary-menu' : ($data['theme_location']),
         'container_class' => empty($data['theme_location']) ? 'primary-menu' : ($data['theme_location']),
         'container' => empty($data['container']) ? 'ul' : ($data['container']),
         'menu_class' => empty($data['menu_class']) ? 'menu mx-lg-auto' : ($data['menu_class']),
         'menu_id' => empty($data['menu_id']) ? '' : ($data['menu_id']),
         'fallback_cb' => $data['fallback_cb'] ?? false,
         'walker' => empty($data['walker']) ? new Lmh_Menu_Walker_Primary() : new $data['walker'](),
      ];
      wp_nav_menu( $menu );
    }
}

if( ! function_exists('lmh_menu_primary_default') ){
    function lmh_menu_primary_default()
    {
        ?>

            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>
            </ul>
        <?php
    }
}

if( ! function_exists('lmh_menu_footer_default') ){
    function lmh_menu_footer_default()
    {

    }
}