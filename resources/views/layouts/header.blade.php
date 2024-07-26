<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PORTFOLIO</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/vendors/linericon/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="/vendors/flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Open Sans", sans-serif;
        }

        .news_widget li {
            list-style-type: none;
        }
        .news_widget li a {
            color: #777777;
        }
      
       
        .custom_nav-container .navbar-nav .nav-item:hover .nav-link, .custom_nav-container .navbar-nav .nav-item.active .nav-link {
            color: rgb(45, 45, 243);
}
    </style>
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu" id="mainNav">
            <nav class="navbar navbar-expand-lg navbar-light custom_nav-container">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!--  <a class="navbar-brand" href="index.html">BE<span>RIA</span></a> -->
                    <h5 class="pt-3">PORTFOLIO BEREBERE </h5>

                    <!--  <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                        <ul class="nav navbar-nav xqxs ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="/">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="/apropos">A propos</a></li>
                            <li class="nav-item"><a class="nav-link" href="/service">Realisations</a>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>


                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer_area pt-5">
        <div class="container">
            <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget ab_widget">
                        <div class="f_title">
                            <h3>Apropos de moi</h3>
                        </div>
                        <p>Dessinateur confirmé et personne créative, je suis capable de m'adapter aux demandes des clients et travailler sur des projets diversifiés. Par ailleurs, je maîtrise l'utilisation et la gestion de projets sur Autocad, Archicad, SketchUP. Grâce à mon expertise, je suis capable d'apporter une assistance technique et des solutions pertinentes.</p>

                    </aside>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget news_widget">
                        <div class="f_title">
                            <h3>Nos liens</h3>
                        </div>

                        <ul class="footer-menu">
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/about">A propos</a></li>
                            <li><a href="/Realisation">Realisation</a></li>
                            <li><a href="/contact">Contact</a></li>

                        </ul>

                    </aside>
                </div>
                <div class="col-lg-2">
                    <aside class="f_widget social_widget">
                        <div class="f_title">
                            <h3>Suivez-moi</h3>
                        </div>
                        <p>Resaux sociaux</p>
                        <ul class="list">
                            <li><a href="https://wa.me/+22997306722?"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="https://www.facebook.com/ayouba.berebere?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/ayouba-berebere-958809175?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="+22997306722"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="row mt-5 mb-3">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Tout droits reservés | developpé par Safi & Freddy
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <script>




document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');

  function setActiveLink() {
    const currentUrl = window.location.href;
    navLinks.forEach(function(link) {
      if (link.href === currentUrl) {
        link.parentElement.classList.add('active');
      } else {
        link.parentElement.classList.remove('active');
      }
    });
  }

  setActiveLink();

  window.addEventListener('popstate', setActiveLink);
});
</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="/vendors/isotope/isotope-min.js"></script>
    <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="/vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="/js/gmaps.min.js"></script>
    <script src="/js/theme.js"></script>


</body>

</html>