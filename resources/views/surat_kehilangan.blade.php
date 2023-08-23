@extends ('surat')


@section('namasurat')
Surat Kehilangan
@endsection

@section('keterangansurat')
    Data-data yang perlu diisi pada pengajuan <br> Surat Kehilangan adalah: <br>
                <ul>
                    <li><b>Deskripsi kehilangan</b></li>
                    <li><b>Berkas pendukung</b> </li>
                    <li><b>Foto KTP/KK</b></li>
                </ul>
@endsection

@section('headerattach')
    Ceritakan bentuk kehilangan anda!
@endsection

@section('inputattachment')
<input type="text" class="form-control formgaris">
@endsection

@section('headerattach2')
    Berkas Pendukung
@endsection

@section('inputattachment2')
<input type="file" class="form-control ">
@endsection

@section('headerattach3')
    Foto KTP/KK
@endsection

@section('inputattachment3')
<input type="file" class="form-control ">
@endsection

