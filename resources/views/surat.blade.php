@extends ('master')

@section('judul')
    Pengajuan Surat <br> Kehilangan
@endsection

@section ('konten')
        <div class="kotak1 rounded-3">
            <p class="judulsurat">
                @yield('namasurat')
            </p>
            <hr class="hr" style="margin-top:-1rem;" />
            <div class="ketsurat">
                @yield('keterangansurat')
            </div>
        </div>
    <form action="">
    <div class="container-home">
        <div class="kotakcyan">
                <p class="headerattach">
                    @yield('headerattach')
                </p>
        </div>
        <div class="kotakattach">
            @yield('inputattachment')
        </div>
        <div class="kotakcyan">
                <p class="headerattach">
                    @yield('headerattach2')
                </p>
        </div>
        <div class="kotakattach">
            @yield('inputattachment2')
        </div>
        <div class="kotakcyan">
                <p class="headerattach">
                    @yield('headerattach3')
                </p>
        </div>
        <div class="kotakattach">
            @yield('inputattachment3')
        </div>
        <div class="text-end" style="margin-top:27px;">
            <button class="headerattach btnajukan ">Ajukan Surat 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_165_464)"><path d="M3 11H17.17L13.59 7.41L15 6L21 12L15 18L13.59 16.59L17.17 13H3V11Z" fill="white"/></g>
                <defs> <clipPath id="clip0_165_464"><rect width="24" height="24" fill="white" transform="matrix(-1 0 0 1 24 0)"/></clipPath></defs>
                </svg></button>
        </div>
    </div>
    </form>
@endsection