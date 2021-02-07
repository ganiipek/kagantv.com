<x-app-layout>
    <x-slot name="slot">
        <div class="u-body">
            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <h1 class="h3">Çekiliş Oluştur</h1>
                    <ol class="breadcrumb bg-transparent small p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Çekiliş</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Çekiliş Oluştur</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <form action="{{ action('App\Http\Controllers\GiveawayController@createGiveaway') }}" id="createGiveawayForm" method="POST">
                        @csrf
                        <div class="card">
                            <header class="card-header">
                                <h2 class="h3 card-header-title">Çekiliş Ayarları</h2>
                            </header>

                            <div class="card-body">
                                @if (session('error_code') == "0")
                                <div class="alert alert-soft-success fade show" role="alert">
                                    <i class="fa fa-check-circle alert-icon mr-3"></i><span>{{ session('error_description') }}</span>
                                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @elseif (session('error_code') == "1")
                                <div class="alert alert-soft-error fade show" role="alert">
                                    <i class="fa fa-minus-circle alert-icon mr-3"></i><span>{{ session('error_description') }}</span>
                                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                {{ session()->forget(['error_code', 'error_description']) }}
                                <div class="form-group mb-4">
                                    <label for="defaultInput1">Çekiliş Adı</label>
                                    <input id="giveaway_name" name="giveaway_name" class="form-control form-pill" placeholder="Çekiliş Adını Girin">
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Çekiliş Son Katılım Tarihi (Ay-Gün-Yıl Saat:Dakika)</label>
                                    <span class="form-icon-wrapper">
                                        <span class="form-icon form-icon--left">
                                            <i class="fas fa-calendar-times form-icon__item"></i>
                                        </span>
                                        <input id="giveaway_start_time" name="giveaway_start_time" class="form-control form-icon-input-left form-pill">
                                    </span>
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Çekiliş Ödülü</label>
                                    <span class="form-icon-wrapper">
                                        <span class="form-icon form-icon--left">
                                            <i class="fas fa-gem form-icon__item"></i>
                                        </span>
                                        <input id="giveaway_award" name="giveaway_award" class="form-control form-icon-input-left form-pill" placeholder="Çekiliş Ödülünü Yazın">
                                    </span>
                                </div>

                                <hr class="my-4">

                                <div class="form-group">
                                    <label for="inputRightIcon1">Çekiliş Kuralları:</label>
                                    <label class="d-flex align-items-center justify-content-between u-font-size-90">
                                        <span class="form-label-text"><small>Çekilişe katılmak için KaganTV sayfasını takip ediyor olmak zorunda.</small></span>
                                        <div class="form-toggle">
                                            <input name="likepage_checkbox" type="checkbox">
                                            <div class="form-toggle__item">
                                                <i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="d-flex align-items-center justify-content-between u-font-size-90">
                                        <span class="form-label-text"><small>Çekilişe katılmak için canlı yayını beğenmiş olmak zorunda.</small></span>
                                        <div class="form-toggle">
                                            <input id="livestream_checkbox" name="livestream_checkbox" type="checkbox">
                                            <div class="form-toggle__item">
                                                <i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
                                            </div>
                                        </div>
                                    </label>
                                    <div id="livePostLink"></div>
                                    <span class="form-icon-wrapper">
                                        <textarea id="giveaway_rules" name="giveaway_rules" class="form-control" placeholder="Ekstra kural varsa buraya yazılacak!" rows="4"></textarea>
                                    </span>
                                </div>
                                <center><button id="" name="" type="sumbit" class="btn btn-success">Çekilişi Oluştur</button></center>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Çekiliş Düzenleme Kuralları</h2>
                        </header>

                        <div class="card-body">
                            Buraya çekiliş oluşturma kuralları yazılacak!!!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#livestream_checkbox').change(function() {
                if (this.checked) {
                    $('#livePostLink').html('<div class="form-group mb-4"><label for="defaultInput1">Canlı yayın linki:</label><input id="live_stream_link" name="live_stream_link" class="form-control form-pill" placeholder="Canlı Yayın Url"></div>');
                } else {
                    $('#livePostLink').html('');
                }
            });

            $(function() {
                $("#createGiveawayForm").validate({
                    errorClass: 'is-invalid',
                    rules: {
                        giveaway_name: {
                            required: true,
                            maxlength: 60
                        },
                        giveaway_type: {
                            required: true,
                        },
                        giveaway_start_time: {
                            required: true,
                            date: true
                        },
                        giveaway_award: {
                            required: true,
                        },
                        live_stream_link: {
                            required: true,
                        }
                    },
                    messages: {
                        giveaway_name: {
                            required: "Çekiliş adı boş bırakılamaz.",
                            maxlength: "Çekiliş adı maximum 60 harf olmak zorundadır."
                        },
                        giveaway_type: {
                            required: "Çekiliş türünü belirtin.",
                        },
                        giveaway_start_time: {
                            required: "Çekilişin ne zaman başlayacağını yazın.",
                            date: "Geçerli bir tarih girin."
                        },
                        giveaway_award: {
                            required: "Çekiliş ödülünü yazın.",
                        },
                        live_stream_link: {
                            required: "Canlı yayın linkini yazın.",
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });

            $(document).ready(function() {
                $('#giveaway_start_time').inputmask("99-99-9999 99:99", {
                    "placeholder": "mm-dd-yyyy hh:dd"
                })
            });
        </script>
    </x-slot>
</x-app-layout>