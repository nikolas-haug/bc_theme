<?php 
/*
    Template Name: Order Online
*/
?>

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
                        <h2 class="align-self-center text-center">
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
                        </h2>
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
                    <div class="col-12">
                        <a class="button full-button button--order-online">
                            Order online
                        </a>
                    </div>
                    <?php if(is_front_page()) : ?>
                        <div class="col-med-12">
                            <h1 class="site-tagline text-center margin-bottom">independently owned and operated coffeehouse serving the Stevens Square neighborhood of Minneapolis
                            </h1>
                        </div>
                    <?php endif; ?>

                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <div class="col-med-12 padding-bottom">
                            <?php if(!is_front_page()) : ?>
                                <h1><?php the_title(); ?></h1>
                            <?php endif; ?>
                            <!-- Image slider here for welcome page -->
                            <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( 'full', array('class' => 'img-100') ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-med-12 margin-bottom">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
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