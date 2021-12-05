<?php 
/**
 * @Packge     : Marian
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
// Epsilon_Customizer::add_field(
//     'marian_theme_color',
//     array(
//         'type'        => 'epsilon-color-picker',
//         'label'       => esc_html__( 'Theme Color', 'marian' ),
//         'description' => esc_html__( 'Select the theme color.', 'marian' ),
//         'sanitize_callback' => 'sanitize_text_field',
//         'section'     => 'marian_general_section',
//         'default'     => '#131313',
//     )
// );

// Header button label
Epsilon_Customizer::add_field(
    'marian_header_top_btn_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button Text', 'marian' ),
        'section'     => 'marian_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Book Online', 'marian' ),
    )
);

// Header button url
Epsilon_Customizer::add_field(
    'marian_header_top_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button URL', 'marian' ),
        'section'     => 'marian_header_section',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

// Header button color sections
Epsilon_Customizer::add_field(
    'header_btn_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Button Color Section', 'marian' ),
        'section'     => 'marian_header_section',

    )
);
 
// Header button background color field
Epsilon_Customizer::add_field(
    'marian_header_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button BG Color', 'marian' ),
        'description' => esc_html__( 'Select the header background color.', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_header_section',
        'default'     => '#ffffff',
    )
);
 
// Header button hover background color field
Epsilon_Customizer::add_field(
    'marian_header_btn_hover_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover BG Color', 'marian' ),
        'description' => esc_html__( 'Select the header background color.', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_header_section',
        'default'     => '#ffffff',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Menu Color Section', 'marian' ),
        'section'     => 'marian_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'marian_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'marian' ),
        'description' => esc_html__( 'Select the header background color.', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'marian_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'marian_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'marian_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'marian_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_header_section',
        'default'     => '#808080',
    )
);


// Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'marian' ),
        'section'     => 'marian_social_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'marian_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'marian' ),
        'section'     => 'marian_social_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'marian_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'marian_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'marian' ),
        'button_label' => esc_html__( 'Add new social link', 'marian' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'marian' ),
                'social_url'  => '#',
                'social_icon'  => 'fab fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Google Plus', 'marian' ),
                'social_url'  => '#',
                'social_icon'  => 'fab fa-google-plus',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'marian' ),
                'social_url'  => '#',
                'social_icon'  => 'fab fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'marian' ),
                'social_url'  => '#',
                'social_icon'  => 'fab fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'marian' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'marian' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'marian' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'marian_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'marian' ),
        'description' => esc_html__( 'Set post excerpt length.', 'marian' ),
        'section'     => 'marian_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'marian_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'marian' ),
        'section'     => 'marian_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'marian_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'marian' ),
        'section'     => 'marian_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'marian_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'marian' ),
        'section'     => 'marian_blog_section',
        'default'     => true
    )
);
 

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'marian' ),
        'section'     => 'marian_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'marian_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'marian' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'marian' ),
        'section'     => 'marian_footer_section',
        'default'     => true,
    )
);

// Footer Additional Settings section
Epsilon_Customizer::add_field(
    'footer_additional_settings_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Additional Settings', 'marian' ),
        'section'     => 'marian_footer_section',

    )
);


// Footer short text field
Epsilon_Customizer::add_field(
    'marian_footer_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Footer short text', 'marian' ),
        'section'           => 'marian_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '<a href="mailto:marian@support.com">marian@support.com</a> <br> +10 873 672 6782 <br> 600/D, Green road, NewYork',
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'marian_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'marian' ),
        'section'           => 'marian_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'marian_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'marian' ),
        'section'           => 'marian_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'marian_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'marian_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'marian_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'marian_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'marian' ),
        'section'     => 'marian_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'marian' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'marian_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'marian' ),
        'section'     => 'marian_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'marian_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_footer_section',
        'default'     => '#16161a',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'marian_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'marian_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_footer_section',
        'default'     => '#a3a3a3',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'marian_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_footer_section',
        'default'     => '#9e9e9e',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'marian_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer aeroplan & scroll color field
Epsilon_Customizer::add_field(
    'marian_footer_aeroplan_scroll_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Aeroplan & Scroll Icon Color', 'marian' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'marian_footer_section',
        'default'     => '#dca73a',
    )
);

