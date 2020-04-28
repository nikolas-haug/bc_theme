<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo( 'name' ); ?></title>
        <?php wp_head(  ); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="scroll-top-btn"></div>

        <header>
            <div class="container-lg">
                <div class="row row--nav-pad">
                    <div class="col-12 col-med-4 dis-flex">
                        <h1 class="align-self-center text-center">

                            <a href="<?php echo esc_url(site_url( '/' )); ?>">
                                    <?php 
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                        if ( has_custom_logo() ) {
                                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="img-100 dis-block text-center">';
                                        } else {
                                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                        }
                                    ?>
                            </a>
                        </h1>
                    </div>
                    <div class="col-med-8">
                        <nav class="slider-menu">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'primary'
                            )); ?>
                        </nav>
                        <div class="slider-menu__toggler"><span></span></div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container-lg">
                <div class="row">
                    <?php if(is_page('welcome')) : ?>
                        <div class="col-med-12 text-center margin-bottom">
                            <p>independently owned and operated coffeehouse serving the Stevens Square neighborhood of Minneapolis since 2011</p>
                        </div>
                    <?php endif; ?>
                    
                    <div class="col-med-12 padding-bottom">
                        <!-- Image slider here for welcome page -->
                        <!-- <img src="images/IMG_4304.jpg" alt="" class="img-100"> -->
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="container-stretch">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-widget text-center">
                            <p>1830 3rd Avenue South, Minneapolis, MN 55404</p>
                            <p><i class="fas fa-phone-square"></i> 612.886.7085</p>
                            <p>Monday - Friday 6:30 AM - 8:00 PM | Saturday & Sunday 7:00 AM - 8:00 PM</p>
                        </div>
                    </div>
                    <div class="col-12 padding-right-zero padding-left-zero">
                        <div class="footer__socials text-center">
                            <p><span class="fab fa-facebook-square fa-2x"></span>  <span class="fab fa-instagram fa-2x"></span></p>
                            <p>Boiler Room Coffee &copy; 2011</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <?php wp_footer(  ); ?>
    </body>
</html>