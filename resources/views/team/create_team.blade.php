<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Yeni Takım Kur</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Takım</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Yeni Takım Kur</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <form action="{{ action('App\Http\Controllers\TeamController@createTeam') }}" name="registration" id="registration" method="POST">
                        @csrf
                        <div class="card">
                            <header class="card-header">
                                <h2 class="h3 card-header-title">Takım Oluşturma</h2>
                            </header>
                            <div class="card-body">
                                @if (session('error_code') == "0")
                                <p class='login-box-msg' style='color: green'>{{ session('error_description') }}</p>
                                @elseif (session('error_code') == "1")
                                <p class='login-box-msg' style='color: red'>{{ session('error_description') }}</p>
                                @endif
                                {{ session()->forget(['error_code', 'error_description']) }}
                                <div class="form-group mb-4">
                                    <label for="team_name">Takım Adı:</label>
                                    <input id="team_name" name="team_name" class="form-control form-pill" type="text" placeholder="Takım adını yazın..." aria-describedby="emailHelp">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="team_tag">Takım Kısaltması (TAG):</label>
                                    <input id="team_tag" name="team_tag" class="form-control form-pill" type="text" placeholder="Takım kısaltmasını yazın..." aria-describedby="emailHelp">
                                </div>
                                <button type="sumbit" class="btn btn-success">Oluştur</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Kurallar</h2>
                        </header>

                        <div class="card-body">
                            Burada takım kurma kuralları yazacak!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $("#registration").validate({
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
        </script>
    </x-slot>
</x-app-layout>