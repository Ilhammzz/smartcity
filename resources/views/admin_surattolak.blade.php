@extends ('master')
<a href="/homeadmin">
<i class="fa-solid fa-arrow-left" style="color: #ffffff;padding-top:22px;padding-left:22px;"></i>
</a>
@section('judul')
Kirim notif surat ditolak
@endsection

@section('konten')
    <div class="kotakadmin">
        <div class="row">
            <div class="col-1   ">
            <i class="fa-regular fa-circle-xmark fa-xl mt-3"></i>
            </div>
            <div class="col-11 mt-1">
                <p class="judulsurat"> 
                    Surat-surat ditolak
                </p>
            </div>
        </div>
        <hr class="hr" style="margin-top:-0.5rem;"/>
        <a href="/surat_ditolak" class="hitam">
            <div class="row">
                <div class="col-2 me-0 mb-4">
                    <i class="fa-regular fa-user mt-1"></i>
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
            </div>
        </a>
            <div class="row">
                <div class="col-2 me-0 mb-4">
                    <i class="fa-regular fa-user mt-1"></i>
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
                    <i class="fa-regular fa-user mt-1"></i>
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
                    <i class="fa-regular fa-user mt-1"></i>
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
                    <i class="fa-regular fa-user mt-1"></i>
                </div>
                <div class="col-6" style="margin-left:-1rem; ">
                    Nama
                </div>
                <div class="col-4 text-end">
                    <b>1 Agustus</b>
                </div>
            </div>
            <button class="btn-daftar red rounded-3 mt-5">
                Notifikasi semua
            </button>
    </div>
@endsection