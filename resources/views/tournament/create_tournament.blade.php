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
            <form action="" id="createTournamentForm" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <header class="card-header">
                                <h2 class="h3 card-header-title">Turnuva Ayarları</h2>
                            </header>

                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label for="defaultInput1">Turnuva Adı</label>
                                    <input id="defaultInput1" class="form-control form-pill" type="email" placeholder="Turnuva Adını Girin" aria-describedby="emailHelp">
                                </div>

                                <hr class="my-4">

                                <div class="form-group mb-4">
                                    <label for="inputLeftIcon1">Turnuva Türü</label>
                                    <span class="form-icon-wrapper">
                                        <select id="tournamentTypeSelect" class="form-control form-pill">
                                            <option value="" disabled selected>Turnuva Türünü Seçin</option>
                                            <option value="bireysel">Bireysel</option>
                                            <option value="ekip">Ekip</option>
                                        </select>
                                        <div id="tournamentTypeDiv"></div>
                                    </span>
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Turnuva Başlangıç Tarihi</label>
                                    <span class="form-icon-wrapper">
                                        <span class="form-icon form-icon--left">
                                            <i class="fas fa-calendar-times form-icon__item"></i>
                                        </span>
                                        <input id="example1" class="form-control form-icon-input-left form-pill">
                                    </span>
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Turnuva Ödülü</label>
                                    <span class="form-icon-wrapper">
                                        <span class="form-icon form-icon--left">
                                            <i class="fas fa-gem form-icon__item"></i>
                                        </span>
                                        <input id="inputLeftIcon1" class="form-control form-icon-input-left form-pill" type="email" placeholder="Turnuva Ödülünü Yazın" aria-describedby="emailHelp">
                                    </span>
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Turnuva Kuralları</label>
                                    <span class="form-icon-wrapper">
                                        <textarea id="in" name="in" class="form-control form-pill" placeholder="    Turnuva kurallarını yazın!" rows="4"></textarea>
                                    </span>
                                </div>
                                <center><button id="" name="" type="sumbit" class="btn btn-success">Turnuvayı Oluştur</button></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <header class="card-header">
                                <h2 class="h3 card-header-title">Turnuva Resmi</h2>
                            </header>

                            <div class="card-body">
                                Buradan turnuva resmi yüklenecek!!!
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            $('#tournamentTypeSelect').change(function() {
                opt = $(this).val();
                if (opt == "bireysel") {
                    $('#tournamentTypeDiv').html('<br/><input for="defaultInput1" placeholder="Katılacak Oyuncu Sayısı" class="form-control form-pill"></input>');
                } else if (opt == "ekip") {
                    $('#tournamentTypeDiv').html('<br/><input for="defaultInput1" placeholder="Katılacak Ekip Sayısı" class="form-control form-pill"></input><br/><input for="defaultInput1" placeholder="Ekipteki Üye Sayısı" class="form-control form-pill"></input>');
                }
            });

            $(function() {
                $("#createTournamentForm").validate({
                    rules: {
                        team_name: {
                            required: true,
                            maxlength: 20
                        },
                        team_tag: {
                            required: true,
                            maxlength: 7
                        }
                    },
                    messages: {
                        team_name: {
                            required: "Klan adı boş bırakılamaz.",
                            maxlength: "Klan adı maximum 20 harf olmak zorundadır."
                        },
                        team_tag: {
                            required: "Klan kısaltması boş bırakılamaz.",
                            maxlength: "Klan kısaltması maximum 7 harf olmak zorundadır."
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });

            $(document).ready(function() {
                $('#example1').inputmask("99-99-2099", {
                    "placeholder": "dd-mm-yyyy"
                })
            });
        </script>
    </x-slot>
</x-app-layout>