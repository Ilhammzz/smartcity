@extends ('master')
<a href="/surattolak">
<i class="fa-solid fa-arrow-left" style="color: #ffffff;padding-top:22px;padding-left:22px;"></i>
</a>
@section('judul')
    Pengecekan Surat <br>Pengajuan
@endsection

@section('konten')
    <div class="kotakadmin">
    <div class="row">
            <div class="col-1   ">
            <i class="fa-regular fa-envelope fa-xl mt-3"></i>
            </div>
            <div class="col-11 mt-1">
                <p class="judulsurat"> 
                    Nama Surat
                </p>
            </div>
        </div>
        <hr class="hr" style="margin-top:-0.5rem;"/>
        <div class="subjudul merah">
            Penolakan surat ajuan
        </div>
        <div class="row justify-content:center">
            <div class="col-2">
                <img src="{{asset('img/person_outline.png')}}" alt="">
            </div>
            <div class="col-10 namanik">
                nama <br> NIK
            </div>
        </div>
        <hr class="hr" />
        <div class="subjudul">
            Alasan penolakan surat :
        </div>
        <div class="isi">
            Alasan
        </div>

        <button class="btn-daftar rounded-3" type="submit" style="margin-top: 289px;"> Kirim Tanggapan</button>
@endsection