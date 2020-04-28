<?php get_header(); ?>

        <main>
            <div class="container-lg">
                <div class="row">
                    <?php if(is_front_page()) : ?>
                        <div class="col-med-12">
                            <?php if(get_theme_mod( 'site_tagline', 'Welcome to my website!' )) : ?>
                                <h1 class="site-tagline text-center margin-bottom"><?php echo esc_html(get_theme_mod( 'site_tagline', '' )); ?></h1>
                            <?php endif; ?>
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

<?php get_footer(); ?>