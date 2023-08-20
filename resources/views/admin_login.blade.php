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
            Login Admin
        </h1>
        <p class="txtlogin">
            Silakan masuk dengan Username/ID dan Password Anda
        </p>
        <form action="">
            <div class="" style="padding-bottom:24px;">
                <label for="" class="ms-2 position-absolute" style="margin-top: -0.70rem; margin-left:32px;">
                    <span class="bg-white px-1" style="font-size:12px; font-color:#49454F">Username/ID</span>
                </label>
                <input type="text" class="form-control" placeholder="" style="border-style:solid; border-width:2px; border-color:#97CBCC;">  
            </div>
            <div class="" style="padding-bottom:24px;">
                <label for="" class="ms-2 position-absolute" style="margin-top: -0.70rem; margin-left:32px;">
                    <span class="bg-white px-1" style="font-size:12px; font-color:#49454F">Password</span>
                </label>
                <input type="password" class="form-control" placeholder="" style="border-style:solid; border-width:2px; border-color:#97CBCC;">  
            </div>
        <button class="btn-daftar rounded-3" type="submit"> Login </button>

        </form>

       



    </div>
</body>
</html>

