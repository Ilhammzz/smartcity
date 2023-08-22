@extends ('master')

<img src="{{asset('img/keyboard_backspace.svg')}}" alt="" style="padding-top:22px;padding-left:22px;">

@section('judul')
    Pengecekan Surat <br> Pengajuan
@endsection

@section('konten')
        <div class="kotak1 rounded-3" style="margin-top:-0.7rem;">
            <p class="subjudul">
                <i class="fa-regular fa-envelope"></i>
                Surat Keterangan Usaha
            </p>
            <hr class = "hr"/>
            <p class="subjudulbiru">
                Penerimaan Surat Ajuan
            </p>

            <div class="row">
                <div class="col-1">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="col-10">
                    <div class="nama"> <b>Nama</b> </div>
                    <div class="nohp"> <b>000</b></div>
                </div>
            </div>
            <hr class = "hr"/>
            <div class="row">
                <div class="col-8">
                    <div class="subjudul"> <b>Profile Pengaju Surat :</b> </div>
                </div>
                <div class="col-1">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>
                <div class="col-2">
                    Edit
                </div>
            </div>

            <form action="">
            <div class="dtdiri">
                Nama<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
            Tempat Tanggal Lahir<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
            Jenis Kelamin<span class="text-danger">*</span>
            </div>
                      <select class="form-control formgaris" id="" disabled>
                        <option></option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
            <div class="dtdiri">
            Kewarganegaraan<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
            Agama<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
            Status Perkawinan<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
            NIK<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
            Alamat/tempat tinggal<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="textarea" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
            No HP<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" disabled>
                </div>
            <div class="dtdiri">
                Tujuan Keperluan Surat :<span class="text-danger">*</span>
                </div>
                    <div class="isidtdiri mt-2">
                        <input type="text" class="form-control formgaris" disabled>
                    </div>
            <button class="btn-daftar rounded-3 mt-4" type="submit"> Terima </button>
            <button class="btn-daftar rounded-3 mt-4" type="submit"> Tolak   </button> // abang
        </div>
        </form>
                                        <div class="d-flex" style="height: 60px;">
                                <div class="vr transparrent"></div>
                                </div>
@endsection
