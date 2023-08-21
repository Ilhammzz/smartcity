@extends ('master')

<img src="{{asset('img/keyboard_backspace.svg')}}" alt="" style="padding-top:22px;padding-left:22px;">

@section('judul')
Kirim notif surat terverifikasi
@endsection

@section('konten')
    <div class="kotakadmin">
        <div class="row">
            <div class="col-1   ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_235_1336)">
                    <path d="M20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2ZM12.47 14L9 10.5L10.4 9.09L12.47 11.17L17.6 6L19 7.41L12.47 14ZM4 6H2V20C2 21.1 2.9 22 4 22H18V20H4V6Z" fill="#323232"/>
                    </g><defs><clipPath id="clip0_235_1336"><rect width="24" height="24" fill="white"/>
                    </clipPath></defs>
                </svg>
            </div>
            <div class="col-11">
                <p class="judulsurat"> 
                    Surat-surat siap diambil
                </p>
            </div>
        </div>
        <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4">
                    <img src="{{asset('img/person_outline.svg')}}" alt="">
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
            </div>
            <div class="row">
                <div class="col-2 me-0 mb-4">
                    <img src="{{asset('img/person_outline.svg')}}" alt="">
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
            </div>
            <div class="row">
                <div class="col-2 me-0 mb-4">
                    <img src="{{asset('img/person_outline.svg')}}" alt="">
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
            </div>
            <div class="row">
                <div class="col-2 me-0 mb-4">
                    <img src="{{asset('img/person_outline.svg')}}" alt="">
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
            </div>
            <div class="row">
                <div class="col-2 me-0 mb-4">
                    <img src="{{asset('img/person_outline.svg')}}" alt="">
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
            </div>
    </div>
@endsection