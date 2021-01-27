<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Katıldığın Takımlar</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Takım</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Katıldığın Takımlar</li>
                    </ol>
                </nav>
            </div>

            <div class="card">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Takımlar</h2>
                </header>

                <div class="card-body">
                    @if (session('error_code') == "0")
                    <p class='login-box-msg' style='color: green'>{{ session('error_description') }}</p>
                    @elseif (session('error_code') == "1")
                    <p class='login-box-msg' style='color: red'>{{ session('error_description') }}</p>
                    @endif
                    {{ session()->forget(['error_code', 'error_description']) }}
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Takım ID</th>
                                    <th scope="col">İsim</th>
                                    <th scope="col">TAG</th>
                                    <th scope="col">Lider</th>
                                    <th scope="col">Üye Sayısı</th>
                                    <th class="text-center" scope="col">İşlem</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($teamUsers as $teamUser)
                                <tr>
                                    <td>{{ $teamUser->team->id }}</td>
                                    <td>{{ $teamUser->team->name }}</td>
                                    <td>{{ $teamUser->team->tag }}</td>
                                    <td>{{ $teamUser->team->user->name }}</td>
                                    <td>
                                        <div class="col-md-3 mb-4 mb-md-0">
                                            <a data-html="true" class="link-muted d-block text-center" href="#!" title="@foreach($teamUser->team->teamUsers as $team_user) {{ $team_user->user->name }} <br /> @endforeach" data-toggle="tooltip" data-placement="right">
                                                <span class="font-weight-semibold">{{ $teamUser->team->teamUsers->count() }}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a id="actions1Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                            <i class="fa fa-sliders-h"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
                                            <ul class="list-unstyled mb-0">
                                                @if($teamUser->team->user_id == auth()->user()->id)
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#editTeamModal_{{ $teamUser->team->id }}">
                                                        <i class="fa fa-edit mr-2"></i> Düzenle
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#addNewUserModal_{{ $teamUser->team->id }}">
                                                        <i class="fa fa-plus mr-2"></i> Üye Yönetimi
                                                    </a>

                                                </li>
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#deleteTeamModal_{{ $teamUser->team->id }}">
                                                        <i class="fa fa-minus mr-2"></i> Takımı Sil
                                                    </a>
                                                </li>
                                                @else
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#leaveTeamModal_{{ $teamUser->team->id }}">
                                                        <i class="fa fa-sign-out-alt mr-2"></i> Ayrıl
                                                    </a>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </td>
                                    <div class="modal fade" id="editTeamModal_{{ $teamUser->team->id }}" tabindex="-1" role="dialog" aria-labelledby="editTeamModalTitle_{{ $teamUser->team->id }}" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <form action="{{ action('App\Http\Controllers\TeamController@editTeam',['team_id'=>$teamUser->team->id]) }}" name="registration_{{ $teamUser->team->id }}" id="registration_{{ $teamUser->team->id }}" method="POST">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editTeamModalTitle_{{ $teamUser->team->id }}">Takımı Düzenle</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @csrf
                                                        <div class="card">
                                                            <header class="card-header">
                                                                <h2 class="h3 card-header-title">Takım ID: {{ $teamUser->team->id }}</h2>
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
                                                                    <input id="team_name" name="team_name" class="form-control form-pill" type="text" value="{{ $teamUser->team->name }}" aria-describedby="emailHelp">
                                                                </div>

                                                                <div class="form-group mb-4">
                                                                    <label for="team_tag">Takım Kısaltması (TAG):</label>
                                                                    <input id="team_tag" name="team_tag" class="form-control form-pill" type="text" value="{{ $teamUser->team->tag }}" aria-describedby="emailHelp">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal Et</button>
                                                        <button type="sumbit" class="btn btn-primary">Kaydet</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="addNewUserModal_{{ $teamUser->team->id }}" tabindex="-1" role="dialog" aria-labelledby="addNewUserModalTitle_{{ $teamUser->team->id }}" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addNewUserModalTitle_{{ $teamUser->team->id }}">Üye Yönetimi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" name="registration" id="registration" method="POST">
                                                        @csrf
                                                        <div class="card">
                                                            <header class="card-header">
                                                                <h2 class="h3 card-header-title">Yeni Üye Ekle</h2>
                                                            </header>
                                                            <div class="card-body">
                                                                <div id="addNewUser_{{ $teamUser->team->id }}"></div>
                                                                <div class="form-group mb-4">
                                                                    <label for="team_tag">Oyuncu Bul:</label>
                                                                    <input id="findUser_{{ $teamUser->team->id }}" name="findUser_{{ $teamUser->team->id }}" list="brow" class="form-control form-pill">
                                                                    <datalist id="brow">
                                                                        @foreach($users as $user)
                                                                        <option value="{{ $user->id }}">{{ $user->name }} (PUBG ID: {{ $user->pubgmobile_id }})</option>
                                                                        @endforeach
                                                                    </datalist>
                                                                </div>

                                                                <div class="form-group mb-4">
                                                                    <label for="team_name">Davet Metni:</label>
                                                                    <textarea id="invitationText_{{ $teamUser->team->id }}" name="invitationText_{{ $teamUser->team->id }}" class="form-control form-pill" placeholder="Davet metnini yazın!"></textarea>
                                                                </div>
                                                                <center><button id="{{ $teamUser->team->id }}" name="addNewUserButton" type="button" class="btn btn-success">Davet Gönder</button></center>

                                                            </div>
                                                        </div>
                                                    </form>
                                                    <hr>
                                                    <div class="card">
                                                        <header class="card-header">
                                                            <h2 class="h3 card-header-title">Mevcut Üyeler</h2>
                                                        </header>
                                                        <div class="card-body">
                                                        <div id="kickUser_{{ $teamUser->team->id }}"></div>
                                                            <form>
                                                                <div id="mevcutUyeler_{{ $teamUser->team->id }}" class="container">
                                                                    @foreach($teamUser->team->teamUsers as $teamUser2)
                                                                    <div class="row" style="padding-top:5px">
                                                                        <div class="col-sm-4">
                                                                            {{ $teamUser2->user->name }}
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            {{ $teamUser2->user->pubgmobile_id }}
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <button id="{{ $teamUser2->id }}" name="deleteUserButton" type="button" class="btn btn-danger" {{ $teamUser2->user->id == $teamUser->team->user_id ? "disabled":"" }} ><i class="fa fa-trash"></i> Takımdan At</button>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    @endforeach
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="deleteTeamModal_{{ $teamUser->team->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteTeamModalTitle_{{ $teamUser->team->id }}" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteTeamModalTitle_{{ $teamUser->team->id }}">Takımı Sil</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>{{ $teamUser->team->name }}</strong> adlı takımı silmek istediğiniz emin misiniz?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal Et</button>
                                                    <a type="button" class="btn btn-danger" href="{{ action('App\Http\Controllers\TeamController@deleteTeam',['team_id'=>$teamUser->team->id]) }} }}">Takımı Sil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="leaveTeamModal_{{ $teamUser->team->id }}" tabindex="-1" role="dialog" aria-labelledby="leaveTeamModal_Title_{{ $teamUser->team->id }}" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="leaveTeamModal_Title_{{ $teamUser->team->id }}">Takımdan Ayrıl</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>{{ $teamUser->team->name }}</strong> adlı takımdan ayrılmak istediğiniz emin misiniz?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal Et</button>
                                                    <a type="button" class="btn btn-danger" href="{{ action('App\Http\Controllers\TeamController@leaveTeam',['team_id'=>$teamUser->team->id]) }}">Takımdan Ayrıl</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $('body').on('click', 'button[name=addNewUserButton]', function(e) {
                    var team_id = this.id;
                    var user_id = $("input[id=findUser_" + team_id + "]").val()
                    var invitation_text = $("textarea[id=invitationText_" + team_id + "]").val()
                    $.ajax({
                        type: "post",
                        url: '{{ action("App\Http\Controllers\TeamController@sendInvitation") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            team_id: team_id,
                            user_id: user_id,
                            invitation_text: invitation_text
                        },
                        success: function(response) {
                            if (response.error) {
                                $('#addNewUser_' + team_id).html("<p class='login-box-msg' style='color: red'>" + response.message + "</p>");
                            } else {
                                $('#addNewUser_' + team_id).html("<p class='login-box-msg' style='color: green'><strong>" + response.user.name + " </strong>" + response.message + "</p>");
                            }
                        },
                        error: function() {
                            alert('Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene!')
                        }
                    });
                })

                $('body').on('click', 'button[name=deleteUserButton]', function(e) {
                    var teamUser_id = this.id;
                    console.log(teamUser_id)
                    $.ajax({
                        type: "post",
                        url: '{{ action("App\Http\Controllers\TeamController@kickUser") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            teamUser_id: teamUser_id
                        },
                        success: function(response) {
                            console.log(response)
                            if (response.error) {
                                $('#kickUser_' + response.teamUser.team_id).html("<p class='login-box-msg' style='color: red'>" + response.message + "</p>");
                            } else {
                                $('#kickUser_' + response.teamUser.team_id).html("<p class='login-box-msg' style='color: green'><strong>" + response.teamUser.user.name + " </strong>" + response.message + "</p>");
                                $("#mevcutUyeler_"+ response.teamUser.team_id).load(window.location.href + " #mevcutUyeler_"+ response.teamUser.team_id );
                            }
                        },
                        error: function() {
                            alert('Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene!')
                        }
                    });
                })
            })
        </script>
    </x-slot>
</x-app-layout>