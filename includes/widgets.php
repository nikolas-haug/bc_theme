<?php

function boiler_room_widgets() {
    register_sidebar([
        'name' => __('Boiler Room Sidebar'),
        'id' => 'boiler_room_sidebar',
        'description' => __('Sidebar for the Boiler Room Theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => __('Footer Content'),
        'id' => 'footer_content',
        'description' => __('Footer area content'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}