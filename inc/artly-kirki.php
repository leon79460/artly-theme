<?php 

// Artly Theme Options 
new \Kirki\Panel(
	'artly_theme_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( ' Artly Option ', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// Artly Header Section 
function artly_header_section() {
  new \Kirki\Section(
    'header_section',
    [
      'title'       => esc_html__( 'Header Info', 'kirki' ),
      'description' => esc_html__( 'My Section Description.', 'kirki' ),
      'panel'       => 'artly_theme_options',
      'priority'    => 160,
    ]
  );
  
  new \Kirki\Field\Text(
    [
      'settings' => 'header_number',
      'label'    => esc_html__( 'Phone Number', 'kirki' ),
      'section'  => 'header_section',
      'default'  => esc_html__( '02 (256) 256 025 ', 'kirki' ),
      'priority' => 10,
    ]
  );
  
  new \Kirki\Field\Text(
    [
      'settings' => 'header_number_title',
      'label'    => esc_html__( 'Phone Title', 'kirki' ),
      'section'  => 'header_section',
      'default'  => esc_html__( 'Free Call ', 'kirki' ),
      'priority' => 10,
    ]
  );
}
artly_header_section();

// Header Main Logo Section
function artly_header_main_logo(){

  new \Kirki\Section(
    'header_logo_section',
    [
      'title'       => esc_html__( 'Header Main Logo', 'kirki' ),
      'description' => esc_html__( 'My Section Description.', 'kirki' ),
      'panel'       => 'artly_theme_options',
      'priority'    => 160,
    ]
  );
  
  new \Kirki\Field\Image(
    [
      'settings'    => 'header_logo_main',
      'label'       => esc_html__( 'Header Logo', 'kirki' ),
      'description' => esc_html__( 'Upload Your Main Logo...', 'kirki' ),
      'section'     => 'header_logo_section',
      'default'     => get_template_directory_uri().'/assets/img/logo/logo-white.png',
    ]
  );

}
artly_header_main_logo(); 

// Offcanvas  Section
function artly_offcanvas_section() {
  new \Kirki\Section(
    'offcanvas_section',
    [
      'title'       => esc_html__( 'Offcanvas', 'kirki' ),
      'description' => esc_html__( 'Change your details on offcanvas', 'kirki' ),
      'panel'       => 'artly_theme_options',
      'priority'    => 160,
    ]
  );

  new \Kirki\Field\Text(
    [
      'settings' => 'social_fb',
      'label'    => esc_html__( 'Facebook', 'kirki' ),
      'section'  => 'offcanvas_section',
      'default'  => esc_html__( '#', 'kirki' ),
      'priority' => 10,
    ]
  );
  new \Kirki\Field\Text(
    [
      'settings' => 'social_tw',
      'label'    => esc_html__( 'Twitter', 'kirki' ),
      'section'  => 'offcanvas_section',
      'default'  => esc_html__( '#', 'kirki' ),
      'priority' => 10,
    ]
  );
  new \Kirki\Field\Text(
    [
      'settings' => 'social_in',
      'label'    => esc_html__( 'Linkedin', 'kirki' ),
      'section'  => 'offcanvas_section',
      'default'  => esc_html__( '#', 'kirki' ),
      'priority' => 10,
    ]
  );
  new \Kirki\Field\Text(
    [
      'settings' => 'social_inst',
      'label'    => esc_html__( 'Instagram', 'kirki' ),
      'section'  => 'offcanvas_section',
      'default'  => esc_html__( '#', 'kirki' ),
      'priority' => 10,
    ]
  );


  new \Kirki\Field\Repeater(
    [
      'settings' => 'offcanvas_image_gallery',
      'label'    => esc_html__( 'Offcanvas Image Gallery', 'kirki' ),
      'section'  => 'offcanvas_section',
      'priority' => 10,
      'fields'   => [
        'gallery_image'   => [
          'type'        => 'image',
          'label'       => esc_html__( 'Gallery Image', 'kirki' ),
          'description' => esc_html__( 'Select Your Gallery Imageion', 'kirki' ),
          'default'     => '',
        ],
      ],
    ]
  );
  
}
artly_offcanvas_section();


// Footer Section
function footer_logo(){

  new \Kirki\Section(
    'footer_section',
    [
      'title'       => esc_html__( 'Footer', 'kirki' ),
      'description' => esc_html__( 'My Section Description.', 'kirki' ),
      'panel'       => 'artly_theme_options',
      'priority'    => 160,
    ]
  );
  
  new \Kirki\Field\Image(
    [
      'settings'    => 'footer_logo',
      'label'       => esc_html__( 'Footer Logo', 'kirki' ),
      'description' => esc_html__( 'Upload Your footer Logo...', 'kirki' ),
      'section'     => 'footer_section',
      'default'     => get_template_directory_uri().'/assets/img/logo/logo-white.png',
    ]
  );

  new \Kirki\Field\Checkbox_Switch(
    [
      'settings'    => 'footer_switch',
      'label'       => esc_html__( 'Top Footer Switch', 'kirki' ),
      'description' => esc_html__( 'Simple switch control', 'kirki' ),
      'section'     => 'footer_section',
      'default'     => 'off',
      'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
      ],
    ]
  );

  new \Kirki\Field\Checkbox_Switch(
    [
      'settings'    => 'footer_shape_switch',
      'label'       => esc_html__( 'Footer Shape Switch', 'kirki' ),
      'description' => esc_html__( 'Simple switch control', 'kirki' ),
      'section'     => 'footer_section',
      'default'     => 'off',
      'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
      ],
    ]
  );

  new \Kirki\Field\Text(
    [
      'settings' => 'footer_copyright',
      'label'    => esc_html__( 'Copyright', 'kirki' ),
      'section'  => 'footer_section',
      'default'  => esc_html__( '© Copyright 2024 | Alright reserved exdos by Themepure ', 'kirki' ),
      'priority' => 10,
    ]
  );
}
footer_logo(); 


// Artly Breadcrump Section 
function artly_breadcrumb_section() {
  new \Kirki\Section(
    'breadcrumb_section',
    [
      'title'       => esc_html__( 'Breadcrumb', 'kirki' ),
      'description' => esc_html__( 'My Section Description.', 'kirki' ),
      'panel'       => 'artly_theme_options',
      'priority'    => 160,
    ]
  );

    new \Kirki\Field\Image(
    [
      'settings'    => 'breadcrumb_image_bg',
      'label'       => esc_html__( 'Breadcrumb BG Image', 'kirki' ),
      'description' => esc_html__( 'Upload Your Breadcrumb Background Image...', 'kirki' ),
      'section'     => 'breadcrumb_section',
      'default'     => get_template_directory_uri().'/assets/img/breadcrumb/breadcrumb-pattern.png',
    ]
  );

    new \Kirki\Field\Checkbox_Switch(
    [
      'settings'    => 'breadcrumb_shape_switch',
      'label'       => esc_html__( 'Breadcrumb Shape Switch', 'kirki' ),
      'description' => esc_html__( 'Simple switch control', 'kirki' ),
      'section'     => 'breadcrumb_section',
      'default'     => 'on',
      'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
      ],
    ]
  );
  
  
}
artly_breadcrumb_section();