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
                        <blockquote class="blockquote-v1 text-left">
                            <h1> Hizmet Şartları </h1>
                            <h3> 1. Şartlar </h3>
                            <p> https://www.kagantv.com adresinden erişilebilen bu Web Sitesine erişerek, bu Web Sitesi Kullanım Şartları ve Koşullarına bağlı kalmayı kabul ediyor ve geçerli tüm yerel yasalarla yapılan sözleşmeden sorumlu olduğunuzu kabul ediyorsunuz. Bu şartlardan herhangi birine katılmıyorsanız, bu siteye erişmeniz yasaktır. Bu Web Sitesinde bulunan materyaller telif hakkı ve ticari marka kanunu ile korunmaktadır. </p>
                            <h3> 2. Lisans Kullan </h3>
                            <p> Yalnızca kişisel, ticari olmayan geçici görüntüleme için KaganTV'nin Web sitesindeki materyallerin bir kopyasını geçici olarak indirme izni verilmiştir. Bu bir lisans verilmesidir, mülkiyet devri değildir ve bu lisans kapsamında şunları yapamazsınız: </p>
                            <ul>
                                <li> malzemeleri değiştirmek veya kopyalamak; </li>
                                <li> Materyalleri herhangi bir ticari amaçla veya halka açık herhangi bir teşhir için kullanmak; </li>
                                <li> KaganTV'nin Web Sitesinde bulunan herhangi bir yazılıma tersine mühendislik uygulama; </li>
                                <li> materyallerden herhangi bir telif hakkı veya diğer tescilli notasyonu kaldırmak; veya </li>
                                <li> materyalleri başka bir kişiye aktarmak veya materyalleri başka bir sunucuda "yansıtmak". </li>
                            </ul>
                            <h3> 3. Sorumluluk Reddi </h3>
                            <p> KaganTV’nin Web sitesindeki tüm materyaller "olduğu gibi" sağlanmaktadır. KaganTV, açık veya zımni herhangi bir garanti vermez, bu nedenle diğer tüm garantileri geçersiz kılar. Ayrıca KaganTV, Web Sitesindeki materyallerin kullanımının doğruluğu veya güvenilirliği ile ilgili veya bu materyaller veya bu Web Sitesi ile bağlantılı sitelerle ilgili herhangi bir beyanda bulunmaz. </p>
                            <h3> 4. Sınırlamalar </h3>
                            <p> KaganTV veya bu Web Sitesinin yetkili temsilcisi, sözlü veya yazılı olarak bilgilendirilmiş olsa bile, KaganTV veya tedarikçileri, KaganTV'nin Web Sitesindeki materyallerin kullanılması veya kullanılamamasından doğacak zararlardan sorumlu tutulmayacaktır. böyle bir hasar olasılığı. Bazı yargı bölgeleri, zımni garantilerde sınırlamalara veya arızi hasarlara ilişkin sorumluluk sınırlamalarına izin vermez, bu sınırlamalar sizin için geçerli olmayabilir. </p>
                            <h3> 5. Düzeltmeler ve Hatalar </h3>
                            <p> KaganTV’nin Web sitesinde görünen materyaller teknik, yazım hataları veya fotoğraf hataları içerebilir. KaganTV, bu Web Sitesindeki herhangi bir materyalin doğru, eksiksiz veya güncel olduğuna dair söz vermeyecektir. KaganTV, Web Sitesinde yer alan materyalleri herhangi bir zamanda bildirimde bulunmaksızın değiştirebilir. KaganTV, materyalleri güncelleme taahhüdünde bulunmamaktadır. </p>
                            <h3> 6. Bağlantılar </h3>
                            <p> KaganTV, Web Sitesine bağlı tüm siteleri incelememiştir ve bu tür bağlantılı sitelerin içeriğinden sorumlu değildir. Herhangi bir bağlantının varlığı, sitenin KaganTV tarafından onaylandığı anlamına gelmez. Bağlantı verilen herhangi bir web sitesinin kullanımının riski kullanıcının kendisine aittir. </p>
                            <h3> 7. Site Kullanım Şartları Değişiklikleri </h3>
                            <p> KaganTV, Web Sitesi için bu Kullanım Koşullarını herhangi bir zamanda önceden bildirimde bulunmaksızın revize edebilir. Bu Web Sitesini kullanarak, bu Kullanım Hüküm ve Koşullarının güncel sürümüne bağlı kalmayı kabul ediyorsunuz. </p>
                            <h3> 8. Gizliliğiniz </h3>
                            <p> Lütfen <a href="{{ route('privacy_and_dataProtection') }}"> Gizlilik Politikamızı</a> okuyun.</p>
                            <h3> 9. Geçerli Hukuk </h3>
                            <p> KaganTV'nin Web Sitesiyle ilgili her türlü iddia, kanunlar ihtilafı hükümlerine bakılmaksızın tr kanunlarına tabi olacaktır. </p>
                        </blockquote>
                        <!-- End Left Bordered -->
                    </div>

                    <div class="tab-pane fade" id="blockquotes-center-1" role="tabpanel" aria-labelledby="blockquotes-center-tab-1">
                        <blockquote class="blockquote-v1 text-left">
                            <h1>Terms of Service</h1>
                            <h3>1. Terms</h3>
                            <p>By accessing this Website, accessible from https://www.kagantv.com, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>
                            <h3>2. Use License</h3>
                            <p>Permission is granted to temporarily download one copy of the materials on KaganTV's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                            <ul>
                                <li>modify or copy the materials;</li>
                                <li>use the materials for any commercial purpose or for any public display;</li>
                                <li>attempt to reverse engineer any software contained on KaganTV's Website;</li>
                                <li>remove any copyright or other proprietary notations from the materials; or</li>
                                <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
                            </ul>
                            <h3>3. Disclaimer</h3>
                            <p>All the materials on KaganTV’s Website are provided "as is". KaganTV makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, KaganTV does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>
                            <h3>4. Limitations</h3>
                            <p>KaganTV or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on KaganTV’s Website, even if KaganTV or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>
                            <h3>5. Revisions and Errata</h3>
                            <p>The materials appearing on KaganTV’s Website may include technical, typographical, or photographic errors. KaganTV will not promise that any of the materials in this Website are accurate, complete, or current. KaganTV may change the materials contained on its Website at any time without notice. KaganTV does not make any commitment to update the materials.</p>
                            <h3>6. Links</h3>
                            <p>KaganTV has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by KaganTV of the site. The use of any linked website is at the user’s own risk.</p>
                            <h3>7. Site Terms of Use Modifications</h3>
                            <p>KaganTV may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>
                            <h3>8. Your Privacy</h3>
                            <p>Please read our <a href="{{ route('privacy_and_dataProtection') }}">Privacy Policy.</a></p>
                            <h3>9. Governing Law</h3>
                            <p>Any claim related to KaganTV's Website shall be governed by the laws of tr without regards to its conflict of law provisions.</p>
                        </blockquote>
                    </div>

                    <div class="tab-pane fade" id="blockquotes-right-1" role="tabpanel" aria-labelledby="blockquotes-right-tab-1">
                        <!-- Right Bordered -->
                        <blockquote class="blockquote-v1 text-left">
                            <h1> Nutzungsbedingungen </h1>
                            <h3> 1. Begriffe </h3>
                            <p> Durch den Zugriff auf diese Website, die über https://www.kagantv.com zugänglich ist, erklären Sie sich mit diesen Nutzungsbedingungen der Website einverstanden und erklären sich damit einverstanden, dass Sie für die Vereinbarung mit den geltenden lokalen Gesetzen verantwortlich sind. Wenn Sie mit einer dieser Bedingungen nicht einverstanden sind, ist Ihnen der Zugriff auf diese Website untersagt. Die auf dieser Website enthaltenen Materialien sind urheber- und markenrechtlich geschützt. </p>
                            <h3> 2. Lizenz verwenden </h3>
                            <p> Es wird die Erlaubnis erteilt, vorübergehend eine Kopie des Materials auf der KaganTV-Website herunterzuladen, um es nur für den persönlichen, nicht kommerziellen vorübergehenden Gebrauch anzusehen. Dies ist die Erteilung einer Lizenz, keine Übertragung des Eigentums, und unter dieser Lizenz dürfen Sie nicht: </p>
                            <ul>
                                <li> die Materialien ändern oder kopieren; </li>
                                <li> Verwenden Sie die Materialien für kommerzielle Zwecke oder für öffentliche Präsentationen. </li>
                                <li> versuchen, auf der KaganTV-Website enthaltene Software zurückzuentwickeln; </li>
                                <li> Entfernen Sie alle urheberrechtlichen oder sonstigen geschützten Vermerke aus den Materialien. oder </li>
                                <li> Übertragen der Materialien an eine andere Person oder "Spiegeln" der Materialien auf einem anderen Server. </li>
                            </ul>
                            <h3> 3. Haftungsausschluss </h3>
                            <p> Alle Materialien auf der KaganTV-Website werden "wie sie sind" bereitgestellt. KaganTV übernimmt keine ausdrücklichen oder stillschweigenden Garantien und negiert daher alle anderen Garantien. Darüber hinaus macht KaganTV keine Zusicherungen hinsichtlich der Richtigkeit oder Zuverlässigkeit der Verwendung der Materialien auf seiner Website oder in sonstiger Weise in Bezug auf solche Materialien oder Websites, die mit dieser Website verlinkt sind. </p>
                            <h3> 4. Einschränkungen </h3>
                            <p> KaganTV oder seine Lieferanten haften nicht für Schäden, die durch die Verwendung oder Unfähigkeit zur Verwendung der Materialien auf der KaganTV-Website entstehen, selbst wenn KaganTV oder ein autorisierter Vertreter dieser Website mündlich oder schriftlich darüber informiert wurde die Möglichkeit eines solchen Schadens. In einigen Ländern sind keine Einschränkungen impliziter Garantien oder Haftungsbeschränkungen für Nebenschäden zulässig. Diese Einschränkungen gelten möglicherweise nicht für Sie. </p>
                            <h3> 5. Revisionen und Errata </h3>
                            <p> Die Materialien auf der KaganTV-Website können technische, typografische oder fotografische Fehler enthalten. KaganTV wird nicht versprechen, dass die Materialien auf dieser Website korrekt, vollständig oder aktuell sind. KaganTV kann die auf seiner Website enthaltenen Materialien jederzeit ohne vorherige Ankündigung ändern. KaganTV verpflichtet sich nicht, die Materialien zu aktualisieren. </p>
                            <h3> 6. Links </h3>
                            <p> KaganTV hat nicht alle mit seiner Website verknüpften Websites überprüft und ist nicht für den Inhalt solcher verlinkten Websites verantwortlich. Das Vorhandensein eines Links bedeutet nicht, dass KaganTV die Website billigt. Die Nutzung einer verlinkten Website erfolgt auf eigenes Risiko des Benutzers. </p>
                            <h3> 7. Änderungen der Nutzungsbedingungen der Website </h3>
                            <p> KaganTV kann diese Nutzungsbedingungen für seine Website jederzeit ohne vorherige Ankündigung ändern. Durch die Nutzung dieser Website erklären Sie sich damit einverstanden, an die aktuelle Version dieser Nutzungsbedingungen gebunden zu sein. </p>
                            <h3> 8. Ihre Privatsphäre </h3>
                            <p> Bitte lesen Sie unsere <a href="{{ route('privacy_and_dataProtection') }}"> Datenschutzrichtlinie. </a> </p>
                            <h3> 9. Geltendes Recht </h3>
                            <p> Jegliche Ansprüche im Zusammenhang mit der Website von KaganTV unterliegen den Gesetzen von tr, ohne Rücksicht auf die Bestimmungen des Kollisionsrechts. </p>
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