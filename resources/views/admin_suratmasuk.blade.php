@extends ('master')
<a href="/homeadmin">
<i class="fa-solid fa-arrow-left" style="color: #ffffff;padding-top:22px;padding-left:22px;"></i>
</a>
@section('judul')
Pengecekan Surat Pengajuan
@endsection

@section('konten')
    <div class="kotakadmin">
        <div class="row">
            <div class="col-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_226_783)">
                <path d="M19 3H4.99C3.88 3 3.01 3.89 3.01 5L3 19C3 20.1 3.88 21 4.99 21H19C20.1 21 21 20.1 21 19V5C21 3.89 20.1 3 19 3ZM19 15H15C15 16.66 13.65 18 12 18C10.35 18 9 16.66 9 15H4.99V5H19V15Z" fill="#323232"/>
                </g><defs><clipPath id="clip0_226_783"><rect width="24" height="24" fill="white"/>
                </clipPath></defs></svg>
            </div>
            <div class="col-10" style="margin-left:-1rem;">
                <p class="judulsurat"> 
                    Surat-surat pengajuan <br> diterima
                </p>
            </div>
        </div>
        <hr class="hr" style="margin-top:-0.5rem;"/>
        <a href="{{url('/suratmasuk_surat')}}" class="hitam">
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-3">
                    <i class="fa-regular fa-envelope fa-lg"></i>
                </div>
                <div class="col-9 mt-1" style="margin-left:-1rem; ">
                    Nama surat
                </div>
                <div class="col-1 mt-1">
                    <b>0</b>
                </div>
            </div>
            </a>
            <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-3">
                    <i class="fa-regular fa-envelope fa-lg"></i>
                </div>
                <div class="col-9 mt-1" style="margin-left:-1rem; ">
                    Nama surat
                </div>
                <div class="col-1 mt-1">
                    <b>0</b>
                </div>
            </div>
            <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-3">
                    <i class="fa-regular fa-envelope fa-lg"></i>
                </div>
                <div class="col-9 mt-1" style="margin-left:-1rem; ">
                    Nama surat
                </div>
                <div class="col-1 mt-1">
                    <b>0</b>
                </div>
            </div>
            <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-3">
                    <i class="fa-regular fa-envelope fa-lg"></i>
                </div>
                <div class="col-9 mt-1" style="margin-left:-1rem; ">
                    Nama surat
                </div>
                <div class="col-1 mt-1">
                    <b>0</b>
                </div>
            </div>
            <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-3">
                    <i class="fa-regular fa-envelope fa-lg"></i>
                </div>
                <div class="col-9 mt-1" style="margin-left:-1rem; ">
                    Nama surat
                </div>
                <div class="col-1 mt-1">
                    <b>0</b>
                </div>
            </div>
            <hr class="hr" style="margin-top:-0.5rem;"/>
            
    </div>
@endsection