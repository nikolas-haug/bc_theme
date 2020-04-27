<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Boiler Room Coffee</title>
        <?php wp_head(  ); ?>
    </head>
    <body>

        <div class="scroll-top-btn"></div>

        <header>
            <div class="container-lg">
                <div class="row row--nav-pad">
                    <div class="col-12 col-med-4 dis-flex">
                        <h1 class="align-self-center text-center">
                            <a href="index.html">
                                <img src="images/br_logo_lg@4x.png" alt="" class="img-100 dis-block text-center">
                            </a>
                        </h1>
                    </div>
                    <div class="col-med-8">
                        <nav class="slider-menu">
                            <ul>
                                <li><a href="index.html">Welcome</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="menu.html">Menu</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </nav>
                        <div class="slider-menu__toggler"><span></span></div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container-lg">
                <div class="row">
                    <div class="col-med-12 text-center margin-bottom">
                        <p>independently owned and operated coffeehouse serving the Stevens Square neighborhood of Minneapolis since 2011</p>
                    </div>
                    <div class="col-med-12 padding-bottom">
                        <!-- Image slider here for welcome page -->
                        <img src="images/IMG_4304.jpg" alt="" class="img-100">
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