<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Turnuvalar</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Ana Sayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Turnuvular</li>
                    </ol>
                </nav>
            </div>

            <div class="card">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Table with links and progress</h2>
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
                                    <th scope="col">Ödül</th>
                                    <th scope="col">Son Katılım Tarihi</th>
                                    <th class="text-center" scope="col">İşlem</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($giveaways as $giveaway)
                                <tr>
                                    <td>{{ $giveaway->id }}</td>
                                    <td>{{ $giveaway->name }}</td>
                                    <td>{{ $giveaway->user->name }}</td>
                                    <td>{{ $giveaway->award }}</td>
                                    <td>{{ $giveaway->starting_date }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-warning">Çekilişe katılabilir miyim?</button>
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