@extends ('master')
<a href="/suratmasuk_surat">
<i class="fa-solid fa-arrow-left" style="color: #ffffff;padding-top:22px;padding-left:22px;"></i>
</a>
@section('judul')
    Pengecekan Surat <br> Pengajuan
@endsection

@section('konten')
        <div class="kotak1 rounded-3" style="margin-top:-0.7rem;">
            <p class="judulsurat">
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
                <div class="col-8" >
                    <div class="subjudul"> <b>Profile Pengaju Surat :</b> </div>
                </div>
                <div class="col-4" id="edit" >
                    <i class="fa-solid fa-pencil fa-sm mt-3 text-end">  </i> Edit
                </div>
            </div>

            <form action="" >
        <div>
            <div class="dtdiri">
                Nama<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="nama" disabled >
                </div>
            <div class="dtdiri">
            Tempat Tanggal Lahir<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="ttl" disabled >
                </div>
            <div class="dtdiri">
            Jenis Kelamin<span class="text-danger">*</span>
            </div>
            <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="klm" disabled >
                </div>
            <div class="dtdiri">
            Kewarganegaraan<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="kwn" disabled>
                </div>
            <div class="dtdiri">
            Agama<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="agm" disabled>
                </div>
            <div class="dtdiri">
            Status Perkawinan<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="sts" disabled>
                </div>
            <div class="dtdiri">
            NIK<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="nik" disabled >
                </div>
            <div class="dtdiri">
            Alamat/tempat tinggal<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="textarea" class="form-control formgaris" id="almt" disabled >
                </div>
            <div class="dtdiri">
            No HP<span class="text-danger">*</span>
            </div>
                <div class="isidtdiri mt-2">
                    <input type="text" class="form-control formgaris" id="hp" disabled>
                </div>
            <div class="dtdiri">
                Tujuan Keperluan Surat :<span class="text-danger">*</span>
                </div>
                    <div class="isidtdiri mt-2">
                        <input type="text" class="form-control formgaris" id="tujuan" disabled>
                    </div>
            <button class="btn-daftar rounded-3 mt-4" type="submit"> Terima </button>
            <button class="btn-daftar rounded-3 mt-4 red" type="submit"> Tolak   </button> 
        </div>
        </div>
        </form>
                                        <div class="d-flex" style="height: 60px;">
                                <div class="vr transparrent"></div>
                                </div>

<script>
    var disabled = true;
    document.getElementById("edit").onclick = function() {enabledisable()};
    function enabledisable() {
        var disabled_el = (disabled) ? document.querySelectorAll("input[disabled]") : document.querySelectorAll("input")
        
        disabled = !disabled
        
        disabled_el.forEach((disable) => {
            disable.disabled = disabled
        })

        // if (nama.disabled == true){
        //     document.getElementById("nama").disabled = false;
        //     document.getElementById("ttl").disabled = false;
        // }
        // else {
        //     document.getElementById("nama").disabled = true;
        //     document.getElementById("ttl").disabled = true;
        // }
        
    }
   

    
</script>
@endsection
