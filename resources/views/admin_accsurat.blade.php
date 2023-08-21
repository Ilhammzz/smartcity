@extends ('master')

<img src="{{asset('img/keyboard_backspace.svg')}}" alt="" style="padding-top:22px;padding-left:22px;">

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
        <div class="row justify-content:center mt-4">
            <div class="col-2">
                <img src="{{asset('img/person_outline.png')}}" alt="">
            </div>
            <div class="col-10 namanik">
                nama <br> NIK
            </div>
        </div>
        <div class="row justify-content:center mt-4">
            <div class="col-6">
                <p class="subjudul">
                    <b>Profil pengaju surat :</b>
                </p>
            </div>
            <div class="col-6 text-end">
                Edit
            </div>
        </div>

        
        <button class="btn-daftar rounded-3 mt-4" type="submit"> Download </button>
        
    </div>
    

@endsection