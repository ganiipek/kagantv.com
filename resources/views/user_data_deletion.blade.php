<x-guest-layout>
    <x-slot name="main">
        <section class="u-content-space">
            <div class="container">
                <header class="w-md-50 mx-auto text-center mb-7">
                    <h2 class="h1 font-weight-light mb-1">Kullanıcı Veri Silme Talebi</h2>
                    <p>6698 sayılı Kişisel Verilerin Korunması Kanunu'na uygun olarak kaydedilmiş kişisel verilerinizi KaganTV veritabanından silinmesini talep edebilirsiniz. Talebiniz onaylandıktan sonra size e-posta ile bildireceğiz.</p>
                </header>
                <form id="userDataDelectionForm" action="#" method="POST">
                    <div class="row mb-4">
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="h6 mb-0">Kullanıcı Veri Silme Formu</h3>
                                </div>
                                <div class="card-body">
                                    <div id="forminfo"></div>
                                    <div id="formcard">
                                        <div class="form-group mb-4">
                                            <label for="inputLeftIcon" class="u-font-size-90">Adınız Soyadınız:</label>
                                            <span class="form-icon-wrapper">
                                                <span class="form-icon form-icon--left">
                                                    <i class="fas fa-user-circle form-icon__item"></i>
                                                </span>
                                                <input class="form-control form-icon-input-left" name="name" placeholder="Ad Soyad">
                                            </span>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="inputLeftIcon" class="u-font-size-90">E-mail:</label>
                                            <span class="form-icon-wrapper">
                                                <span class="form-icon form-icon--left">
                                                    <i class="fas fa-envelope form-icon__item"></i>
                                                </span>
                                                <input class="form-control form-icon-input-left" name="email" placeholder="E-Mail adresiniz">
                                            </span>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="inputLeftIcon" class="u-font-size-90">Facebook Profil Link:</label>
                                            <span class="form-icon-wrapper">
                                                <span class="form-icon form-icon--left">
                                                    <i class="fab fa-facebook form-icon__item"></i>
                                                </span>
                                                <input class="form-control form-icon-input-left" name="facebook_link" placeholder="Profil linkinizi yazın">
                                            </span>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="inputLeftIcon" class="u-font-size-90">Verilerinizi neden silmek istiyorsunuz?</label>
                                            <span class="form-icon-wrapper">
                                                <input class="form-control" id="reason" name="reason" placeholder="Talep nedeninizi yazın.">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="sumbit" class="btn btn-success">Talebi Gönder</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script>
            $(function() {
                $("#userDataDelectionForm").validate({
                    errorClass: 'is-invalid',
                    rules: {
                        name: {
                            required: true,
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        facebook_link: {
                            required: true,
                        },
                        reason: {
                            required: true,
                            maxlength: 300
                        }
                    },
                    messages: {
                        name: {
                            required: "Lütfen adınız ve soyadınızı yazın.",
                        },
                        email: {
                            required: "Sizinle iletişim kurabilmek için e-mail adresinizi yazın.",
                            email: "Yanlış e-mail adres türü"
                        },
                        facebook_link: {
                            required: "Facebook profil linkinizi yazın.",
                        },
                        reason: {
                            required: "Neden verilerinizi silmenizi talep ediyorsunuz. Lütfen açıklayın.",
                            maxlength: "En fazla 300 karekter"
                        }
                    },
                    submitHandler: function(form) {
                        $("#formcard").load(window.location.href + " #formcard");
                        $('#forminfo').html('<div class="alert alert-soft-success fade show" role="alert"><i class="fa fa-check-circle alert-icon mr-3"></i><span>Talebiniz başarıyla alındı.</span><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>')
                    }
                });
            });
        </script>
    </x-slot>
</x-guest-layout>