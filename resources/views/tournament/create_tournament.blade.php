<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Turnuva Oluştur</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Turnuva</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Turnuva Oluştur</li>
                    </ol>
                </nav>
            </div>
            <form action="{{ action('App\Http\Controllers\TournamentController@createTournament') }}" id="createTournamentForm" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <header class="card-header">
                                <h2 class="h3 card-header-title">Turnuva Ayarları</h2>
                            </header>

                            <div class="card-body">
                                @if (session('error_code') == "0")
                                <p class='login-box-msg' style='color: green'>{{ session('error_description') }}</p>
                                @elseif (session('error_code') == "1")
                                <p class='login-box-msg' style='color: red'>{{ session('error_description') }}</p>
                                @endif
                                {{ session()->forget(['error_code', 'error_description']) }}
                                <div class="form-group mb-4">
                                    <label for="defaultInput1">Turnuva Adı</label>
                                    <input id="tournament_name" name="tournament_name" class="form-control form-pill" placeholder="Turnuva Adını Girin">
                                </div>

                                <hr class="my-4">

                                <div class="form-group mb-4">
                                    <label for="inputLeftIcon1">Turnuva Türü</label>
                                    <span class="form-icon-wrapper">
                                        <select id="tournament_type" name="tournament_type" class="form-control form-pill">
                                            <option value="" disabled selected>Turnuva Türünü Seçin</option>
                                            <option value="bireysel">Bireysel</option>
                                            <option value="ekip">Ekip</option>
                                        </select>
                                        <div id="tournamentTypeDiv"></div>
                                    </span>
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Turnuva Başlangıç Tarihi (Gün-Ay-Yıl Saat:Dakika)</label>
                                    <span class="form-icon-wrapper">
                                        <span class="form-icon form-icon--left">
                                            <i class="fas fa-calendar-times form-icon__item"></i>
                                        </span>
                                        <input id="tournament_start_time" name="tournament_start_time" class="form-control form-icon-input-left form-pill">
                                    </span>
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Turnuva Ödülü</label>
                                    <span class="form-icon-wrapper">
                                        <span class="form-icon form-icon--left">
                                            <i class="fas fa-gem form-icon__item"></i>
                                        </span>
                                        <input id="tournament_award" name="tournament_award" class="form-control form-icon-input-left form-pill" placeholder="Turnuva Ödülünü Yazın">
                                    </span>
                                </div>

                                <hr class="my-4">


                                <div class="form-group">
                                    <label for="inputRightIcon1">Turnuva Kuralları</label>
                                    <span class="form-icon-wrapper">
                                        <textarea id="tournament_rules" name="tournament_rules" class="form-control" placeholder="Turnuva kurallarını yazın!" rows="4"></textarea>
                                    </span>
                                </div>
                                <center><button id="" name="" type="sumbit" class="btn btn-success">Turnuvayı Oluştur</button></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <header class="card-header">
                                <h2 class="h3 card-header-title">Turnuva Düzenleme Kuralları</h2>
                            </header>

                            <div class="card-body">
                                Buraya turnuva oluşturma kuralları yazılacak!!!
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            $('#tournament_type').change(function() {
                opt = $(this).val();
                if (opt == "bireysel") {
                    $('#tournamentTypeDiv').html('<br/><input id="tournament_player_count" name="tournament_player_count" placeholder="Katılacak Oyuncu Sayısı" class="form-control form-pill"></input>');
                } else if (opt == "ekip") {
                    $('#tournamentTypeDiv').html('<br/><input id="tournament_team_count" name="tournament_team_count" placeholder="Katılacak Ekip Sayısı" class="form-control form-pill"></input><br/><input id="tournament_team_player_count" name="tournament_team_player_count" placeholder="Ekipteki Üye Sayısı" class="form-control form-pill"></input>');
                }
            });

            $(function() {
                $("#createTournamentForm").validate({
                    errorClass: 'is-invalid',
                    rules: {
                        tournament_name: {
                            required: true,
                            maxlength: 60
                        },
                        tournament_type: {
                            required: true,
                        },
                        tournament_start_time: {
                            required: true,
                        },
                        tournament_award: {
                            required: true,
                        },
                        tournament_player_count: {
                            required: true,
                            digits: true
                        },
                        tournament_team_count: {
                            required: true,
                            digits: true
                        },
                        tournament_team_player_count: {
                            required: true,
                            digits: true
                        },
                    },
                    messages: {
                        tournament_name: {
                            required: "Turnuva adı boş bırakılamaz.",
                            maxlength: "Turnuva adı maximum 60 harf olmak zorundadır."
                        },
                        tournament_type: {
                            required: "Turnuva türünü belirtin.",
                        },
                        tournament_start_time: {
                            required: "Turnuvanın ne zaman başlayacağını yazın.",
                        },
                        tournament_award: {
                            required: "Ödül yoksa 'Ödülsüz' yaz.",
                        },
                        tournament_player_count: {
                            required: "Boş bırakılamaz",
                            digits: "Lütfen sadece sayi giriniz."
                        },
                        tournament_team_count: {
                            required: "Boş bırakılamaz",
                            digits: "Lütfen sadece sayi giriniz."
                        },
                        tournament_team_player_count: {
                            required: "Boş bırakılamaz",
                            digits: "Lütfen sadece sayi giriniz."
                        },
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });

            $(document).ready(function() {
                $('#tournament_start_time').inputmask("99-99-9999 99:99", {
                    "placeholder": "dd-mm-yyyy hh:dd"
                })
            });
        </script>
    </x-slot>
</x-app-layout>