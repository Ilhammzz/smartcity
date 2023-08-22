<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @extends('style')
    
</head>
<body id="body"  >
    <div class="container-home">
        <p class="judul"> 
            @yield('judul')
        </p> 
    </div>

       @yield('konten')
</body>


</html>