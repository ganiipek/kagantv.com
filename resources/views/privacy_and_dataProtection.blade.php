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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">

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
                <!-- Blockquotes -->
                <ul class="nav nav nav-pills mb-5" id="blockquotes-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="blockquotes-left-tab-1" data-toggle="pill" href="#blockquotes-left-1" role="tab" aria-controls="blockquotes-left-1" aria-selected="true">
                        <i class="flag-icon flag-icon-tr mr-2"></i> Türkçe
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="blockquotes-center-tab-1" data-toggle="pill" href="#blockquotes-center-1" role="tab" aria-controls="blockquotes-center-1" aria-selected="false">
                        <i class="flag-icon flag-icon-us mr-2"></i> English
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="blockquotes-right-tab-1" data-toggle="pill" href="#blockquotes-right-1" role="tab" aria-controls="blockquotes-right-1" aria-selected="false">
                        <i class="flag-icon flag-icon-de mr-2"></i> Deutsch
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="blockquotes-tabContent">
                    <div class="tab-pane fade show active" id="blockquotes-left-1" role="tabpanel" aria-labelledby="blockquotes-left-tab-1">
                        <!-- Left Bordered -->
                        <blockquote class="blockquote-v1 text-center">
                            <h1> Gizlilik ve Veri Koruması </h1>
                            <p> KaganTV, müşteri verilerini yalnızca sözleşmelerin işlenmesi bağlamında toplar. Federal Veri Koruma Yasasının (BDSG) yasal gerekliliklerine uyulur. Müşterinin envanter ve kullanım verileri, yalnızca sözleşme ilişkisinin yürütülmesi için gerekli olduğu ölçüde toplanır, işlenir veya kullanılır. </p>
                            <h3> Genel bilgiler: </h3>
                            <p> Bu veri koruma beyanı yalnızca KaganTV'nin sorumlu olduğu ve erişilebilir olduğu sayfalar için geçerlidir. Tüm İnternet kullanıcılarının, web sitelerini ziyaret ederken veri izleri bıraktıklarını belirtmek isteriz. Bu daha sonra tanımlamayı etkinleştirebilir, ör. IP numarasını kullanarak. KaganTV'yi kullanırken, barındırma sözleşmesi ortağımız özel kişisel referans olmadan bu web sitesine erişimlere ilişkin istatistiksel verileri toplar ve saklar (günlük ve haftalık erişilen sayfa sayısı, ziyaret edilen sayfaların sıralaması, tıklanan dış sayfalara bağlantıların sıralaması). Bu, geçerli veri koruma yasalarına uygun olarak ve tamamen dahili amaçlarla yapılır. </p>
                            <h3> Formlar ve giriş maskeleri: </h3>
                            <p> KaganTV'de formlara veya giriş maskelerine veri girerseniz, bu gönüllü olarak yapılır. Verileri göndererek, verilerin depolanmasına ve daha fazla kullanılmasına geri alınabilir şekilde izin vermiş olursunuz. Verileriniz yalnızca girdiğiniz amaç için işlenecektir. Bu amaç, giriş maskesinde görülebilir. Verilerinize elektronik bir onay beyanı gönderdiyseniz, elektronik olarak kaydedilecek ve istediğiniz zaman erişebileceksiniz. Gizli veriler iletilirken, olay bazında önceden bir anlaşma yapılmalıdır. İsteğiniz üzerine, örneğin sipariş işleme için artık gerekli değilse, bu verileri derhal sileceğiz. </p>
                        </blockquote>
                        <!-- End Left Bordered -->
                    </div>

                    <div class="tab-pane fade" id="blockquotes-center-1" role="tabpanel" aria-labelledby="blockquotes-center-tab-1">
                        <blockquote class="blockquote-v1 text-center">
                            <h1>Privacy and Data Protection</h1>
                            <p>KaganTV only collects customer data in the context of processing contracts. The legal requirements of the Federal Data Protection Act (BDSG) are observed. Inventory and usage data of the customer are only collected, processed or used insofar as this is necessary for the execution of the contractual relationship. </p>
                            <h3>General information: </h3>
                            <p>This data protection declaration only applies to pages for which KaganTV is responsible and accessible. We would like to point out that all Internet users leave traces of data when visiting websites. This can enable later identification, e.g. using the IP number. When using KaganTV, our hosting contract partner collects and stores statistical data on accesses to this website without specific personal reference (number of pages accessed per day and week, ranking of the pages visited, ranking of the links to external pages clicked). This is done in accordance with the applicable data protection laws and for purely internal purposes. </p>
                            <h3>Forms and input masks: </h3>
                            <p>If you enter data in forms or input masks on KaganTV, this is done voluntarily. By sending the data, you revocably consent to the storage and further use of the data. Your data will only be processed for the purpose for which you entered it. This purpose can be seen in the input mask. If you have submitted an electronic declaration of consent to your data, it will be saved electronically and you can access it at any time. When transmitting confidential data, an agreement should be made in advance on a case-by-case basis. At your request, we will delete this data immediately if, for example, it is no longer required for order processing. </p>
                        </blockquote>
                    </div>

                    <div class="tab-pane fade" id="blockquotes-right-1" role="tabpanel" aria-labelledby="blockquotes-right-tab-1">
                        <!-- Right Bordered -->
                        <blockquote class="blockquote-v1 text-center">
                            <h1> Datenschutz und Privatsphäre </h1>
                                <p> KaganTV sammelt Kundendaten nur im Rahmen der Vertragsabwicklung. Die gesetzlichen Bestimmungen des Bundesdatenschutzgesetzes (BDSG) sind zu beachten. Bestands- und Nutzungsdaten des Kunden werden nur erhoben, verarbeitet oder verwendet, soweit dies zur Ausführung des Vertragsverhältnisses erforderlich ist. </p>
                                <h3> Allgemeine Informationen: </h3>
                                    <p> Diese Datenschutzerklärung gilt nur für Seiten, für die KaganTV verantwortlich und zugänglich ist. Wir möchten darauf hinweisen, dass alle Internetnutzer beim Besuch von Websites Datenspuren hinterlassen. Dies kann eine spätere Identifizierung ermöglichen, z. unter Verwendung der IP-Nummer. Bei Verwendung von KaganTV sammelt und speichert unser Hosting-Vertragspartner statistische Daten über Zugriffe auf diese Website ohne besonderen persönlichen Bezug (Anzahl der Seiten, auf die pro Tag und Woche zugegriffen wird, Rangfolge der besuchten Seiten, Rangfolge der Links zu angeklickten externen Seiten). Dies erfolgt in Übereinstimmung mit den geltenden Datenschutzgesetzen und für rein interne Zwecke. </p>
                                    <h3> Formulare und Eingabemasken: </h3>
                                        <p> Wenn Sie Daten in Formulare oder Eingabemasken auf KaganTV eingeben, erfolgt dies freiwillig. Durch das Versenden der Daten stimmen Sie der Speicherung und Weiterverwendung der Daten widerruflich zu. Ihre Daten werden nur für den Zweck verarbeitet, für den Sie sie eingegeben haben. Dieser Zweck ist in der Eingabemaske zu sehen. Wenn Sie eine elektronische Einverständniserklärung zu Ihren Daten abgegeben haben, werden diese elektronisch gespeichert und Sie können jederzeit darauf zugreifen. Bei der Übermittlung vertraulicher Daten sollte von Fall zu Fall im Voraus eine Vereinbarung getroffen werden. Auf Ihren Wunsch werden wir diese Daten sofort löschen, wenn sie beispielsweise für die Auftragsabwicklung nicht mehr benötigt werden. </p>
                        </blockquote>
                        <!-- End Right Bordered -->
                    </div>
                </div>
                <!-- End Blockquotes -->
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