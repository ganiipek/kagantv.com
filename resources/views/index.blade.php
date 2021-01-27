<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>KaganTV | Facebook Gaming</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="kagantv, facebook gaming, streamer, yayıncı, yayinci">
    <meta name="description" content="Selam ben Kagan. Şuan da tam zamanlı yayıncılık yapmaktayım. Amacım sizleri eğlendirmek ve eğlenirken ciddi oyun oynanabildiğini gösterebilmek, keyifli seyirler!">
    <meta name="author" content="kagantv.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/kagantv-logo-mobile.jpg') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">

    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typedjs/typed.min.js') }}"></script>

    <!-- Components Vendor  -->
    <script src="{{ asset('assets/vendor/jquery.parallax.js') }}"></script>

    <!-- Theme Settings and Calls -->
    <script src="{{ asset('assets/js/global.js') }}"></script>

    <!-- Theme Components and Settings -->
    <script src="{{ asset('assets/js/vendors/parallax.js') }}"></script>
</head>
<!-- End Head -->

<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <!-- Dont delete -->
                    </ul>
                    @if(0)
                    @if (Auth::check())
                    <div>
                        <a class="btn btn-primary" href="{{ route('dashboard') }}">
                            <i class="fa fa-sign-out-alt mr-2"></i> Panele Gir
                        </a>
                    </div>
                    @else
                    <div>
                        <a class="btn" href="{{ route('auth.facebook') }}" style="background-color: #3B5499; color: #ffffff; padding: 8px; width: 100%; text-align: center; display: block; border-radius:4px;">
                            <i class="fab fa-facebook mr-1"></i> Giriş Yap
                        </a>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Promo Block -->
        <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-white" style="background-image: url(assets/img/banner.jpg);">
            <!-- Promo Content -->
            <div class="container u-overlay__inner u-ver-center u-content-space">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="h6 text-uppercase u-letter-spacing-sm mb-0">O sadece bir yayıncı değil</p>
                            <h1 class="display-sm-4 display-lg-3 mb-3">O bir <span class="js-display-typing"></span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Promo Content -->
        </section>
        <!-- End Promo Block -->
    </header>
    <!-- End Header -->

    <main role="main">
        <!-- Icon Block -->
        <section class="container-fluid">
            <div class="row text-center u-icon-block">
                <!-- Icon Block Column -->
                <div class="col-lg-3 u-icon-block__col">
                    <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
                        <a target="_blank" href="https://www.facebook.com/KAGANTV"><span class="fab fa-facebook u-icon__inner text-white"></span></a>
                    </span>
                    <h3 class="h5"><a target="_blank" href="https://www.facebook.com/KAGANTV">Facebook</a></h3>
                    <p class="mb-0"><a target="_blank" href="https://www.facebook.com/KAGANTV">facebook.com/KAGANTV</a></p>
                </div>
                <!-- End Icon Block Column -->

                <!-- Icon Block Column -->
                <div class="col-lg-3 u-icon-block__col u-icon-block__col--left-brd">
                    <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
                        <a target="_blank" href="https://www.instagram.com/kagantv/"><span class="fab fa-instagram u-icon__inner text-white"></span></a>
                    </span>
                    <h3 class="h5"><a target="_blank" href="https://www.instagram.com/kagantv/">Instagram</a></h3>
                    <p class="mb-0"><a target="_blank" href="https://www.instagram.com/kagantv/">instagram.com/KAGANTV</a></p>
                </div>
                <!-- End Icon Block Column -->

                <!-- Icon Block Column -->
                <div class="col-lg-3 u-icon-block__col u-icon-block__col--left-brd">
                    <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
                        <a target="_blank" href="https://www.youtube.com/kagantv/"><span class="fab fa-youtube u-icon__inner text-white"></span></a>
                    </span>
                    <h3 class="h5"><a target="_blank" href="https://www.youtube.com/kagantv/">Youtube</a></h3>
                    <p class="mb-0"><a target="_blank" href="https://www.youtube.com/kagantv/">youtube.com/KAGANTV</a></p>
                </div>
                <!-- End Icon Block Column -->

                <!-- Icon Block Column -->
                <div class="col-lg-3 u-icon-block__col u-icon-block__col--left-brd">
                    <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
                        <a target="_blank" href="https://discord.kagantv.com"><span class="fab fa-discord u-icon__inner text-white"></span></a>
                    </span>
                    <h3 class="h5"><a target="_blank" href="https://discord.kagantv.com">Discord</a></h3>
                    <p class="mb-0"><a target="_blank" href="https://discord.kagantv.com">discord.kagantv.com</a></p>
                </div>
                <!-- End Icon Block Column -->
            </div>
        </section>
        <!-- End Icon Block -->

        <!-- Contact Form -->
        <section class="u-content-space">
            <div class="container">


            </div>
        </section>
        <!-- End Contact Form -->
    </main>

    <!-- Footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                    <small class="text-white">&copy; {{ date("Y") }} <a class="text-white" href="https://kagantv.com">KaganTV</a>. Tüm hakları saklıdır.</small>
                </div>

                <div class="col-md-4 align-self-center">
                    <ul class="list-inline text-center text-md-right mb-0">
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a class="text-white" target="_blank" href="https://www.facebook.com/kagantv">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                            <a class="text-white" target="_blank" href="https://www.instagram.com/kagantv">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a class="text-white" target="_blank" href="https://twitter.com/kagantv">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Youtube">
                            <a class="text-white" target="_blank" href="https://youtube.com/kagantv">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script>
        $(document).on('ready', function() {
            // initialization of text animation (typing)
            $(".js-display-typing").typed({
                strings: [
                    "BABA",
                    "AĞIR ABİ",
                    "ALAMANCI",
                    "ZENGİN"
                ],
                typeSpeed: 60,
                loop: true,
                backDelay: 2500
            });
        });
    </script>
</body>
<!-- End Body -->

</html>