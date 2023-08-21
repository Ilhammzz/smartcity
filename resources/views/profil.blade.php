@extends ('master')

<img src="{{asset('img/keyboard_backspace.svg')}}" alt="" style="padding-top:22px;padding-left:22px;">

@section('judul')
    Aplikasi Pelayanan <br> Desa Ngrendeng
@endsection

@section('konten')
        <div class="kotak1 rounded-3" style="margin-top:-0.7rem;">
            <p class="subjudul">
                Profil
            </p>
            <p class="isi" style="margin-top:-0.7rem; margin-bottom:13px;">
                Lengkapi detail profil untuk keperluan <br>pengisian surat secara otomatis
            </p>
            <form action="">
            <div class="dtdiri">
                Nama<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris">
                </div>
            <div class="dtdiri">
            Tempat Tanggal Lahir<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris">
                </div>
            <div class="dtdiri">
            Jenis Kelamin<span class="text-danger">*</span>
            </div>
                      <select class="form-control formgaris" id="">
                        <option></option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
            <div class="dtdiri">
            Kewarganegaraan<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris">
                </div>
            <div class="dtdiri">
            Agama<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris">
                </div>
            <div class="dtdiri">
            Status Perkawinan<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris">
                </div>
            <div class="dtdiri">
            NIK<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris">
                </div>
            <div class="dtdiri">
            Alamat/tempat tinggal<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="textarea" class="form-control formgaris">
                </div>
            <div class="dtdiri">
            No HP<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris">
                </div>
            <button class="btn-daftar rounded-3 mt-5" type="submit"> Simpan </button>
        </div>

        <div class="container-home">
            <div class="kotak6">
                <div class="row">
                    <div class="col-2 mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                        <path d="M12 0C7.03 0 3 4.03 3 9H0L3.89 12.89L3.96 13.03L8 9H5C5 5.13 8.13 2 12 2C15.87 2 19 5.13 19 9C19 12.87 15.87 16 12 16C10.07 16 8.32 15.21 7.06 13.94L5.64 15.36C7.27 16.99 9.51 18 12 18C16.97 18 21 13.97 21 9C21 4.03 16.97 0 12 0ZM11 5V10L15.28 12.54L16 11.33L12.5 9.25V5H11Z" fill="#323232"/>
                        </svg>
                    </div>
                    <div class="col-10" style="margin-left:-1.5rem;">
                        <p class="subjudul"> Riwayat Pengajuan </p>
                        <p class="isi" style="margin-top:-1rem;">Daftar riwayat surat yang telah <br> diajukan</p>
                    </div>
                </div>
            </div>
        </div>   
        </form>
                                        <div class="d-flex" style="height: 60px;">
                                <div class="vr transparrent"></div>
                                </div>
@endsection