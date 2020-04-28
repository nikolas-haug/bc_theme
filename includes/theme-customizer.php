<?php

function boiler_room_customize_register( $wp_customize ) {
     //All our sections, settings, and controls will be added here - defaults should match $variables
     $colors = array();
     $colors[] = array(
     'slug'=>'content_text_color', 
     'default' => '#fff',
     'label' => __('Content Text Color', 'boiler room')
     );
     $colors[] = array(
     'slug'=>'content_link_color', 
     'default' => '#3C2E37',
     'label' => __('Content Link Color', 'boiler room')
     );
     foreach( $colors as $color ) {
     // SETTINGS
     $wp_customize->add_setting(
         $color['slug'], array(
         'default' => $color['default'],
         'type' => 'option', 
         'capability' => 
         'edit_theme_options'
         )
     );
     // CONTROLS
     $wp_customize->add_control(
         new WP_Customize_Color_Control(
         $wp_customize,
         $color['slug'], 
         array('label' => $color['label'], 
         'section' => 'colors',
         'settings' => $color['slug'])
         )
     );
     }
     // SOCIAL SECTION ***************************************
     $wp_customize->add_section('icons', array(
         'title' => __('Icons', 'boiler room'),
         'description' => sprintf(__('Options for footer icons', 'boiler room')),
         'priority' => 130
     ));
 
     // icon 1 
 
     // icon 1 url setting
     $wp_customize->add_setting('icon1_url', array(
         'default' => _x('url', 'boiler room'),
         'type' => 'theme_mod'
     ));
     // icon 1 url control
     $wp_customize->add_control('icon1_url', array(
         'label' => __('icon 1 url', 'boiler room'),
         'section' => 'icons',
         'priority' => 20
     ));
     // icon 1 Icon setting
     $wp_customize->add_setting('icon1_icon', array(
         'default' => _x('Enter fontawesome class here', 'boiler room'),
         'type' => 'theme_mod'
     ));
     // icon 1 text control
     $wp_customize->add_control('icon1_icon', array(
         'label' => __('icon 1 Icon', 'boiler room'),
         'section' => 'icons',
         'priority' => 20
     ));
 
     // icon 2
 
      // icon 2 url setting
      $wp_customize->add_setting('icon2_url', array(
         'default' => _x('url', 'boiler room'),
         'type' => 'theme_mod'
     ));
     // icon 2 url control
     $wp_customize->add_control('icon2_url', array(
         'label' => __('icon 2 url', 'boiler room'),
         'section' => 'icons',
         'priority' => 20
     ));
     // icon 2 Icon setting
     $wp_customize->add_setting('icon2_icon', array(
         'default' => _x('Enter fontawesome class here', 'boiler room'),
         'type' => 'theme_mod'
     ));
     // icon 2 text control
     $wp_customize->add_control('icon2_icon', array(
         'label' => __('icon 2 Icon', 'boiler room'),
         'section' => 'icons',
         'priority' => 20
     ));
 
     // icon 3
 
      // icon 3 url setting
      $wp_customize->add_setting('icon3_url', array(
         'default' => _x('url', 'boiler room'),
         'type' => 'theme_mod'
     ));
     // icon 3 url control
     $wp_customize->add_control('icon3_url', array(
         'label' => __('icon 3 url', 'boiler room'),
         'section' => 'icons',
         'priority' => 20
     ));
     // icon 3 Icon setting
     $wp_customize->add_setting('icon3_icon', array(
         'default' => _x('Enter fontawesome class here', 'boiler room'),
         'type' => 'theme_mod'
     ));
     // icon 3 text control
     $wp_customize->add_control('icon3_icon', array(
         'label' => __('icon 3 Icon', 'boiler room'),
         'section' => 'icons',
         'priority' => 20
     ));

     // Site tagline
     $wp_customize->add_section('tagline', array(
        'title' => __('Tagline', 'boiler room'),
        'description' => sprintf(__('Add a header to your welcome page.', 'boiler room')),
        'priority' => 130
    ));

    $wp_customize->add_setting('site_tagline', array(
        'default' => _x('Welcome to my website!', 'boiler room'),
        'type' => 'theme_mod'
    ));
    // icon 1 url control
    $wp_customize->add_control('site_tagline', array(
        'label' => __('Site Tagline (<h1>)', 'boiler room'),
        'section' => 'tagline',
        'priority' => 20
    ));

}