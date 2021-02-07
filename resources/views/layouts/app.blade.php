<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<html lang="tr">

<head>
  @livewireStyles
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KaganTV</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <link rel="shortcut icon" href="{{ asset('assets/img/kagantv-logo-mobile.jpg') }}" type="image/x-icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">

  <!-- Theme Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
</head>

<body>
  <header class="u-header">
    <div class="u-header-left">
      <a class="u-header-logo" href="{{ route('dashboard') }}">
        <img class="u-logo-desktop" src="{{ asset('assets/img/kagantv-logo.jpg') }}" height="50" alt="KaganTV Logo">
        <img class="img-fluid u-logo-mobile" src="{{ asset('assets/img/kagantv-logo-mobile.jpg') }}" height="50" width="50" alt="KaganTV Logo">
      </a>
    </div>

    <div class="u-header-middle">
      <a class="js-sidebar-invoker u-sidebar-invoker" href="#!" data-is-close-all-except-this="true" data-target="#sidebar">
        <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
        <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
      </a>
    </div>

    <div class="u-header-right">

      <div class="dropdown mr-4">
        <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
          <span class="h3">
            <i class="far fa-bell"></i>
          </span>
          <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
          <div class="card">
            <div class="card-header d-md-flex align-items-center py-3">
              <h2 class="h4 card-header-title">Bildirimler</h2>
              <a class="ml-auto" href="#">Hepsini Temizle</a>
            </div>

            <div class="card-body p-0">
              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media align-items-center">
                    <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                      <i class="fab fa-dribbble"></i>
                    </div>

                    <div class="media-body">
                      <div class="d-md-flex align-items-center">
                        <h4 class="mb-1">Takım</h4>
                        <small class="text-muted ml-md-auto">23 Jan 2018</small>
                      </div>

                      <p class="text-truncate mb-0" style="max-width: 250px;">
                        <span class="text-primary">@htmlstream</span> just liked your post!
                      </p>
                    </div>
                  </div>
                </a>

                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media align-items-center">
                    <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                      <i class="fab fa-twitter"></i>
                    </div>

                    <div class="media-body">
                      <div class="d-md-flex align-items-center">
                        <h4 class="mb-1">Çekiliş</h4>
                        <small class="text-muted ml-md-auto">18 Jan 2018</small>
                      </div>

                      <p class="text-truncate mb-0" style="max-width: 250px;">
                        Someone mentioned you on the tweet.
                      </p>
                    </div>
                  </div>
                </a>

                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media align-items-center">
                    <div class="u-icon u-icon--sm rounded-circle bg-success text-white mr-3">
                      <i class="fab fa-spotify"></i>
                    </div>

                    <div class="media-body">
                      <div class="d-md-flex align-items-center">
                        <h4 class="mb-1">Turnuva</h4>
                        <small class="text-muted ml-md-auto">18 Jan 2018</small>
                      </div>

                      <p class="text-truncate mb-0" style="max-width: 250px;">
                        You've just recived $25 free gift card.
                      </p>
                    </div>
                  </div>
                </a>

                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media align-items-center">
                    <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                      <i class="fab fa-facebook-f"></i>
                    </div>

                    <div class="media-body">
                      <div class="d-md-flex align-items-center">
                        <h4 class="mb-1">Facebook</h4>
                        <small class="text-muted ml-md-auto">18 Jan 2018</small>
                      </div>

                      <p class="text-truncate mb-0" style="max-width: 250px;">
                        <span class="text-primary">@htmlstream</span> commented in your post.
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="card-footer py-3">
              <a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Apps 
      <div class="dropdown mr-4">
        <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
          <span class="h3">
            <i class="far fa-circle"></i>
          </span>
          <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-warning"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
          <div class="card">
            <div class="card-header d-md-flex align-items-center py-3">
              <h2 class="h4 card-header-title">Apps</h2>
              <a class="ml-auto" href="#">Learn more</a>
            </div>

            <div class="card-body py-3">
              <div class="row">
                <div class="col-4 px-2 mb-2">
                  <a class="u-apps d-flex flex-column rounded" href="#!">
                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="{{ asset('assets/img/brands-sm/img1.png') }}" alt="">
                    <span class="text-center">Assana</span>
                  </a>
                </div>

                <div class="col-4 px-2 mb-2">
                  <a class="u-apps d-flex flex-column rounded" href="#!">
                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="{{ asset('assets/img/brands-sm/img2.png') }}" alt="">
                    <span class="text-center">Slack</span>
                  </a>
                </div>

                <div class="col-4 px-2 mb-2">
                  <a class="u-apps d-flex flex-column rounded" href="#!">
                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="{{ asset('assets/img/brands-sm/img3.png') }}" alt="">
                    <span class="text-center">Cloud</span>
                  </a>
                </div>

                <div class="col-4 px-2">
                  <a class="u-apps d-flex flex-column rounded" href="#!">
                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="{{ asset('assets/img/brands-sm/img5.png') }}" alt="">
                    <span class="text-center">Facebook</span>
                  </a>
                </div>

                <div class="col-4 px-2">
                  <a class="u-apps d-flex flex-column rounded" href="#!">
                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="{{ asset('assets/img/brands-sm/img4.png') }}" alt="">
                    <span class="text-center">Spotify</span>
                  </a>
                </div>

                <div class="col-4 px-2">
                  <a class="u-apps d-flex flex-column rounded" href="#!">
                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="{{ asset('assets/img/brands-sm/img6.png') }}" alt="">
                    <span class="text-center">Twitter</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="card-footer py-3">
              <a class="btn btn-block btn-outline-primary" href="#">View all apps</a>
            </div>
          </div>
        </div>
      </div>
      End Apps -->

      <!-- User Profile -->
      <div class="dropdown ml-2">
        <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
          <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="{{ Auth::user()->profile_photo_path }}" alt="User Profile">
          <span class="text-dark d-none d-sm-inline-block">
            {{ Auth::user()->name }} <small class="fa fa-angle-down text-muted ml-1"></small>
          </span>
        </a>

        <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
          <div class="card">
            <div class="card-header py-3">
              <!-- Storage -->
              <div class="d-flex align-items-center mb-3">
                <span class="h6 text-muted text-uppercase mb-0">Profil</span>

                <div class="ml-auto text-muted">
                  <strong class="text-dark">60</strong> / 100
                </div>
              </div>

              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- End Storage -->
            </div>

            <div class="card-body">
              <ul class="list-unstyled mb-0">
                <li class="mb-4">
                  <a class="d-flex align-items-center link-dark" href="{{ route('dashboard') }}">
                    <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-2"></i></span> Profili Göster
                  </a>
                </li>
                <li class="mb-4">
                  <a class="d-flex align-items-center link-dark" href="#!">
                    <span class="h3 mb-0"><i class="far fa-laugh-wink text-muted mr-2"></i></span> Arkadaşlarını Davet Et
                  </a>
                </li>
                <li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="d-flex align-items-center link-dark" href="#!" onclick="event.preventDefault();this.closest('form').submit();">
                      <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-2"></i></span> Çıkış Yap
                    </a>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End User Profile -->
    </div>
  </header>
  <main class="u-main" role="main">
    <!-- Sidebar -->
    <aside id="sidebar" class="u-sidebar">
      <div class="u-sidebar-inner">
        <header class="u-sidebar-header">
          <a class="u-sidebar-logo" href="index.html">
            <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" width="124" alt="Stream Dashboard">
          </a>
        </header>

        <nav class="u-sidebar-nav">
          <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
            <!-- Dashboard -->
            <li class="u-sidebar-nav-menu__item">
              <a class="u-sidebar-nav-menu__link" href="{{ route('index') }}">
                <i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
                <span class="u-sidebar-nav-menu__item-title">Ana Sayfa</span>
              </a>
            </li>
            <!-- End Dashboard -->

            <hr>

            <!-- Start Takım  -->
            <li class="u-sidebar-nav-menu__item  {{ (request()->routeIs('team.create_team','team.team_request','team.joined_team')) ? 'u-sidebar-nav--opened' : '' }}">
              <a class="u-sidebar-nav-menu__link" href="#!" data-target="#Takım">
                <i class="fas fa-user-friends u-sidebar-nav-menu__item-icon"></i>
                <span class="u-sidebar-nav-menu__item-title">Takım</span>
                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                <span class="u-sidebar-nav-menu__indicator"></span>
              </a>

              <ul id="Takım" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('team.create_team') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Yeni Takım Kur </span>
                  </a>
                </li>
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('team.team_request') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Takım İstekleri ({{ $teamInvitations->count() }})</span>
                  </a>
                </li>
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('team.joined_team') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Katıldığın Takımlar</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Takım -->

            <!-- Start Cekilis -->
            <li class="u-sidebar-nav-menu__item">
              <a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu1">
                <i class="far fa-paper-plane u-sidebar-nav-menu__item-icon"></i>
                <span class="u-sidebar-nav-menu__item-title">Çekiliş</span>
                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                <span class="u-sidebar-nav-menu__indicator"></span>
              </a>

              <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                @if(auth()->user()->admin)
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('giveaway.create_giveaway') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Çekiliş Oluştur</span>
                  </a>
                </li>
                @endif
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('giveaway.attend_giveaway') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Çekilişe Katıl</span>
                  </a>
                </li>
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Geçmiş Çekilişler</span>
                  </a>
                </li>
                <!-- End Components -->
              </ul>
            </li>
            <!-- End Cekilis -->

            <!-- Start Turnuva -->
            <li class="u-sidebar-nav-menu__item">
              <a class="u-sidebar-nav-menu__link" href="#!" data-target="#baseUI">
                <i class="fas fa-gem u-sidebar-nav-menu__item-icon"></i>
                <span class="u-sidebar-nav-menu__item-title">Turnuva</span>
                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                <span class="u-sidebar-nav-menu__indicator"></span>
              </a>

              <ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                @if(auth()->user()->admin)
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('tournament.create_tournament') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Turnuva Oluştur</span>
                  </a>
                </li>
                @endif
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('tournament.attend_tournament') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Turnuvaya Katıl</span>
                  </a>
                </li>
                <!-- 
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('tournament.attended_tournament') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Katıldığın Turnuvalar</span>
                  </a>
                </li>
                -->
                <li class="u-sidebar-nav-menu__item">
                  <a class="u-sidebar-nav-menu__link" href="{{ route('tournament.all_tournament') }}">
                    <span class="u-sidebar-nav-menu__item-icon">-</span>
                    <span class="u-sidebar-nav-menu__item-title">Geçmiş Turnuvalar</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- End Turnuva -->

            <hr>

            <!-- Documentation -->
            <li class="u-sidebar-nav-menu__item">
              <a class="u-sidebar-nav-menu__link" href="">
                <span class="u-sidebar-nav-menu__item-icon">?</span>
                <span class="u-sidebar-nav-menu__item-title">Destek</span>
              </a>
            </li>
            <!-- End Documentation -->
          </ul>
        </nav>
      </div>
    </aside>

    <div class="u-content">
      {{ $slot }}
      <!-- Footer -->
      <footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted">
        <small class="text-muted ml-auto">&copy; {{ date("Y") }} <a href="https://kagantv.com">KaganTV</a>. Tüm hakları saklıdır.</small>
      </footer>
    </div>
    <!-- End Footer -->
  </main>
  <!-- Plugins -->
  <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

  <!-- Initialization  -->
  <script src="{{ asset('assets/js/sidebar-nav.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.inputmask.js') }}"></script>
</body>



</html>