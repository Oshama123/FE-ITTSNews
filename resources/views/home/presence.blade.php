@extends('template.form.master')


@section('content')
    <section class="second-forms" id="second-forms">
        <div class="row content">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src={{ asset('assets/img/icon/agenda.png') }} alt="" class="img-fluid img-icon">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column align-items-center main-content">
                <div class="header">
                    <img src={{ asset('assets/img/logo/logoitts_Logo.png') }} alt="" class="img-fluid img-logo">
                    <h3 class="heading">Absensi Pelatihan</h3>
                    <p class="detail">Setelah mendaftar, teman-teman harus mengisi absensi sesuai dengan kode
                        <span>verifikasi absensi</span> dan kode <span>pelatihan</span> yang
                        telah diberikan melalui email
                        kamu
                    </p>
                </div>


                <form action="" class="d-flex justify-content-center flex-column align-items-center g-10">
                    <div class="main_absen">
                        <div class="flex_type">
                            <input type="text" name='code_presence' placeholder="Masukkan Kode Absensi">
                            <input type="text" name='code_training' placeholder="Masukkan Kode Pelatihan">
                        </div>
                        <textarea class="form-control " id="message" name="message" rows="4" placeholder="Tuliskan pesan Anda"
                            maxlength="255"></textarea>
                    </div>

                    <input type="button" value="submit" onsubmit="return validateForm() "class="btn-submit">
                </form>




            </div>
        </div>
        @include('template.form.footer')
    </section>
@endsection
