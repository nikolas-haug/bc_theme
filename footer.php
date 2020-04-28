<footer>
        <div class="container-stretch">
            <div class="row">
                <div class="col-12">
                    <?php if(is_active_sidebar( 'footer_content' )) : ?>
                        <?php dynamic_sidebar( 'footer_content' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 padding-right-zero padding-left-zero">
                    <div class="footer__socials text-center">
                        <?php if(get_theme_mod( 'icon1_icon', '' )) : ?>
                            <a href="<?php echo get_theme_mod( 'icon1_url', '' ); ?>" target="_blank" rel="noopener"><span class="footer__icon <?php echo get_theme_mod( 'icon1_icon', '' ); ?>"></span></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod( 'icon2_icon', '' )) : ?>
                            <a href="<?php echo get_theme_mod( 'icon2_url', '' ); ?>" target="_blank" rel="noopener"><span class="footer__icon <?php echo get_theme_mod( 'icon2_icon', '' ); ?>"></span></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod( 'icon3_icon', '' )) : ?>
                            <a href="<?php echo get_theme_mod( 'icon3_url', '' ); ?>" target="_blank" rel="noopener"><span class="footer__icon <?php echo get_theme_mod( 'icon3_icon', '' ); ?>"></span></a>
                        <?php endif; ?>
                        <p class="footer__copyright"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(  ); ?>
    </body>
</html>