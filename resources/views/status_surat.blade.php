@extends ('master')
<a href="{{url('/home')}}">
<img src="{{asset('img/keyboard_backspace.svg')}}" alt="" style="padding-top:22px;padding-left:22px;">
</a>
@section('judul')
    Suratku
@endsection

@section('konten')
<div class="kotak1 rounded-3" style="">
   <p class="subjudul"> (Status Surat) </p>
   <p class="isi">Suratmu akan diproses dan dicetak, Silahkan mengecek progres surat untuk pengambilan!</p>
</div>

<div class="kotak1 rounded-3">
    <div class="row" >
                    <div class="col-2 me-0">
                        <img src="{{asset('img/surat.png')}}" alt="">
                    </div>
                    <div class="col-9" style="margin-left:-1rem; ">
                        Surat Kehilangan
                    </div>
                    <div class="col-1">
                        ket
                    </div>
                </div>
                <hr class="hr"/>
    <div class="row">
                    <div class="col-2 me-0">
                        <img src="{{asset('img/surat.png')}}" alt="">
                    </div>
                    <div class="col-9" style="margin-left:-1rem; ">
                        Surat Keterangan Usaha
                    </div>
                    <div class="col-1">
                        ket
                    </div>
                </div>
                <hr class="hr"/>
    <div class="row">
                    <div class="col-2 me-0">
                        <img src="{{asset('img/surat.png')}}" alt="">
                    </div>
                    <div class="col-9" style="margin-left:-1rem; ">
                        SKTM 
                    </div>
                    <div class="col-1">
                        ket
                    </div>
                </div>
                <hr class="hr"/>

</div>



<div class="container-home">
    <a href="{{url('/home')}}">
<button class="btn-daftar rounded-3" type="submit"> Kembali </button>
    </a>
</div>
@endsection


