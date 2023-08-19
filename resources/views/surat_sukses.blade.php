@extends ('master')

@section('judul')
    Tahap Akhir Pengajuan Surat 
@endsection

@section ('konten')

    <div class="kotak1 rounded-3">
        <div class="judulsurat">
            <b>Pengajuan berhasil dibuat!</b>
        </div>
        <div class="ketsurat">
        Silakan tunggu surat untuk selesai diproses <br> dan dikonfirmasi. Anda dapat melacak <br>tahapan proses konfirmasi pada 
        <span class="text-decoration-underline text-primary">halaman <br> Lacak Surat disini.</span>
        </div>
    </div>
    <div class="text-center" style="margin-top:27px;">
            <button class="headerattach btnajukan ">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><g clip-path="url(#clip0_141_1446)">
            <path d="M21 11H6.83L10.41 7.41L9 6L3 12L9 18L10.41 16.59L6.83 13H21V11Z" fill="white"/></g>
            <defs><clipPath id="clip0_141_1446"><rect width="24" height="24" fill="white"/></clipPath>
            </defs></svg>Kembali ke Home
                </button>
        </div>
@endsection