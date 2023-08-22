@extends ('master')

@section('judul')
    Aplikasi Pelayanan <br> Desa Ngrendeng
@endsection

@section('konten')
<div class="kotak1 rounded-3" style="">
    <div class="row">
        <div class="col me-0 mb-0">
            <p class="subjudul mb-0" >
                Fitur admin <img src="{{asset('img/admin_settings.png')}}" alt="">
            </p>
        </div>
        <div class="col me-0 ms-0 mt-2 text-end">
            <img src="{{asset('img/lacak.png')}}">
        </div>
    </div>
            <div class="isi" style="margin-top:-0.70rem">
            <ul>
                    <li>List surat masuk</li>
                    <li>Progres verifikasi</li>
                    <li>Edit template surat</li>
                    <li>Database dan berkas <br> pengajuan surat</li>
                 </ul>
             </div>
</div>

<div class="container-home">
    <p class="subjudul">
        Dashboard
    </p>
    <div class="row">
        <div class="col-5 kotakkecil">
            <div class="jmlsurat mt-2">
                <div class=row>
                    <div class="col-7">
                        0
                    </div>
                    <div class="col-5">
                    <i class="fa-solid fa-envelope fa-xs"></i>
                    </div>
                </div>
                <div class="desckotak mt-4">
                Surat pengajuan diterima
                </div>
            </div>
        </div>
        <div class="col-5 kotakkecil ">
        <div class="jmlsurat mt-2">
                <div class=row>
                    <div class="col-7">
                        0
                    </div>
                    <div class="col-5">
                        <i class="fa-regular fa-clipboard fa-xs"></i> 
                    </div>
                </div>
                <div class="desckotak mt-4">
                Surat yang ditunda
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5 kotakkecil">
        <div class="jmlsurat mt-2">
                <div class=row>
                    <div class="col-7">
                        0
                    </div>
                    <div class="col-5">
                        <i class="fa-regular fa-circle-check fa-xs"></i>
                    </div>
                </div>
                <div class="desckotak mt-4">
                    Kirim notifikasi surat terverifikasi
                </div>
            </div>
        </div>
        <div class="col-5 kotakkecil">
        <div class="jmlsurat mt-2">
                <div class=row>
                    <div class="col-7">
                        0
                    </div>
                    <div class="col-5">
                        <i class="fa-solid fa-envelope-open fa-xs"></i>
                    </div>
                </div>
                <div class="desckotak mt-4">
                    Surat siap cetak
                </div>
            </div>
        </div>
    </div>
    <div class="kotak6">
                <div class="row">
                    <div class="col-2 mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M10.5852 4H4.73149C3.65832 4 2.79003 4.9 2.79003 6L2.78027 18C2.78027 19.1 3.65832 20 4.73149 20H20.3412C21.4144 20 22.2925 19.1 22.2925 18V8C22.2925 6.9 21.4144 6 20.3412 6H12.5364L10.5852 4Z" fill="#323232"/>
                        </svg>
                    </div>
                    <div class="col-10" style="margin-left:-1.5rem;">
                        <p class="subjudul"> History dan Berkas </p>
                        <p class="isi" style="margin-top:-1rem;">Daftar riwayat surat yang telah <br> diproses</p>
                    </div>
                </div>
</div>
<div class="kotak5 mb-4">
        <p class="text-danger text-center">Keluar Akun</p>
    </div>
@endsection


