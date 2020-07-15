<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name');?></title>
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>

        <div class="scroll-top-btn"></div>

        <header>
            <div class="container-lg">
                <div class="row row--nav-pad">
                    <div class="col-10 col-med-4 dis-flex align-items-center">
                            <a href="<?php echo esc_url(site_url('/')); ?>">
                                <?php
                                    $custom_logo_id = get_theme_mod('custom_logo');
                                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                                    if (has_custom_logo()) {
                                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="img-100 dis-block text-center">';
                                    } else {
                                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                                    }
                                ?>
                            </a>
                    </div>
                    <div class="col-2 col-med-8">
                        <nav class="slider-menu">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'primary',
                            ));?>
                        </nav>
                        <div class="slider-menu__toggler"><span></span></div>
                    </div>
                </div>
            </div>
        </header>