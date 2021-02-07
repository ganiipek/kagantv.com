<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Geçmiş Turnuvalar</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Turnuvular</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Geçmiş Turnuvular</li>
                    </ol>
                </nav>
            </div>

            <div class="card">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Turnuvular</h2>
                </header>

                <div class="card-body">
                    <!-- Table -->
                    <div class="table-responsive">
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
                                    <th scope="col">Kazanan</th>
                                    @if(auth()->user()->admin)
                                    <th class="text-center" scope="col">İşlem</th>
                                    @endif
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
                                        {{ $tournament->tournamentParticipants->where('approval',1)->count() }} Ekip
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
                                        @if($tournament->winner_id)
                                        @if($tournament->type == 'bireysel')
                                        {{ $all_users->where('id',$tournament->winner_id)->first()->name }}
                                        @elseif($tournament->type == 'ekip')
                                        {{ $all_teams->where('id',$tournament->winner_id)->first()->name }}
                                        @endif
                                        @endif
                                    </td>
                                    @if(auth()->user()->admin)
                                    <td class="text-center">
                                        <a id="actions1Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                            <i class="fa fa-sliders-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" data-toggle="modal" href="#detailsTournamentModal_{{ $tournament->id }}">
                                                        <i class="fas fa-question-circle"></i>&nbsp;Ayrıntılar
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
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
                                                <p> {{ $tournament->rules }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" id="{{ $tournament->id }}" name="joinTournamentButton" class="btn btn-success">Katıl</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $tournaments->onEachSide(3)->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>