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
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col" width="160">Avg. Progress</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Tag</th>
                                    <th class="text-center" scope="col">Actions</th>
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
                                <tr>
                                    <td>2</td>
                                    <td>Blanche Powers</td>
                                    <td>Sales Manager</td>
                                    <td>
                                        <div class="progress" style="height: 6px; border-radius: 3px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%; border-radius: 3px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 35,450</td>
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
                                <tr>
                                    <td>3</td>
                                    <td>Alvin Meyer</td>
                                    <td>Developer</td>
                                    <td>
                                        <div class="progress" style="height: 6px; border-radius: 3px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%; border-radius: 3px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 89,240</td>
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
                                <tr>
                                    <td>4</td>
                                    <td>Harriet Delgado</td>
                                    <td>Designer</td>
                                    <td>
                                        <div class="progress" style="height: 6px; border-radius: 3px;">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%; border-radius: 3px;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 96,450</td>
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
                                <tr>
                                    <td>5</td>
                                    <td>Elsie Davis</td>
                                    <td>Support Manager</td>
                                    <td>
                                        <div class="progress" style="height: 6px; border-radius: 3px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%; border-radius: 3px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$ 35,900</td>
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