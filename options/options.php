<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if ( ! class_exists( 'Redux' ) ) { return null; }

$opt_name = 'lmh_opt';
$theme = wp_get_theme();

$args = array(
	// REQUIRED!!  Change these values as you need/desire.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'submenu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => false,

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
	'page_permissions'          => 'manage_categories',

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

$args['admin_bar_links'][] = array(
	'id'    => 'lmh-docs',
	'href'  => '//lyminhhoang.com',
	'title' => esc_html__( 'Support', 'lmhoang' ),
);

$args['share_icons'][] = array(
	'url'   => 'https://www.facebook.com/hoanglyminh',
	'title' => esc_html__( 'My Facebook', 'lmhoang' ),
	'icon'  => 'el el-facebook',
);

if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '<p>Hello <strong>Guest</strong>!</p>';
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'lmhoang' ) . '</p>';
}

$args['footer_text'] = '<p>' . esc_html__( 'Trang quản lý giao diện. Vui lòng sao lưu các cài đặt trước khi thực hiện mới ', 'lmhoang' ) . '<strong>Import / Export => Export File</strong></p>';

Redux::set_args( $opt_name, $args );

$kses_exceptions = array(
	'a'      => array( 'href' => array( ), ),
	'strong' => array( ),
	'br'     => array( ),
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
				'url'      => false,
				'width'	=> 30,
                'title' => esc_html__( 'Your Favicon', 'lmhoang' ),
				'subtitle'	=> esc_html__( 'You can select an image in media or upload an image with size 100px x 100px', 'lmhoang' ),
				'default' => 'https://lyminhhoang.com/layout/images/logo.png',
            ),
            array(
                'id'		=> 'logo',
                'type'		=> 'media',
				'url'      => false,
				'height'	=> 50,
				'subtitle'	=> esc_html__( 'You can select an image in media or upload an image with size 300px x 300px', 'lmhoang' ),
                'title'		=> esc_html__( 'Your Logo', 'lmhoang' ),
            ),
			array(
				'id'       => 'sologan',
				'type'     => 'text',
				'title'    => esc_html__( 'Your Sologan', 'lmhoang' ),
				'default'	=> 'Ai cũng có thể vào bếp',
			),
			array(
				'id'       => 'sologan_desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Your Sologan Description', 'lmhoang' ),
				'default'	=> '',
			),
			array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => esc_html__( 'Your Email', 'lmhoang' ),
				'default'	=> get_bloginfo("admin_email") ,
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
                'id'		=> 'open-hours-title',
                'type'		=> 'text',
                'title'		=> esc_html__( 'Title Open Hours', 'lmhoang' ),
				'default'	=> 'Open Hours',
            ),
			array(
                'id'		=> 'open-hours',
                'type'		=> 'textarea',
                'title'		=> esc_html__( 'Open Hours', 'lmhoang' ),
				'subtitle'	=> esc_html__( 'You can use html tag with Bootstrap v5.0.1', 'lmhoang' ),
				'default'	=> '<p class="mt-2"><span>Mon - Sat</span>: 9Am - 6Pm</p><p> <span>Sunday</span>: CLOSED</p>',
            ),
        ),
    );
    Redux::set_section( $opt_name, $section );
/* End General SECTIONS */

/* Format SECTIONS */
	$section = [
		'title'  => esc_html__( 'Format', 'lmhoang' ),
		'id'     => 'format',
		'desc'   => esc_html__( 'Format Font - Color on Website', 'lmhoang'),
		'icon'   => 'el el-font',
		"fields" => [
			array(
				'id'       => 'background-color',
				'type'     => 'color',
				'title'    => esc_html__('Body Background Color', 'lmhoang'), 
				'subtitle' => esc_html__('Pick a background color for the theme (default: #FFF).', 'lmhoang'),
				'default'  => '#FFFFFF',
				'validate' => 'color',
			),
			array(
				'id'       => 'title-color',
				'type'     => 'color',
				'title'    => esc_html__('Title Color', 'lmhoang'), 
				'subtitle' => esc_html__('Pick a title color for the theme (default: #060606).', 'lmhoang'),
				'default'  => '#060606',
				'validate' => 'color',
			),
			array(
				'id'       => 'text-color',
				'type'     => 'color',
				'title'    => esc_html__('Text Color', 'lmhoang'), 
				'subtitle' => esc_html__('Pick a text color for the theme (default: #707070).', 'lmhoang'),
				'default'  => '#707070',
				'validate' => 'color',
			),
			array(
                'id'		=> 'image_default',
                'type'		=> 'media',
				'url'      => false,
				'height'	=> 50,
				'subtitle'	=> esc_html__( 'You can select an image in media or upload an image with size 1.920 x 1.080 px', 'lmhoang' ),
                'title'		=> esc_html__( 'Image Default', 'lmhoang' ),
            ),
		]
	];
	Redux::set_section( $opt_name, $section );
/* End Format SECTIONS */

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
				'id'      => 'homepage-blocks',
				'type'    => 'sorter',
				'title'   => 'Homepage Layout Manager',
				'desc'    => 'Organize how you want the layout to appear on the homepage',
				'options' => array(
					'enabled'  => array(
						'about' => 'Section About',
						'blog' => 'Section Blog',
						'video'   => 'Section Video',
						'project'   => 'Section Project',
						'team'	=> 'Section Teams',
					),
					'disable' => [],
				),
			),
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
				'id'	=> 'home-about-title',
				'type'	=> 'text',
				'title' => esc_html__('About Title', 'lmhoang'),
				'default'	=> 'Learn how to cook from your house',
			),
			array(
				'id'	=> 'home-about-desc',
				'type'	=> 'textarea',
				'title' => esc_html__('About Description', 'lmhoang'),
				'subtitle' => esc_html__('You can use html tag with Bootstrap v5.0.1', 'lmhoang'),
				'default'	=> '<p class="mt-3">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur. Mumquam eius modi tempora incidunt ut labore et.</p>
								<div class="row mt-lg-5 mt-4">
									<div class="col-sm-6 grids_info">
										<i class="fas fa-utensils"></i>
										<div class="detail mt-sm-4 mt-3">
										<h4>Easy Manual</h4>
										<p>Sed ut perspiciatis unde omnis iste natus.</p>
									</div>
								</div>
								<div class="col-sm-6 grids_info mt-sm-0 mt-4">
									<i class="fas fa-bread-slice"></i>
										<div class="detail mt-sm-4 mt-3">
											<h4> For Everyone</h4>
											<p>Sed ut perspiciatis unde omnis iste natus.</p>
										</div>
									</div>
								</div>',
			),
			array(
                'id'		=> 'home-about-image-right',
                'type'		=> 'media',
				'height'	=> 50,
				'subtitle'	=> esc_html__( 'You can select an image in media or upload an image with size 640 x 800 px', 'lmhoang' ),
                'title'		=> esc_html__( 'Your Image About Right', 'lmhoang' ),
            ),
			array(
				'id'		=> 'home-about-image-left',
                'type'		=> 'media',
				'height'	=> 50,
				'subtitle'	=> esc_html__( 'You can select an image in media or upload an image with size 640 x 959 px', 'lmhoang' ),
                'title'		=> esc_html__( 'Your Image About Left', 'lmhoang' ),
            ),
			array(
				'id'	=> 'home-about-select',
				'type'	=> 'select',
            	'title' => esc_html__('Select Page About', 'lmhoang'),
				'subtitle' => esc_html__('Select Page show in Section About', 'lmhoang'),
				'data' => 'pages',
			),
			array(
				'id'	=> 'home-about-desc-footer',
				'type'	=> 'textarea',
				'title' => esc_html__('About Description Footer', 'lmhoang'),
				'default' => '',
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
			array(
				'id'	=> 'home-blog-num',
				'type'	=> 'select',
				'title' => esc_html__('Number post', 'lmhoang'),
				'subtitle' => esc_html__('Number post show', 'lmhoang'),
				'default'	=> 6,
				'options'  => array(
					'6' => '6',
					'8' => '8',
					'12' => '12',
					'16' => '16'
				),
			),
			array(
				'type'	=> 'section',
				'title' => esc_html__('Section Video Option', 'lmhoang'),
				'indent' => true
			),
			array(
				'id'	=> 'home-video',
				'type'	=> 'switch',
				'title' => esc_html__('Section Video', 'lmhoang'),
				'subtitle' => esc_html__('On | Off Section Video', 'lmhoang'),
				'default'	=> false,
			),
			array(
				'id'	=> 'home-video-title',
				'type'	=> 'text',
				'title' => esc_html__('Video Title', 'lmhoang'),
				'default'	=> 'Popular Video',
			),
			array(
				'id'	=> 'home-video-desc',
				'type'	=> 'text',
				'title' => esc_html__('Video Description', 'lmhoang'),
				'default'	=> 'Our Reviews',
			),
			
			// Section Project Option
				array(
					'type'	=> 'section',
					'title' => esc_html__('Section Project Option', 'lmhoang'),
					'indent' => true
				),
				array(
					'id'	=> 'home-project',
					'type'	=> 'switch',
					'title' => esc_html__('Section Project', 'lmhoang'),
					'subtitle' => esc_html__('On | Off Section Project', 'lmhoang'),
					'default'	=> false,
				),
				array(
					'id'	=> 'home-project-title',
					'type'	=> 'text',
					'title' => esc_html__('Project Title', 'lmhoang'),
					'default'	=> 'Project Title',
				),
				array(
					'id'	=> 'home-project-desc',
					'type'	=> 'text',
					'title' => esc_html__('Project Description', 'lmhoang'),
					'default'	=> 'Project Description',
				),
			// End Section Project Option

			// Section Team Option
				array(
					'type'	=> 'section',
					'title' => esc_html__('Section Team Option', 'lmhoang'),
					'indent' => true
				),
				array(
					'id'	=> 'home-team',
					'type'	=> 'switch',
					'title' => esc_html__('Section Team', 'lmhoang'),
					'subtitle' => esc_html__('On | Off Section Team', 'lmhoang'),
					'default'	=> false,
				),
				array(
					'id'	=> 'home-team-title',
					'type'	=> 'text',
					'title' => esc_html__('Team Title', 'lmhoang'),
					'default'	=> 'Team Title',
				),
				array(
					'id'	=> 'home-team-desc',
					'type'	=> 'text',
					'title' => esc_html__('Team Description', 'lmhoang'),
					'default'	=> 'Team Description',
				),
			// End Section Team Option
			array(
				'type'	=> 'section',
				'title' => esc_html__('Section Footer Option', 'lmhoang'),
				'indent' => true
			),
			array(
				'id'	=> 'home-footer',
				'type'	=> 'switch',
				'title' => esc_html__('Section Footer', 'lmhoang'),
				'subtitle' => esc_html__('On | Off Section Footer', 'lmhoang'),
				'default'	=> false,
			),
			array(
				'id'	=> 'home-footer-post-type',
				'type'	=> 'select',
            	'title' => esc_html__('Select Post Type', 'lmhoang'),
				'subtitle' => esc_html__('Select the post type to display', 'lmhoang'),
				'data' => 'post_types',
			),
		),
		
    );
    Redux::set_section( $opt_name, $section );
/* End Home SECTIONS */