@extends('template.form.master')

@section('content')
    <div class="d-flex justify-content-center">
        <section class="forms" id="form">
            <div class="option">
                <p>Seek Additional Training? <a href="/">Click Here</a></p>
            </div>
            <div class="header d-flex flex-column justify-content-center align-items-center">
                <img src={{ asset('assets/img/logo/logoitts_Logo.png') }} alt="" class="img-fluid img-logo">
                <h3 class="heading">Form Pendaftaran Pelatihan <br>Institut Teknologi Tangerang Selatan</h3>
                <p class="description">Ayok Dapatkan Sertifikat Pelatihan Dari Kami</p>
            </div>
            <div class="form" id="form">
                <p class="detail">Jenis Pelatihan</p>

                <form action="">
                    <div class="input-column d-flex flex-column ">
                        <label for="pelatihan">Pelatihan</label>
                        <select id="pelatihan" name="pelatihan">
                            <option value="" style="font-style: italic">-- Pilih Pelatihan-- </option>
                            <option value="pelatihan1">Latihan1</option>
                            <option value="pelatihan2">Latihan2</option>
                            <option value="pelatihan3">Latihan3</option>
                        </select>
                    </div>


                    <p class="detail">Bio Data Peserta</p>
                    <div class="input-column d-flex flex-column">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" placeholder=" Masukkan Nama Lengkap">



                        <label for="emmail">Email</label>
                        <input type="email" name="email" id="email" placeholder="contoh@gmail.com">


                        <label for="instansi">Instintusi</label>
                        <input type="text" name="instansi" id="instansi" placeholder="Instansi Anda">


                        <label for="telpon">No Handphone</label>
                        <input type="number" name="telpon" id="telpon" placeholder="ex.08xxxxxxxx"
                            pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}>
    
    
                            <label for="sosmed">Sosial
                        Media</label>
                        <input type="text" name="sosmed" id="sosmed" placeholder="ex. @digiyok">

                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <input type="button" value="submit" onsubmit="return validateForm() "class="btn-submit">
                    </div>
                </form>
            </div>
            @include('template.form.footer')
        </section>
    </div>
@endsection
