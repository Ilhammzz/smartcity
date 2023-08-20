@extends('master')

@section('judul')
    Aplikasi Pelayanan <br> Desa Ngrendeng
@endsection

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="kotak1 rounded-3">
                <!-- Your content here -->
                <div class="row">
                    <div class="col me-0 mb-0">
                        <p class="subjudul mb-0" >
                            Pelacakan Surat
                        </p>
                    </div>
                    <div class="col me-0 ms-0 mt-2 text-end">
                        <img src="{{asset('img/lacak.png')}}">
                    </div>
                </div>
                <div class="isi" style="margin-top:-0.70rem">
                    Anda dapat melacak status <br> Surat Pengajuan yang telah <br> anda buat dan telah <br>disubmit disini
                </div>
                    <div class="lck">
                        <label>
                            Lacak Surat <svg class="ms-1 mb-0.5" xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none"> <path d="M1 1L5 6L1 11" stroke="#01B7BB" stroke-width="2"/> </svg>
                        </label>
                    </div>
            </div>
            <div class="kotak2 rounded-3">
                <!-- Your content here -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="kotak3">
                <!-- Your content here -->
            </div>
            <div class="kotak4">
                <!-- Your content here -->
            </div>
            <div class="kotak5">
                <!-- Your content here -->
            </div>
        </div>
    </div>
</div>
@endsection
