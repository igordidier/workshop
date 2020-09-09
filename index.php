<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

    <title>ECOPAIN</title>
    <style>
    	body { margin: 0; padding: 0; }
    	#map { position: absolute; top: 0; bottom: 0; width: 100%;height: 500px;}
    </style>
<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <a href="https://icons8.com/icon/80684/point-d'interrogation"></a>

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css" >

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <u>ECOPAIN</u>
                        </a>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/slide-01.jpg" alt="">
                <div class="text-content">
                  <h3>Bienvenue à ECOPAIN</h3>
                  <h5>Un Trajet Pour La Planète</h5>
                  <a href="#about" class="main-stroked-button">Regarder la Carte<i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/slide-02.jpg" alt="">
                <div class="text-content">
                  <h3>Le Futur dans Tes Mains</h3>
                  <h5>Un site innovant et pratique </h5>
                  <a href="#doc" class="main-stroked-button">Documentation<i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about" >

<link
rel="stylesheet"
href="assets/css/mapbox-gl-directions.css"
type="text/css"
/>
<div id="map"></div>

<script>
<?php include 'assets/js/mapbox-gl-directions.js'; ?>

  mapboxgl.accessToken = 'pk.eyJ1IjoiYmFya296YSIsImEiOiJja2VzaHAybTgyNzlyMndvODR5MDQxMzg0In0.qXzsC3LIeIgJ11ghRP35WQ';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [5.72639, 45.18694],
zoom: 13
});

map.addControl(
new MapboxDirections({
accessToken: mapboxgl.accessToken
}),
'top-left'
);

</script>
<section class="section" id="features">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Le Saviez-Vous ?</h4>
                            <p>Rouler coûte de plus en plus cher avec une voiture, en plus de produire en quantité des émissions de gaz à effet de serre, qui contribuent malheureseument
                              a la polution des villes et, sur une plus grande echelle, au réchaufement climatique. En moyenne, la plupart de nos trajets urbains ne dépassent pas deux kilomètres, la voiture peut
                              être remplacée.</p>
                            <a href="https://fr.wikipedia.org/wiki/Impact_environnemental_du_transport_routier" class="text-button-icon">
                                En Savoir Plus</a> <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="https://img.icons8.com/pastel-glyph/46/000000/map.png"/>
                        </div>
                        <div class="features-content">
                            <h4>Une carte interactive</h4>
                            <p>Grâce au plan interactif, choisissez votre trajet, et il calculera quel type de transport est le plus aproprié à votre trajet. (En fonction de la longueur du trajet, son émission de Co2...).</p>
                            <a href="#about" class="text-button-icon">
                                Utiliser la carte <i class="fa fa-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="https://img.icons8.com/cotton/46/000000/earth-planet--v2.png"/>
                        </div>
                        <div class="features-content">
                            <h4>Agir pour l'environement</h4>
                            <p>Parce que la moindre contribution à des voyages plus écologiques, permet, petit-à-petit, d'avoir un réel impact sur le futur de notre planète, si ces gestes et changements sont adoptés par le plus grand nombre</p>
                            <a href="#" class="text-button-icon">
                                En Savoir Plus <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>


    <!-- ***** About Area Ends ***** -->


    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->

    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Projects Area Starts ***** -->

    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">010-020-0860</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">ecopainplanet@gmail.com</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">www.company.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; Ecopain, EPSI GRENOBLE 2020.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" href="https://www.facebook.com/ecopain.planet"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="https://twitter.com/EcopainP"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

  </body>
</html>
