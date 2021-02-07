<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Turnuvaya Katıl</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Turnuvalar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Turnuvaya Katıl</li>
                    </ol>
                </nav>
            </div>

            <div class="card">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Turnuvalar</h2>
                </header>
                <div id="tournamentTableErrorInfo"></div>
                <div class="card-body">
                    <!-- Table -->
                    <div id="tournamentTableInfo" class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">İsim</th>
                                    <th scope="col">Düzenleyen</th>
                                    <th scope="col">Tür</th>
                                    <th scope="col">Oyuncu Bilgisi</th>
                                    <th scope="col">Katılımcı Sayısı</th>
                                    <th scope="col">Başlama Tarihi</th>
                                    <th scope="col">Başvuru Durumu</th>
                                    <th class="text-center" scope="col">İşlem</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($tournaments as $tournament)
                                <tr>
                                    <td>{{ $tournament->id }}</td>
                                    <td>{{ $tournament->name }}</td>
                                    <td>{{ $tournament->user->name }}</td>
                                    <td>{{ $tournament->type }}</td>
                                    <td>
                                        @if($tournament->type == 'bireysel')
                                        {{ $tournament->player_count }} Oyuncu
                                        @elseif($tournament->type == 'ekip')
                                        {{ $tournament->team_player_count }} Kişilik / {{ $tournament->team_count }} Ekip
                                        @endif
                                    </td>
                                    <td>
                                        @if($tournament->type == 'bireysel')
                                        {{ $tournament->tournamentParticipants->where('approval',1)->count() }} Oyuncu
                                        @elseif($tournament->type == 'ekip')
                                        {{ $tournament->tournamentParticipants->where('approval',1)->groupBy('team_id')->count() }} Ekip
                                        @endif
                                    </td>
                                    <td>
                                        @if(\Carbon\Carbon::createFromTimeString($tournament->starting_date, 'Europe/Istanbul')->timestamp > time())
                                        <p style='color: green'>{{ $tournament->starting_date }}</p>
                                        @else
                                        <p style='color: red'>{{ $tournament->starting_date }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if($tournament->tournamentParticipants->count())
                                        @if($tournament->tournamentParticipants->first()->approval == 0)
                                        <p style='color:orange'>Onay bekleniyor</p>
                                        @elseif($tournament->tournamentParticipants->first()->approval == 1)
                                        <p style='color:green'>Onaylandı</p>
                                        @elseif($tournament->tournamentParticipants->first()->approval == 2)
                                        <p style='color:red'>Reddedildi</p>
                                        @endif
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a id="actions1Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                            <i class="fa fa-sliders-h"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
                                            <ul class="list-unstyled mb-0">
                                                @if(auth()->user()->admin)
                                                @if($tournament->active == 1)
                                                <li>
                                                    <a id="{{ $tournament->id }}" class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#startTournamentModal_{{ $tournament->id }}">
                                                        <i class="fa fa-check mr-2"></i> Turnuvayı Başlat
                                                    </a>
                                                </li>
                                                @elseif($tournament->active == 2)
                                                <li>
                                                    <a id="{{ $tournament->id }}" class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#startTournamentModal_{{ $tournament->id }}">
                                                        <i class="fa fa-check mr-2"></i> Turnuvayı Bitir
                                                    </a>
                                                </li>
                                                @endif
                                                <li>
                                                    <a id="{{ $tournament->id }}" class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#applicantsTournamentModal_{{ $tournament->id }}">
                                                        <i class="fas fa-list mr-2"></i> Başvuranlar
                                                    </a>
                                                </li>
                                                @endif
                                                @if(\Carbon\Carbon::createFromTimeString($tournament->starting_date, 'Europe/Istanbul')->timestamp > time())
                                                @if($tournament->tournamentParticipants->where('user_id', auth()->user()->id)->where('tournament_id',$tournament->id)->count() )
                                                <li>
                                                    @if($tournament->type == 'bireysel')
                                                    <a id="{{ $tournament->id }}" name="leaveTournamentButton" class="d-flex align-items-center link-muted py-2 px-3" href="#">
                                                        <i class="fa fa-minus mr-2"></i> Ayrıl
                                                    </a>
                                                    @elseif($tournament->type == 'ekip' && auth()->user()->id == $tournament->tournamentParticipants->where('user_id', auth()->user()->id)->where('tournament_id',$tournament->id)->first()->team->user_id)
                                                    <a id="{{ $tournament->id }}" name="leaveTournamentButton" class="d-flex align-items-center link-muted py-2 px-3" href="#">
                                                        <i class="fa fa-minus mr-2"></i> Ayrıl
                                                    </a>
                                                    @endif
                                                </li>
                                                @else
                                                <li>
                                                    @if($tournament->type == 'bireysel')
                                                    <a id="{{ $tournament->id }}" name="joinTournamentButton" class="d-flex align-items-center link-muted py-2 px-3" href="#">
                                                        <i class="fa fa-plus mr-2"></i> Katıl
                                                    </a>
                                                    @elseif($tournament->type == 'ekip')
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#joinWithTeamsTournamentModal_{{ $tournament->id }}">
                                                        <i class="fa fa-plus mr-2"></i> Katıl
                                                    </a>
                                                    @endif
                                                </li>
                                                @endif
                                                @endif
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#detailsTournamentModal_{{ $tournament->id }}">
                                                        <i class="fas fa-question-circle"></i>&nbsp;Ayrıntılar
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#reportTournamentModal_{{ $tournament->id }}">
                                                        <i class="fa fa-info-circle"></i>&nbsp;Şikayet Et
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="startTournamentModal_{{ $tournament->id }}" tabindex="-1" role="dialog" aria-labelledby="startTournamentModalTitle_{{ $tournament->id }}" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="startTournamentModalTitle_{{ $tournament->id }}">Turnuvayı Başlat</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>{{ $tournament->name }}</strong> adlı turnuvayı başlatmak için ODA ID 'sini gir':</p>
                                                <div class="form-group">
                                                    <span class="form-icon-wrapper">
                                                        <span class="form-icon form-icon--left">
                                                            <i class="fa fa-info-circle form-icon__item"></i>
                                                        </span>
                                                        <input name="tournament_report" class="form-control form-icon-input-left form-pill" placeholder="Oda ID">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal Et</button>
                                                <a type="button" class="btn btn-danger" href="">Turnavayı Başlat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="applicantsTournamentModal_{{ $tournament->id }}" tabindex="-1" role="dialog" aria-labelledby="applicantsTournamentModalTitle_{{ $tournament->id }}" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="applicantsTournamentModalTitle_{{ $tournament->id }}">Başvuranlar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="applicantsTournamentInfo_{{ $tournament->id }}"></div>
                                                <div id="applicantsTournamentDiv_{{ $tournament->id }}" class="container">
                                                    @if($tournament->type == 'bireysel')
                                                    @foreach($tournament->tournamentParticipants->where('approval',0) as $tournamentParticipant)
                                                    <div class="row" style="padding-top:5px">
                                                        <div class="col-sm-4">
                                                            {{ $tournamentParticipant->user->name }}
                                                        </div>
                                                        <div class="col-sm-4">
                                                            {{ $tournamentParticipant->user->pubgmobile_id }}
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <button name="acceptTournamentButton" data-tournament_id="{{ $tournament->id }}" data-user_id="{{ $tournamentParticipant->user->id }}" data-islem="accept" type="button" class="btn btn-success"><i class="far fa-check-circle"></i></button>
                                                            <button name="rejectTournamentButton" data-tournament_id="{{ $tournament->id }}" data-user_id="{{ $tournamentParticipant->user->id }}" data-islem="reject" type="button" class="btn btn-danger"><i class="far fa-times-circle"></i></button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    @endforeach
                                                    @elseif($tournament->type == 'ekip')
                                                    @foreach($tournament->tournamentParticipants->where('approval',0)->groupBy('team_id') as $tournamentParticipant)
                                                    <div class="row" style="padding-top:5px">
                                                        <div class="col-sm-4">
                                                            {{ $tournamentParticipant->first()->team->name }}
                                                        </div>
                                                        <div class="col-sm-4">
                                                            @foreach($tournamentParticipant->first()->team->teamUsers as $teamUser)
                                                            {{ $teamUser->user->name}} <br />
                                                            @endforeach
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <button name="acceptTournamentButton" data-tournament_id="{{ $tournament->id }}" data-team_id="{{ $tournamentParticipant->first()->team->id }}" data-islem="accept" type="button" class="btn btn-success"><i class="far fa-check-circle"></i></button>
                                                            <button name="rejectTournamentButton" data-tournament_id="{{ $tournament->id }}" data-team_id="{{ $tournamentParticipant->first()->team->id }}" data-islem="reject" type="button" class="btn btn-danger"><i class="far fa-times-circle"></i></button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="detailsTournamentModal_{{ $tournament->id }}" tabindex="-1" role="dialog" aria-labelledby="detailsTournamentModalTitle_{{ $tournament->id }}" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detailsTournamentModalTitle_{{ $tournament->id }}">Turnuvayı Ayrıntıları</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4><u>Turnuva No:</u></h4>
                                                <p> {{ $tournament->id }}</p>
                                                <h4><u>Düzenleyen:</u></h4>
                                                <p> {{ $tournament->user->name }}</p>
                                                @if(\Carbon\Carbon::createFromTimeString($tournament->starting_date, 'Europe/Istanbul')->timestamp > time())
                                                <h4><u>Başlama Tarihi:</u></h4>
                                                <p style='color: green'> {{ $tournament->starting_date }}</p>
                                                @else
                                                <h4><u>Başlama Tarihi:</u></h4>
                                                <p style='color: red'> {{ $tournament->starting_date }}</p>
                                                @endif
                                                <h4><u>Adı:</u></h4>
                                                <p> {{ $tournament->name }}</p>
                                                <h4><u>Tür:</u></h4>
                                                <p> {{ $tournament->type }}</p>
                                                <h4><u>Oyuncu Sayısı:</u></h4>
                                                <p>
                                                    @if($tournament->type == 'bireysel')
                                                    {{ $tournament->player_count }} Oyuncu
                                                    @elseif($tournament->type == 'ekip')
                                                    {{ $tournament->team_player_count }} Kişilik / {{ $tournament->team_count }} Ekip
                                                    @endif
                                                </p>
                                                <h4><u>Ödül:</u></h4>
                                                <p> {{ $tournament->award }}</p>
                                                <h4><u>Kurallar:</u></h4>
                                                <p> {{ trim($tournament->rules) }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                @if($tournament->type == 'bireysel')
                                                @if($tournament->tournamentParticipants->where('user_id', auth()->user()->id)->where('tournament_id',$tournament->id)->count() )
                                                <a id="{{ $tournament->id }}" name="leaveTournamentButton" type="button" class="btn btn-danger" href="#">
                                                    <i class="fa fa-minus mr-2"></i> Ayrıl
                                                </a>
                                                @else
                                                <a id="{{ $tournament->id }}" name="joinTournamentButton" type="button" class="btn btn-success" href="#">
                                                    <i class="fa fa-plus mr-2"></i> Katıl
                                                </a>
                                                @endif
                                                @elseif($tournament->type == 'ekip')
                                                @if($tournament->tournamentParticipants->where('user_id', auth()->user()->id)->where('tournament_id',$tournament->id)->count())
                                                @if(auth()->user()->id == $tournament->tournamentParticipants->where('user_id', auth()->user()->id)->where('tournament_id',$tournament->id)->first()->team->user_id)
                                                <a id="{{ $tournament->id }}" name="leaveTournamentButton" type="button" class="btn btn-danger" href="#">
                                                    <i class="fa fa-minus mr-2"></i> Ayrıl
                                                </a>
                                                @endif
                                                @else
                                                <a type="button" class="btn btn-success" data-toggle="modal" href="#joinWithTeamsTournamentModal_{{ $tournament->id }}">
                                                    <i class="fa fa-plus mr-2"></i> Katıl
                                                </a>
                                                @endif
                                                @endif
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="reportTournamentModal_{{ $tournament->id }}" tabindex="-1" role="dialog" aria-labelledby="reportTournamentModalTitle_{{ $tournament->id }}" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="reportTournamentModalTitle_{{ $tournament->id }}">Turnuvayı Şikayet Et</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>{{ $tournament->name }}</strong> adlı turnuvayı neden şikayet ediyorsun? Lütfen açıklayın:</p>
                                                <div class="form-group">
                                                    <span class="form-icon-wrapper">
                                                        <span class="form-icon form-icon--left">
                                                            <i class="fa fa-info-circle form-icon__item"></i>
                                                        </span>
                                                        <input name="tournament_report" class="form-control form-icon-input-left form-pill" placeholder="Şikayetinizi yazın.">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal Et</button>
                                                <a type="button" class="btn btn-danger" href="">Şikayet Et</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="joinWithTeamsTournamentModal_{{ $tournament->id }}" tabindex="-1" role="dialog" aria-labelledby="joinWithTeamsTournamentModalTitle_{{ $tournament->id }}" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="joinWithTeamsTournamentModalTitle_{{ $tournament->id }}">Turnuvaya Katıl</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>{{ $tournament->name }}</strong> turnuvasına lider olduğun sadece bir takımla katılabilirsin. Aşağıda sahip olduğun takımları görebilirsin.</p>
                                                <select id="joinTeamSelect_{{ $tournament->id }}" name="joinTeamSelect" class="form-control form-pill">
                                                    <option value="" disabled selected>Ekibini Seç</option>
                                                    @foreach($user->teams as $team)
                                                    <option value="{{ $team->id }}" data="$team->name">{{ $team->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if(isset($team))
                                                <div id="selectTeam_{{ $team->id }}"></div>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <a type="button" class="btn btn-success" id="{{ $tournament->id }}" name="joinTournamentButton">Katıl</a>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">İptal Et</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                    <div class="d-flex justify-content-center">
                        {{ $tournaments->onEachSide(3)->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                $('body').on('change', 'select[name=joinTeamSelect]', function(e) {
                    team_id = $(this).val();
                    console.log("deneme: " + team_id)
                    $('.selectTeam_' + team_id).html('<br /><select id="" name="" class="form-control form-pill"><option value="">deneme2</option></select>')

                });

                $('body').on('click', 'button[name=joinTournamentButton], a[name=joinTournamentButton]', function(e) {
                    var tournament_id = this.id;
                    var user_id = "{{ auth()->user()->id }}";
                    var team_id = $("select[id=joinTeamSelect_" + tournament_id).val();
                    $.ajax({
                        type: "post",
                        url: '{{ action("App\Http\Controllers\TournamentParticipantController@joinTournament") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            tournament_id: tournament_id,
                            user_id: user_id,
                            team_id: team_id
                        },
                        success: function(response) {
                            console.log(response)
                            $("#tournamentTableInfo").load(window.location.href + " #tournamentTableInfo");
                            if (response.error) {
                                $('#tournamentTableErrorInfo').html('<div class="alert alert-soft-danger fade show" role="alert"><i class="fa fa-minus-circle alert-icon mr-3"></i><span>' + response.message + '</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            } else {
                                $('#tournamentTableErrorInfo').html('<div class="alert alert-soft-success fade show" role="alert"><i class="fa fa-check-circle alert-icon mr-3"></i><span>' + response.message + '</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            }
                        },
                        error: function($error) {
                            console.log($error.responseText)
                            $('#tournamentTableErrorInfo').html('<div class="alert alert-soft-warning fade show" role="alert"><i class="fa fa-exclamation-circle alert-icon mr-3"></i><span>Uyarı! Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene.</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            //alert('Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene!')
                        }
                    });
                })

                $('body').on('click', 'button[name=leaveTournamentButton], a[name=leaveTournamentButton]', function(e) {
                    var tournament_id = this.id;
                    var user_id = "{{ auth()->user()->id }}";
                    $.ajax({
                        type: "post",
                        url: '{{ action("App\Http\Controllers\TournamentParticipantController@leaveTournament") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            tournament_id: tournament_id,
                            user_id: user_id
                        },
                        success: function(response) {
                            console.log(response)
                            $("#tournamentTableInfo").load(window.location.href + " #tournamentTableInfo");
                            if (response.error) {
                                $('#tournamentTableErrorInfo').html('<div class="alert alert-soft-danger fade show" role="alert"><i class="fa fa-minus-circle alert-icon mr-3"></i><span>' + response.message + '</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            } else {
                                $('#tournamentTableErrorInfo').html('<div class="alert alert-soft-success fade show" role="alert"><i class="fa fa-check-circle alert-icon mr-3"></i><span>' + response.message + '</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            }
                        },
                        error: function($error) {
                            console.log($error.responseText)
                            $('#tournamentTableErrorInfo').html('<div class="alert alert-soft-warning fade show" role="alert"><i class="fa fa-exclamation-circle alert-icon mr-3"></i><span>Uyarı! Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene.</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            //alert('Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene!')
                        }
                    });
                })

                $('body').on('click', 'button[name=acceptTournamentButton], button[name=rejectTournamentButton]', function(e) {
                    var tournament_id = $(this).data('tournament_id')
                    var user_id = $(this).data('user_id')
                    var team_id = $(this).data('team_id')
                    var islem = $(this).data('islem')
                    $.ajax({
                        type: "post",
                        url: '{{ action("App\Http\Controllers\TournamentParticipantController@acceptRejectTournament") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            tournament_id: tournament_id,
                            user_id: user_id,
                            team_id: team_id,
                            islem: islem
                        },
                        success: function(response) {
                            console.log(response)
                            $("#applicantsTournamentDiv_" + tournament_id).load(window.location.href + " #applicantsTournamentDiv_" + tournament_id);
                            if (response.error) {
                                $('#applicantsTournamentInfo_' + tournament_id).html('<div class="alert alert-soft-danger fade show" role="alert"><i class="fa fa-minus-circle alert-icon mr-3"></i><span>' + response.message + '</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            } else {
                                $('#applicantsTournamentInfo_' + tournament_id).html('<div class="alert alert-soft-success fade show" role="alert"><i class="fa fa-check-circle alert-icon mr-3"></i><span>' + response.message + '</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            }
                        },
                        error: function($error) {
                            console.log($error.responseText)
                            $('#applicantsTournamentDiv_').html('<div class="alert alert-soft-warning fade show" role="alert"><i class="fa fa-exclamation-circle alert-icon mr-3"></i><span>Uyarı! Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene.</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                            //alert('Beklenmeyen bir hata oluştu. Lütfen daha sonra tekrar dene!')
                        }
                    });
                })
            })
        </script>
    </x-slot>
</x-app-layout>