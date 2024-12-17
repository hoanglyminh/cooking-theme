<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if ( ! class_exists( 'Redux' ) ) {
	return null;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'lmh_opt';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// REQUIRED!!  Change these values as you need/desire.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	'menu_title'                => esc_html__( 'Themes Options', 'lmhoang' ),
	'page_title'                => esc_html__( 'Themes Options', 'lmhoang' ),

	// Disable this in case you want to create your own google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Choose an icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Choose an priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Set a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc.
	'dev_mode'                  => true,

	// Enable basic customizer support.
	'customizer'                => true,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 100,

	// For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel.
	'page_slug'                 => 'lmh_options',

	// On load save the defaults to DB before user clicks save or not.
	'save_defaults'             => true,

	// If true, shows the default value next to each field that is not the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default. Suggested: *.
	'default_mark'              => '',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// CAREFUL -> These options are for advanced use only.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
	'output_tag'                => true,

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',

	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	'use_cdn'                   => true,
	'compiler'                  => true,

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
	'id'    => 'lmh-docs',
	'href'  => '//lyminhhoang.com',
	'title' => esc_html__( 'Support', 'lmhoang' ),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
	'url'   => 'https://www.facebook.com/hoanglyminh',
	'title' => esc_html__( 'My Facebook', 'lmhoang' ),
	'icon'  => 'el el-facebook',
);


// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '<p>' . sprintf( __( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: %1$s', 'lmhoang' ) . '</p>', '<strong>' . $v . '</strong>' );
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'lmhoang' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'lmhoang' ) . '</p>';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 *
 * ---> BEGIN SECTIONS
 *
 */

/* As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for. */

/* -> START Basic Fields. */

    $kses_exceptions = array(
        'a'      => array(
            'href' => array(),
        ),
        'strong' => array(),
        'br'     => array(),
    );

/* General SECTIONS */

    $section = array(
        'title'  => esc_html__( 'General', 'lmhoang' ),
        'id'     => 'general',
        'desc'   => esc_html__( 'General', 'lmhoang' ),
        'icon'   => 'el el-cog',
        'fields' => array(
			array(
                'id'	=> 'favicon',
                'type'	=> 'media',
				'width'	=> 30,
                'title' => esc_html__( 'Your Favicon', 'lmhoang' ),
				'default' => 'https://lyminhhoang.com/layout/images/logo.png',
            ),
            array(
                'id'		=> 'logo',
                'type'		=> 'media',
				'height'	=> 50,
                'title'		=> esc_html__( 'Your Logo', 'lmhoang' ),
            ),
			array(
                'id'		=> 'read-more-ajax',
                'type'		=> 'switch',
                'title'		=> esc_html__( 'Read more by ajax', 'lmhoang' ),
				'default'	=> false,
            ),
			array(
				'id'       => 'sologan',
				'type'     => 'text',
				'title'    => esc_html__( 'Your Sologan', 'lmhoang' ),
				'default'	=> 'Ai cũng có thể vào bếp',
			),
			array(
                'id'       => 'address',
                'type'     => 'text',
                'title'    => esc_html__( 'Address', 'lmhoang' ),
				'default'	=> '108 Võ Duy Ninh, P.22, Q. Bình Thạnh, HCM',
            ),
			array(
                'id'		=> 'phone',
                'type'		=> 'text',
                'title'		=> esc_html__( 'Phone', 'lmhoang' ),
				'subtitle'	=> esc_html__( 'Your phone number', 'lmhoang' ),
				'default'	=> '84707619481',
            ),
			array(
                'id'		=> 'open-hours',
                'type'		=> 'textarea',
                'title'		=> esc_html__( 'Open Hours', 'lmhoang' ),
				'subtitle'	=> esc_html__( 'You can use html tag with class css bootstrap', 'lmhoang' ),
				'default'	=> '<p class="mt-2"><span>Mon - Sat</span> : 9Am - 6Pm</p><p> <span>Sunday</span> : CLOSED</p>',
            ),
        ),
    );
    Redux::set_section( $opt_name, $section );

/* General SECTIONS */

/* Slides SECTIONS */
    $section = array(
		'title' => __( 'Slides', 'lmhoang' ),
		'id'    => 'slides',
		'icon'  => 'el el-slideshare',
		'fields' => array(
			array(
				'id'	=> 'slides',
				'type'	=> 'slides',
				'width'	=> 50,
				'title' => esc_html__('Slides', 'lmhoang'),
				'subtitle' => esc_html__('Selecting Image or uploading new images with size 1680 x 900 px', 'lmhoang'),
            ),
        ),
    );
    Redux::set_section( $opt_name, $section );
/* End Slides SECTIONS */


/* Home SECTIONS */
    $section = array(
      'title' => __( 'Home Page', 'lmhoang' ),
      'id'    => 'home-page',
      'icon'  => 'el el-home',
		'fields' => array(
			array(
				'type'	=> 'section',
				'title' => esc_html__('Section About Option', 'lmhoang'),
				'indent' => true
			),
			array(
				'id'	=> 'home-about',
				'type'	=> 'switch',
				'title' => esc_html__('Section About', 'lmhoang'),
				'subtitle' => esc_html__('On | Off Section About', 'lmhoang'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-about-select',
				'type'	=> 'select',
            	'title' => esc_html__('Select Page About', 'lmhoang'),
				'subtitle' => esc_html__('Select Page show in Section About', 'lmhoang'),
				'data' => 'pages',
			),
			array(
				'type'	=> 'section',
				'title' => esc_html__('Section Blog Option', 'lmhoang'),
				'indent' => true
			),
			array(
				'id'	=> 'home-blog',
				'type'	=> 'switch',
				'title' => esc_html__('Section Blog', 'lmhoang'),
				'subtitle' => esc_html__('On | Off Section Blog', 'lmhoang'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-blog-title',
				'type'	=> 'text',
				'title' => esc_html__('Blog Title', 'lmhoang'),
				'default'	=> 'Our Fresh Blog Posts',
			),
			array(
				'id'	=> 'home-blog-desc',
				'type'	=> 'text',
				'title' => esc_html__('Blog Description', 'lmhoang'),
				'default'	=> 'Latest News',
			),
			
		),
    );
    Redux::set_section( $opt_name, $section );
/* End Home SECTIONS */

/* Videos SECTIONS */
    $section = array(
      'title' => __( 'Video Page', 'lmhoang' ),
      'id'    => 'video',
      'icon'  => 'el el-youtube',
		'fields' => array(
			array(
				'id'	=> 'video-youtube',
				'type'	=> 'switch',
				'title' => esc_html__('Video Youtube', 'lmhoang'),
				'subtitle' => esc_html__('On | Off Section Video Youtube', 'lmhoang'),
				'default'	=> true,
			),
			array(
				'id'	=> 'video-youtube-link',
				'type'	=> 'multi_text',
				'title' => esc_html__('Link Video Youtube', 'lmhoang'),
				'subtitle' => __('Ex: <br> https://www.youtube.com/watch?v=xxx...xxx <br> or https://youtu.be/xxx...xxx'),
			),
		),
    );
    Redux::set_section( $opt_name, $section );
/* End Videos SECTIONS */