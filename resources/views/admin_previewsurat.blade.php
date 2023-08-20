@extends ('master')

@section('judul')
    Pengecekan Surat <br>Pengajuan
@endsection

@section('konten')
    <div class="kotakadmin">
    <div class="row">
            <div class="col-1   ">
                <img src="{{asset('img/mail_outline.png')}}" alt="">
            </div>
            <div class="col-11">
                <p class="judulsurat"> 
                    Surat-surat siap diambil
                </p>
            </div>
        </div>
        <hr class="hr" style="margin-top:-0.5rem;"/>

        <div class="subjudulbiru">
            Penerimaan surat ajuan
        </div>
        <div class="row justify-content:center">
            <div class="col-2">
                <img src="{{asset('img/person_outline.png')}}" alt="">
            </div>
            <div class="col-10 namanik">
                nama <br> NIK
            </div>
        </div>

        <iframe src="{{asset('tes.pdf')}}" frameborder="0" style="height: 425px;">
        </iframe>

    </div>

@endsection