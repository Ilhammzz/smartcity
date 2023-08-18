<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @extends('style')
    
</head>
<body style="background-image: url('img/bg-desa.png'); background-repeat: no-repeat; background-color:#F8FAFF;height:239.391px;justify-content:center;">
    <div class=container-home>
        <p class="judul" style="margin-left:6px;"> 
            @yield('judul')
        </p> 
    </div>

       @yield('konten')
</body>


</html>