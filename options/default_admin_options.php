<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if( ! defined("THEME_URL") ) {  return null; }

if ( ! class_exists( 'Redux' ) ) { return null; }

$opt_name = 'lmh_opt';

$theme = wp_get_theme();

$args = array(
	'opt_name'                  => $opt_name,
	'display_name'              => $theme->get( 'Name' ),
	'display_version'           => $theme->get( 'Version' ),
	'menu_type'                 => 'menu',
	'allow_sub_menu'            => true,
	'menu_title'                => esc_html( 'Themes Options' ),
	'page_title'                => esc_html( 'Themes Options' ),
	'disable_google_fonts_link' => false,
	'admin_bar'                 => true,
	'admin_bar_icon'            => 'dashicons-portfolio',
	'admin_bar_priority'        => 50,
	'global_variable'           => '',
	'dev_mode'                  => true,
	'customizer'                => true,
	'page_priority'             => 100,
	'page_parent'               => 'themes.php',
	'page_permissions'          => 'manage_categories',
	'menu_icon'                 => '',
	'last_tab'                  => '',
	'page_icon'                 => 'icon-themes',
	'page_slug'                 => 'lmh_options',
	'save_defaults'             => true,
	'default_show'              => false,
	'default_mark'              => '',
	'show_import_export'        => true,
	'transient_time'            => 60 * MINUTE_IN_SECONDS,
	'output'                    => true,
	'output_tag'                => true,
	'database'                  => '',
	'use_cdn'                   => true,
	'compiler'                  => true,
	'flyout_submenus'           => true,
	'font_display'              => 'swap',
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
	'href'  => 'https://lyminhhoang.com',
	'title' => esc_html( 'Support'),
);

$args['share_icons'] = array(
	array(
		'url'   => 'https://www.facebook.com/hoanglyminh',
		'title' => esc_html( 'My Facebook' ),
		'icon'  => 'el el-facebook',
	),
	array(
		'url'   => 'https://www.youtube.com/@HoangLyMinh',
		'title' => esc_html( 'My Youtube' ),
		'icon'  => 'el el-youtube',
	),
	array(
		'url'   => 'https://lyminhhoang.com',
		'title' => esc_html( 'My Website' ),
		'icon'  => 'el el-link',
	),
);

if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '<p>' . sprintf( __( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: %1$s' ) . '</p>', '<strong>$' . $v . '</strong>' );
} else {
	$args['intro_text'] = '<p>' . esc_html( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.' ) . '</p>';
}

$args['footer_text'] = '<p>' . esc_html( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.' ) . '</p>';

Redux::set_args( $opt_name, $args );

$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
);

/* General SECTIONS */
    $section = array(
        'title'  => esc_html( 'General' ),
        'id'     => 'general',
        'icon'   => 'el el-cog',
        'fields' => array(
			array(
                'id'	=> 'favicon',
                'type'	=> 'media',
				'width'	=> 30,
                'title' => esc_html( 'Your Favicon' ),
            ),
            array(
                'id'		=> 'logo',
                'type'		=> 'media',
				'height'	=> 50,
                'title'		=> esc_html( 'Your Logo' ),
            ),
			array(
				'id'       => 'sologan',
				'type'     => 'text',
				'title'    => esc_html( 'Your Sologan' ),
				'default'	=> 'Ai cũng có thể vào bếp',
			),
			array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => esc_html( 'Your Email' ),
				'default'	=> get_bloginfo("admin_email") ,
            ),
			array(
                'id'       => 'address',
                'type'     => 'text',
                'title'    => esc_html( 'Address' ),
				'default'	=> '108 Võ Duy Ninh, P.22, Q. Bình Thạnh, HCM',
            ),
			array(
                'id'       => 'short_address',
                'type'     => 'text',
                'title'    => esc_html( 'Short Address' ),
				'default'	=> 'Q. Bình Thạnh, TP.HCM',
            ),
			array(
                'id'		=> 'phone',
                'type'		=> 'text',
                'title'		=> esc_html( 'Phone' ),
				'subtitle'	=> esc_html( 'Your phone number' ),
				'default'	=> '84707619481',
            ),
			array(
                'id'		=> 'open-hours',
                'type'		=> 'textarea',
                'title'		=> esc_html( 'Open Hours' ),
				'subtitle'	=> esc_html( 'You can use html tag with class css bootstrap' ),
				'default'	=> '<p class="mt-2"><span>Mon - Sat</span> : 9Am - 6Pm</p><p> <span>Sunday</span> : CLOSED</p>',
            ),
			array(
				'id'        => 'social-profiles',
				'type'      => 'social_profiles',
				'title'     => esc_html( 'Social Profiles' ),
				'subtitle'  => esc_html( 'Click an icon to activate it, drag and drop to change the icon order.' ),
				'include'	=> array("facebook","twitter","linkedin","youtube"),
				'icons' => array(
					array (
						'id'         => 'facebook',
						'icon'       => 'fa-facebook-f',
						'enabled'    => false,
						'name'       => __ ('Facebook'),
						'background' => '',
						'color'      => '#3b5998',
						'url'        => 'https://www.facebook.com/hoanglyminh',
					),
					array (
						'id'         => 'youtube',
						'icon'       => 'fa-youtube',
						'enabled'    => false,
						'name'       => __ ('Youtube'),
						'background' => '',
						'color'      => '#FF0000',
						'url'        => 'https://www.youtube.com/@HoangLyMinh',
					),
					array (
						'id'         => 'twitter',
						'icon'       => 'fa-twitter',
						'enabled'    => false,
						'name'       => __ ('Twitter'),
						'background' => '',
						'color'      => '#1da1f2',
						'url'        => 'https://x.com/hoanglyminh',
					),
                    array (
						'id'         => 'instagram',
						'icon'       => 'fa-instagram',
						'enabled'    => false,
						'name'       => __ ('instagram'),
						'background' => '',
						'color'      => '#1da1f2',
						'url'        => 'https://www.instagram.com/hoanglyminh81/',
					),
                    array (
						'id'         => 'linkedin',
						'icon'       => 'fa-linkedin',
						'enabled'    => false,
						'name'       => __ ('Linkedin'),
						'background' => '',
						'color'      => '#0077B5',
						'url'        => 'https://www.linkedin.com/in/hoanglyminh/',
					),
				),
			),
			array(
                'id'		=> 'footer-copy-title',
                'type'		=> 'text',
                'title'		=> esc_html( 'Footer Copy Title' ),
            ),
        ),
    );
    Redux::set_section( $opt_name, $section );
/* General SECTIONS */

/* Settings SECTIONS */
	$section = array(
		'title' => __( 'Settings' ),
		'id'    => 'setting-page',
		'icon'  => 'el el-cogs',
		'fields' => array(
			array(
				'id'      => 'home-blocks',
				'type'    => 'sorter',
				'title'   => 'Homepage Layout Manager',
				'desc'    => 'Organize how you want the layout to appear on the homepage',
				'options' => array(
					'enabled'  => array(
						'about' => 'About Section',
						'why' 	=> 'Why Section',
						'blogs' => 'Blog Section',
						'team' => "Teams Section",
						'project' => "Project Section",
						'thank' => "Thank Section",
					),
					'disabled' => array(
					)
				),
			),
			array(
                'id'	=> 'image_default',
                'type'	=> 'media',
				'width'	=> 30,
                'title' => esc_html( 'Image default' ),
				'subtitle'    => 'Image size: 1680 x 900px',
            ),
			array(
				'id'       => 'lmh-bg-color',
				'type'     => 'color',
				'title'    => esc_html__('Background Color'), 
				'subtitle' => esc_html__('Pick a Background Color for the theme (default: #fff). Use class in html is "lmh-bg-color"'),
				'default'  => '#fff',
				'validate' => 'color',
			),
			array(
				'id'       => 'lmh-heading-color',
				'type'     => 'color',
				'title'    => esc_html__('Heading Color'), 
				'subtitle' => esc_html__('Pick a Heading Color for the theme (default: #060606). Use class in html is "lmh-heading-color"'),
				'default'  => '#060606',
				'validate' => 'color',
			),
			array(
				'id'       => 'lmh-font-color',
				'type'     => 'color',
				'title'    => esc_html__('Font Color'), 
				'subtitle' => esc_html__('Pick a Font Color for the theme (default: #707070). Use class in html is "lmh-font-color"'),
				'default'  => '#707070',
				'validate' => 'color',
			),
			array(
				'id'       => 'lmh-primary-color',
				'type'     => 'color',
				'title'    => esc_html__('Primary Color'), 
				'subtitle' => esc_html__('Pick a Primary Color for the theme (default: #f50537). Use class in html is "lmh-primary-color"'),
				'default'  => '#f50537',
				'validate' => 'color',
			),
			array(
				'id'       => 'lmh-primary-dark',
				'type'     => 'color',
				'title'    => esc_html__('Primary Color Dark'), 
				'subtitle' => esc_html__('Pick a Primary Color Dark for the theme (default: #00c16e). Use class in html is "lmh-primary-dark"'),
				'default'  => '#00c16e',
				'validate' => 'color',
			),
		),
	);
	Redux::set_section( $opt_name, $section );
/* End Settings SECTIONS */

/* Slides SECTIONS */
    $section = array(
		'title' => __( 'Section Slides' ),
		'id'    => 'slides',
		'icon'  => 'el el-slideshare',
		'fields' => array(
			array(
				'id'	=> 'slides',
				'type'	=> 'slides',
				'width'	=> 50,
				'title' => esc_html('Slides'),
				'subtitle' => esc_html('Select Image or upload new images with size 2000px x 670px. The file name must be letters or numbers, and does not contain special characters or spaces.'),
            ),
        ),
    );
    Redux::set_section( $opt_name, $section );
/* End Slides SECTIONS */

/* About SECTIONS */
	$section = array(
		'title' => __( 'Section About' ),
		'id'    => 'about',
		'icon'  => 'el el-user',
		'fields' => array(
			array(
				'id'	=> 'home-about',
				'type'	=> 'switch',
				'title' => esc_html('Section About'),
				'subtitle' => esc_html('On | Off Section About'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-about-title',
				'type'	=> 'text',
				'title' => esc_html('Title'),
				'subtitle' => esc_html('Title section about'),
				'default'	=> 'Ai cũng có thể vào bếp',
			),
			array(
				'id'	=> 'home-about-desc',
				'type'	=> 'textarea',
				'title' => esc_html('Description'),
				'subtitle' => esc_html('Description of session about'),
				'default'	=> 'Người nội trợ là những người phụ nữ đảm đang, khéo léo, luôn chăm lo cho gia đình. Họ là những người âm thầm hy sinh, cống hiến cho hạnh phúc của tổ ấm.',
			),
			array(
				'id'	=> 'home-about-image-left',
				'type'	=> 'media',
				'width'	=> 50,
				'title' => esc_html( 'About Image Left' ),
				'subtitle' => esc_html('Image size 640 x 800px'),
			),
			array(
				'id'	=> 'home-about-image-right',
				'type'	=> 'media',
				'width'	=> 50,
				'title' => esc_html( 'About Image Right' ),
				'subtitle' => esc_html('Image size 640 x 800px'),
			),
		)
	);
	Redux::set_section( $opt_name, $section );
/* End About SECTIONS */

/* Why SECTIONS */
	$section = array(
		'title' => __( 'Section Why' ),
		'id'    => 'why',
		'icon'  => 'fa fa-question',
		'fields' => array(
			array(
				'id'	=> 'home-why',
				'type'	=> 'switch',
				'title' => esc_html('Section Why'),
				'subtitle' => esc_html('On | Off Section Why'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-why-image',
				'type'	=> 'media',
				'width'	=> 50,
				'title' => esc_html( 'Section Why Banner' ),
				'subtitle' => esc_html('Image size 1280 x 1400px'),
			),
			array(
				'id'	=> 'home-why-title',
				'type'	=> 'text',
				'title' => esc_html('Title Why'),
				'subtitle' => esc_html('Title section Why'),
				'default'	=> 'Why Choose ' . get_bloginfo('name') . '?',
			),
			array(
				'id'	=> 'home-why-desc',
				'type'	=> 'textarea',
				'title' => esc_html('Description Why'),
				'subtitle' => esc_html('Description of session Why'),
				'default'	=> "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit.",
			),
			array(
				'id'               => 'home-why-icon-select-1',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Icon Select Why 1' ),
				'subtitle'         => esc_html__( 'Select an icon.' ),
				'default'          => 'fas fa-signal',
			),
			array(
				'id'	=> 'home-why-title-1',
				'type'	=> 'text',
				'title' => esc_html('Title Why 1'),
				'subtitle' => esc_html('Title section Why 1'),
				'default'	=> 'We Are Winners of 50 Competitions',
			),
			array(
				'id'	=> 'home-why-desc-1',
				'type'	=> 'textarea',
				'title' => esc_html('Description Why 1'),
				'subtitle' => esc_html('Description of session Why'),
				'default'	=> "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.",
			),
			array(
				'id'	=> 'home-why-url-1',
				'type'	=> 'text',
				'title' => esc_html('Url for Why 1'),
				'subtitle' => esc_html('Url for Reasons 1'),
				'default'	=> home_url(),
			),
			array(
				'id'               => 'home-why-icon-select-2',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Icon Select Why 2' ),
				'subtitle'         => esc_html__( 'Select an icon.'),
				'default'          => 'fas fa-cubes',
			),
			array(
				'id'	=> 'home-why-title-2',
				'type'	=> 'text',
				'title' => esc_html('Title Why 2'),
				'subtitle' => esc_html('Title section Why 2'),
				'default'	=> '27 Professional Chefs-Trainers',
			),
			array(
				'id'	=> 'home-why-desc-2',
				'type'	=> 'textarea',
				'title' => esc_html('Description Why 2'),
				'subtitle' => esc_html('Description of session Why'),
				'default'	=> "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.",
			),
			array(
				'id'	=> 'home-why-url-2',
				'type'	=> 'text',
				'title' => esc_html('Url for Why 2'),
				'subtitle' => esc_html('Url for Why 2'),
				'default'	=> home_url(),
			),
			array(
				'id'               => 'home-why-icon-select-3',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Icon Select Why 3' ),
				'subtitle'         => esc_html__( 'Select an icon.'),
				'default'          => 'fas fa-users',
			),
			array(
				'id'	=> 'home-why-title-3',
				'type'	=> 'text',
				'title' => esc_html('Title Why 3'),
				'subtitle' => esc_html('Title section Why 3'),
				'default'	=> 'Guaranteed Fast Employment',
			),
			array(
				'id'	=> 'home-why-desc-3',
				'type'	=> 'textarea',
				'title' => esc_html('Description Why 3'),
				'subtitle' => esc_html('Description of session Why'),
				'default'	=> "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.",
			),
			array(
				'id'	=> 'home-why-url-3',
				'type'	=> 'text',
				'title' => esc_html('Url for Why 3'),
				'subtitle' => esc_html('Url for Why 3'),
				'default'	=> home_url(),
			),
        ),
    );
	Redux::set_section( $opt_name, $section );
/* Why SECTIONS */

// Thank SECTIONS 
	$section = array(
		'title' => __( 'Section Thank' ),
		'id'    => 'thank',
		'icon'  => 'el el-ok',
		'fields' => array(
			array(
				'id'	=> 'home-thank',
				'type'	=> 'switch',
				'title' => esc_html('Section thank'),
				'subtitle' => esc_html('On | Off Section thank'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-thank-image',
				'type'	=> 'media',
				'width'	=> 50,
				'title' => esc_html( 'Section Thank Background Image' ),
				'subtitle' => esc_html('Image size 1680 x 900px'),
			),
			array(
				'id'	=> 'home-thank-title',
				'type'	=> 'text',
				'title' => esc_html('Title'),
				'default'	=> 'Thank you for Watching',
			),
			array(
				'id'	=> 'home-thank-desc',
				'type'	=> 'textarea',
				'title' => esc_html('Description'),
				'default'	=> 'Purchase the Workplace now and make everything easier',
			),
			array(
				'id'	=> 'home-thank-btn-title',
				'type'	=> 'text',
				'title' => esc_html('Title Button'),
				'default'	=> __("Read More"),
			),
			array(
				'id'	=> 'home-thank-btn-url',
				'type'	=> 'text',
				'title' => esc_html('Link of Thank page'),
				'default'	=> home_url(),
			),
		),
	);
	Redux::set_section( $opt_name, $section );
// End Thank SECTIONS

// Blog SECTIONS
	$section = array(
		'title' => __( 'Section Blogs' ),
		'id'    => 'blogs',
		'icon'  => 'el el-list-alt',
		'fields' => array(
			array(
				'id'	=> 'home-blog',
				'type'	=> 'switch',
				'title' => esc_html('Section Blog'),
				'subtitle' => esc_html('On | Off Section Blog'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-blog-title',
				'type'	=> 'text',
				'title' => esc_html('Title'),
				'default'	=> 'Blog Posts',
			),
			array(
				'id'	=> 'home-blog-desc',
				'type'	=> 'textarea',
				'title' => esc_html('Description'),
				'subtitle' => esc_html('Description of session blog'),
				'default'	=> "Latest News",
			),
			array(
				'id'	=> 'home-blog-num',
				'type'	=> 'select',
				'title' => esc_html('Number Post'),
				'subtitle' => esc_html('Number post show'),
				'default'	=> 6,
				'options'  => array(
					'6' => '6',
					'12' => '12',
					'14' => '14',
					'16' => '16',
					'18' => '18',
					'20' => '20',
					'22' => '22',
					'24' => '24',
				),
			),
		)
	);
	Redux::set_section( $opt_name, $section );
// End Blog SECTIONS

// Teams SECTIONS
	$section = array(
		'title' => __( 'Section Teams' ),
		'id'    => 'team',
		'icon'  => 'fa fa-handshake',
		'fields' => array(
			array(
				'id'	=> 'home-team',
				'type'	=> 'switch',
				'title' => esc_html('Section Testimonials'),
				'subtitle' => esc_html('On | Off Section Testimonials'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-team-title',
				'type'	=> 'text',
				'title' => esc_html('Title'),
				'default'	=> 'What Our Clients Say',
			),
			array(
				'id'	=> 'home-team-desc',
				'type'	=> 'textarea',
				'title' => esc_html('Description'),
				'subtitle' => esc_html('Description of session Testimonials'),
				'default'	=> "Happy Clients",
			),
			array(
				'id'	=> 'home-team-num',
				'type'	=> 'select',
				'title' => esc_html('Number Testimonials'),
				'subtitle' => esc_html('Number Testimonials show'),
				'default'	=> 3,
				'options'  => array(
					'3' => '3',
					'6' => '6',
					'9' => '9',
					'12' => '12',
					'15' => '15',
					'18' => '18',
					'21' => '21',
					'24' => '24',
				),
			),
		)
	);
	Redux::set_section( $opt_name, $section );
// End Teams SECTIONS

// Project SECTIONS
	$section = array(
		'title' => __( 'Section Project' ),
		'id'    => 'project',
		'icon'  => 'fa fa-bag-shopping',
		'fields' => array(
			array(
				'id'	=> 'home-project',
				'type'	=> 'switch',
				'title' => esc_html('Section Project'),
				'subtitle' => esc_html('On | Off Section Project'),
				'default'	=> true,
			),
			array(
				'id'	=> 'home-project-title',
				'type'	=> 'text',
				'title' => esc_html('Title'),
				'default'	=> 'Your Project',
			),
			array(
				'id'	=> 'home-project-desc',
				'type'	=> 'textarea',
				'title' => esc_html('Description'),
				'subtitle' => esc_html('Description of session Project'),
				'default'	=> "New Project",
			),
			array(
				'id'	=> 'home-project-num',
				'type'	=> 'select',
				'title' => esc_html('Number Project'),
				'subtitle' => esc_html('Number Project show'),
				'default'	=> 9,
				'options'  => array(
					'3' => '3',
					'6' => '6',
					'9' => '9',
					'12' => '12',
					'15' => '15',
					'18' => '18',
					'21' => '21',
					'24' => '24',
				),
			),
		)
	);
	Redux::set_section( $opt_name, $section );
// End Project SECTIONS

// Custom Setting
	$section = array(
		'title' => __( 'Custom Setting' ),
		'id'    => 'custom-setting',
		'icon'  => 'el el-cogs',
		'fields' => array(
			array(
				'id'	=> 'cus-ads-footer',
				'type'	=> 'switch',
				'title' => esc_html('Ads Footer'),
				'subtitle' => esc_html('On | Off Ads Footer'),
				'default'	=> true,
			),
			array(
				'id'	=> 'cus-ads-footer-script',
				'type'	=> 'textarea',
				'title' => esc_html('Script Ads Footer'),
			),
			array(
				'id'	=> 'cs-head-css',
				'type'	=> 'textarea',
				'title' => esc_html('Head CSS'),
				'subtitle' => esc_html('Tất cả đoạn code của bạn sẽ được chèn vào giữa tab &lt;style&gt; ... &lt;/style&gt;.'),
			),
			array(
				'id'	=> 'cs-head-code',
				'type'	=> 'textarea',
				'title' => esc_html('Head Code'),
				'subtitle' => esc_html('Tất cả đoạn code của bạn sẽ được chèn vào giữa tab &lt;head&gt; ... &lt;/head&gt;, và áp dụng cho tất cả các trang của website.'),
			),
			array(
				'id'	=> 'cs-footer-code',
				'type'	=> 'textarea',
				'title' => esc_html('Footer Code'),
				'subtitle' => esc_html('Tất cả đoạn code của bạn sẽ được chèn phía trên tab &lt;/body&gt; và áp dụng cho tất cả các trang của website.'),
			),
		),
	);
	Redux::set_section( $opt_name, $section );
// End Custom Setting