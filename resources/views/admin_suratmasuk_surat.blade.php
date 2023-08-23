@extends ('master')
<a href="/suratmasuk">
<i class="fa-solid fa-arrow-left" style="color: #ffffff;padding-top:22px;padding-left:22px;"></i>
</a>
@section('judul')
Surat siap dicetak
@endsection

@section('konten')
    <div class="kotakadmin">
        <div class="row">
            <div class="col-1   ">
            <i class="fa-regular fa-envelope fa-xl mt-3"></i>
            </div>
            <div class="col-11">
                <p class="judulsurat ms-2 mt-1">
                    Nama surat 
                </p>
            </div>
        </div>
        <hr class="hr" style="margin-top:-0.5rem;"/>
        <a href="/pengajuan_diterima" class="hitam">
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-1 ms-1">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
             </div>
             </a>
             <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-1 ms-1">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
             </div>
             <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-1 ms-1">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
             </div>
             <hr class="hr" style="margin-top:-0.5rem;"/>
            <div class="row">
                <div class="col-2 me-0 mb-4 mt-1 ms-1">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
             </div>
             <hr class="hr" style="margin-top:-0.5rem;"/>
@endsection
