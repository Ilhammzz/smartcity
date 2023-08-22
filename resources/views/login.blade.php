<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('style')
    <title>Login</title>
</head>
<body>
    <div class="container-signin">
        <div class="text-center">
            <img src="{{asset('img/logo.png')}}" alt="" style="width:auto; height:auto">
        </div>
        <h1 style="padding: top 14px; padding-bottom:25px; text-align:center;">
            Selamat datang!
        </h1>
        <p class="txtlogin">
            Silakan masuk dengan Username/ID dan Password Anda
        </p>
        <form action="">
            <div class="" style="padding-bottom:24px;">
                <label for="" class="ms-2 position-absolute" style="margin-top: -0.70rem; margin-left:32px;">
                    <span class="bg-white px-1" style="font-size:12px; font-color:#49454F">NIK</span>
                </label>
                <input type="text" class="form-control" placeholder="" style="border-style:solid; border-width:2px; border-color:#97CBCC;">  
            </div>
            <div class="" style="padding-bottom:24px;">
                <label for="" class="ms-2 position-absolute" style="margin-top: -0.70rem; margin-left:32px;">
                    <span class="bg-white px-1" style="font-size:12px; font-color:#49454F">Tanggal Lahir</span>
                </label>
                <input type="date" class="form-control" placeholder="" style="border-style:solid; border-width:2px; border-color:#97CBCC;">  
            </div>
        <button class="btn-daftar rounded-3" type="submit"> Kirim </button>

        </form>
        <div class="logasadmin text-center">
            <p> 
               <a href="{{url('/adminlogin')}}">Login sebagai admin</a>  <br> Belum punya akun? <a href="{{url('/signin')}}">Daftar disini</a>
            </p>
        </div>
       



    </div>
</body>
</html>

