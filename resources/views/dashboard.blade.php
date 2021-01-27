<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <h1 class="h2 font-weight-semibold mb-4">Profile</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 border-md-right border-light text-center">
                            <img class="img-fluid rounded-circle mb-3" src="{{ asset(Auth::user()->profile_photo_path) }}" alt="Image description" width="84">

                            <h2 class="mb-2">{{ Auth::user()->name }}</h2>
                            <h5 class="text-muted mb-4">PUBG Mobile ID: {{ Auth::user()->pubgmobile_id }}</h5>

                            <ul class="list-inline mb-4">
                                <li class="list-inline-item mr-3">
                                    <a class="link-muted" href="#!">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <h3 class="card-title">Son Aktiviteler</h3>
                            <p class="mb-5"></p>

                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Yaklaşan Etkinlikler</h2>
                        </header>

                        <div class="card-body">
                            <div class="u-timeline">
                                <div class="u-timeline__item">
                                    <div class="h5 font-weight-normal text-muted mb-2">Dec 2010 - Feb 2013</div>
                                    <h3 class="mb-0">Head of Development Deparment</h3>
                                    <p class="mb-2">
                                        <a class="u-link u-link--primary" href="#!">Apple Inc.</a>
                                    </p>
                                    <p class="mb-0">Forget Ebay and other forms of advertising for your property</p>
                                </div>

                                <div class="u-timeline__item">
                                    <div class="h5 font-weight-normal text-muted mb-2">Feb 2013 - Mar 2015</div>
                                    <h3 class="mb-0">Marketing Research Manager</h3>
                                    <p class="mb-2">
                                        <a class="u-link u-link--primary" href="#!">Google Inc.</a>
                                    </p>
                                    <p class="mb-0">Differentiate and you stand out in a crowded marketplace</p>
                                </div>

                                <div class="u-timeline__item">
                                    <div class="h5 font-weight-normal text-muted mb-2">Mar 2015 - Apr 2017</div>
                                    <h3 class="mb-0">Head of Development Deparment</h3>
                                    <p class="mb-2">
                                        <a class="u-link u-link--primary" href="#!">Microsoft Corp.</a>
                                    </p>
                                    <p class="mb-0">A gentleman from New York discovered what he calls</p>
                                </div>

                                <div class="u-timeline__item">
                                    <div class="h5 font-weight-normal text-muted mb-2">Apr 2017 - Present</div>
                                    <h3 class="mb-0">Head of Development Deparment</h3>
                                    <p class="mb-2">
                                        <a class="u-link u-link--primary" href="#!">Dropbox Inc.</a>
                                    </p>
                                    <p class="mb-0">Spielberg’s blockbuster Minority Report</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mb-4">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Katıldığın Çekilişler</h2>
                        </header>

                        <div class="card-body">
                            <div class="u-timeline">
                                <div class="u-timeline__item">
                                    <div class="h5 font-weight-normal text-muted mb-2">Dec 2010 - Feb 2013</div>

                                    <div class="media d-block d-sm-flex align-items-center">
                                        <div class="media-body mb-3 mb-sm-0">
                                            <h3 class="mb-0">BS in Computer Science</h3>
                                            <a class="u-link u-link--primary" href="#!">Harvard University</a>
                                        </div>

                                        <a class="ml-sm-auto" href="#!">
                                            <img class="img-fluid" src="./assets/img/brands/harvard.png" width="124" alt="Image description">
                                        </a>
                                    </div>
                                </div>

                                <div class="u-timeline__item">
                                    <div class="h5 font-weight-normal text-muted mb-2">Feb 2015 - Mar 2017</div>

                                    <div class="media d-block d-sm-flex align-items-center">
                                        <div class="media-body mb-3 mb-sm-0">
                                            <h3 class="mb-0">MBA in Marketing</h3>
                                            <a class="u-link u-link--primary" href="#!">University of California</a>
                                        </div>

                                        <a class="ml-sm-auto" href="#!">
                                            <img class="img-fluid" src="./assets/img/brands/berkeley.png" width="124" alt="Image description">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Katıldığın Turnuvalar</h2>
                        </header>

                        <div class="card-body">
                            <div class="media d-block d-sm-flex mb-3">
                                <div class="d-flex align-items-center justify-content-center bg-light u-icon-wrap--horizontal--lg rounded mb-3 mb-sm-0 mr-sm-4">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>

                                <div class="media-body">
                                    <div class="h5 font-weight-normal text-muted mb-2">Feb 2013</div>
                                    <h3 class="mb-0">Computer Science Basics</h3>
                                    <a class="u-link u-link--primary" href="#!">Google</a>
                                </div>
                            </div>

                            <div class="media d-block d-sm-flex">
                                <div class="d-flex align-items-center justify-content-center bg-light u-icon-wrap--horizontal--lg rounded mb-3 mb-sm-0 mr-sm-4">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>

                                <div class="media-body">
                                    <div class="h5 font-weight-normal text-muted mb-2">Apr 2018</div>
                                    <h3 class="mb-0">Machine Learning Basics</h3>
                                    <a class="u-link u-link--primary" href="#!">Coursera</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>