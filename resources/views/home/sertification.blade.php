@extends('template.form.master')


@section('content')
    <section class="second-forms" id="second-forms">
        <div class="row content">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src={{ asset('assets/img/icon/badges.png') }} alt="" class="img-fluid img-icon">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column align-items-center main-content">
                <div class="header">
                    <img src={{ asset('assets/img/logo/logoitts_Logo.png') }} alt="" class="img-fluid img-logo">
                    <h3 class="heading">Penerimaan Sertifikat</h3>
                    <p class="detail">Selamat! kamu sudah berhasil menaklukan satu pelatihan. Ayok ikut pelatihan
                        selanjutnya. Sekarang Input lagi kode <span>Peserta</span> dan <span>Pelatihan</span> untuk
                        mengambil sertifikat
                    </p>
                </div>


                <form action=""
                    class="d-flex justify-content-center flex-column align-items-center gy-5 main_sertification">
                    <input type="text" name='code_partisipation' placeholder="Masukkan Kode Peserta">

                    <input type="text" name='code_partisipation' placeholder="Masukkan Kode Pelatihan">

                    <input type="button" value="submit" onsubmit="return validateForm() "class="btn-submit">
                </form>

            </div>
        </div>
        @include('template.form.footer')
    </section>
@endsection
