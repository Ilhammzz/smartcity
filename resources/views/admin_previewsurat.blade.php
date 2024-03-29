@extends ('master')
<a href="/surat_ready_print">
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
                    Surat siap dicetak
                </p>
            </div>
        </div>
        <hr class="hr" style="margin-top:-0.5rem;"/>

        <div class="subjudulbiru">
            Penerimaan surat ajuan
        </div>
        <div class="row justify-content:center mt-2">
            <div class="col-2">
                <img src="{{asset('img/person_outline.png')}}" alt="">
            </div>
            <div class="col-10 namanik">
                nama <br> NIK
            </div>
        </div>

        <iframe src="{{asset('tes.pdf')}}" frameborder="0" style="width:328px;height: 425px;margin-top:33px;">
        </iframe>
        <button class="btn-daftar rounded-3 mt-4" type="submit"> Download </button>
        <button class="btn-daftar rounded-3 mt-4" type="submit"> Selesai </button>
    </div>
    

@endsection