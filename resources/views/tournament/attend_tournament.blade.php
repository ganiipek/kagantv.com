<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Turnuvaya Katıl</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Turnuva</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Turnuvaya Katıl</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Turnuva</h2>
                        </header>

                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label for="defaultInput1">Default input</label>
                                <input id="defaultInput1" class="form-control form-pill" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                            </div>

                            <hr class="my-4">

                            <div class="form-group mb-4">
                                <label for="inputLeftIcon1">Input with left icon</label>
                                <span class="form-icon-wrapper">
                                    <span class="form-icon form-icon--left">
                                        <i class="fa fa-user-circle form-icon__item"></i>
                                    </span>
                                    <input id="inputLeftIcon1" class="form-control form-icon-input-left form-pill" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="inputRightIcon1">Input with right icon</label>
                                <span class="form-icon-wrapper">
                                    <span class="form-icon form-icon--right">
                                        <i class="fa fa-user-circle form-icon__item"></i>
                                    </span>
                                    <input id="inputRightIcon1" class="form-control form-icon-input-right form-pill" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                                </span>
                            </div>

                            <hr class="my-4">

                            <div class="form-group mb-4">
                                <label for="disabledTextInput2">Disabled</label>
                                <input id="disabledTextInput2" class="form-control form-pill" type="email" placeholder="Placeholder" disabled aria-describedby="disabledTextInput2">
                                <small class="form-text text-muted">Text feedback.</small>
                            </div>

                            <div class="form-group mb-4">
                                <label for="successTextInput2">Success</label>
                                <input id="successTextInput2" class="form-control form-pill is-valid" type="email" placeholder="Placeholder" aria-describedby="successTextInput2">
                                <small class="form-text valid-feedback">Success feedback.</small>
                            </div>

                            <div class="form-group">
                                <label for="errorTextInput2">Error</label>
                                <input id="errorTextInput2" class="form-control form-pill is-invalid" type="email" placeholder="Placeholder" aria-describedby="errorTextInput2">
                                <small class="form-text invalid-feedback">Error feedback.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Turnuva Bilgileri</h2>
                        </header>

                        <div class="card-body">
                            Burada turnuva bilgileri yazacak
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>