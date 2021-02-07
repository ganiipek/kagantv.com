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
                                    <th scope="col">Tür</th>
                                    <th scope="col">Oyuncu Bilgisi</th>
                                    <th scope="col">Katılımcı Sayısı</th>
                                    <th scope="col">Başlama Tarihi</th>
                                    <th scope="col">Kazanan</th>
                                    <th class="text-center" scope="col">İşlem</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dale Mack</td>
                                    <td>Developer</td>
                                    <td>
                                        <div class="progress" style="height: 6px; border-radius: 3px;">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%; border-radius: 3px;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 56,900</td>
                                    <td>
                                        <a class="badge badge-light">Manager</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="u-link mr-2" href="#!">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="link-muted" href="#!">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>