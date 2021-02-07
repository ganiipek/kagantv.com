<x-guest-layout>
    <x-slot name="main">
        <section class="container-fluid">
            <div class="row text-center u-icon-block">
                <!-- Icon Block Column -->
                <div class="col-lg-4 u-icon-block__col">
                    <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
                        <a target="_blank" href="https://www.facebook.com/KAGANTV"><span class="fab fa-facebook u-icon__inner text-white"></span></a>
                    </span>
                    <h3 class="h5"><a target="_blank" href="https://www.facebook.com/KAGANTV">Facebook</a></h3>
                    <p class="mb-0"><a target="_blank" href="https://www.facebook.com/KAGANTV">facebook.com/KAGANTV</a></p>
                </div>
                <!-- End Icon Block Column -->

                <!-- Icon Block Column -->
                <div class="col-lg-4 u-icon-block__col u-icon-block__col--left-brd">
                    <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
                        <a target="_blank" href="https://discord.kagantv.com"><span class="fab fa-discord u-icon__inner text-white"></span></a>
                    </span>
                    <h3 class="h5"><a target="_blank" href="https://discord.kagantv.com">Discord</a></h3>
                    <p class="mb-0"><a target="_blank" href="https://discord.kagantv.com">discord.kagantv.com</a></p>
                </div>
                <!-- End Icon Block Column -->

                <!-- Icon Block Column -->
                <div class="col-lg-4 u-icon-block__col u-icon-block__col--left-brd">
                    <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
                        <a target="_blank" href="mailto:kagangamingg@gmail.com"><span class="fas fa-envelope-open u-icon__inner text-white"></span></a>
                    </span>
                    <h3 class="h5"><a target="_blank" href="mailto:kagangamingg@gmail.com">Email</a></h3>
                    <p class="mb-0"><a target="_blank" href="mailto:kagangamingg@gmail.com">kagangamingg@gmail.com</a></p>
                </div>
                <!-- End Icon Block Column -->
            </div>
        </section>
        <!-- End Icon Block -->

        <!-- Contact Form -->
        <section class="u-content-space">
            <div class="container">
                <header class="text-center w-md-75 mx-auto mb-8">
                    <h2 class="h1">SANA YARDIM ETMEK İÇİN BURDAYIZ</h2>
                    <p class="h5">Bir şey mi merak ediyorsunuz? Turnuvalar ya da çekilişler ilgili herhangi bir sorununuz mu var? Hemen bizimle iletişme geçin.</p>
                </header>

                <form class="text-center w-md-75 mx-auto" action="#">
                    <div class="row">
                        <div class="col-lg-6 form-group mb-4">
                            <input class="form-control form-control-lg" placeholder="İsim Soyisim" type="text">
                        </div>

                        <div class="col-lg-6 form-group mb-4">
                            <input class="form-control form-control-lg" placeholder="Email" type="email">
                        </div>

                        <div class="col-lg-12 form-group mb-4">
                            <input class="form-control form-control-lg" placeholder="Konu" type="text">
                        </div>

                        <div class="col-lg-12 form-group mb-6">
                            <textarea class="form-control form-control-lg" rows="7" placeholder="Mesaj"></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-lg btn-primary py-3 px-4" type="submit">Mesaj Gönder</button>
                    </div>
                </form>
            </div>
        </section>
    </x-slot>
</x-guest-layout>