<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Takım Davetleri</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Takım</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Takım Davetleri</li>
                    </ol>
                </nav>
            </div>

            <div class="card">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Davetler</h2>
                </header>

                <div class="card-body">
                    @if (session('error_code') == "0")
                    <div class="alert alert-soft-success fade show" role="alert">
                        <i class="fa fa-check-circle alert-icon mr-3"></i>
                        <span>{{ session('error_description') }}</span>
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (session('error_code') == "1")
                    <div class="alert alert-soft-danger fade show" role="alert">
                        <i class="fa fa-minus-circle alert-icon mr-3"></i>
                        <span>{{ session('error_description') }}</span>
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    {{ session()->forget(['error_code', 'error_description']) }}

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">İsim</th>
                                    <th scope="col">TAG</th>
                                    <th scope="col">Lider</th>
                                    <th scope="col">Üye Sayısı</th>
                                    <th class="text-center" scope="col">İşlem</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($teamInvitations as $teamInvitation)
                                <tr>
                                    <td>{{ $teamInvitation->team->id }}</td>
                                    <td>{{ $teamInvitation->team->name }}</td>
                                    <td>{{ $teamInvitation->team->tag }}</td>
                                    <td>{{ $teamInvitation->team->user->name }}</td>
                                    <td>
                                        <div class="col-md-3 mb-4 mb-md-0">
                                            <a data-html="true" class="link-muted d-block text-center" href="#!" title="@foreach($teamInvitation->team->teamUsers as $team_user) {{ $team_user->user->name }} <br /> @endforeach" data-toggle="tooltip" data-placement="right">
                                                <span class="font-weight-semibold">{{ $teamInvitation->team->teamUsers->count() }}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a id="actions1Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                            <i class="fa fa-sliders-h"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" href="{{ action('App\Http\Controllers\TeamController@acceptInvitation',['teamInvitation_id'=>$teamInvitation->id]) }}">
                                                        <i class="fa fa-check mr-2"></i> Kabul Et
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="d-flex align-items-center link-muted py-2 px-3" href="{{ action('App\Http\Controllers\TeamController@rejectInvitation',['teamInvitation_id'=>$teamInvitation->id]) }}">
                                                        <i class="fa fa-times-circle mr-2"></i> Red et
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>