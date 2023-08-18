<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <style>
        .container-signin {
        padding-right : 20px;
        padding-left : 20px;
        padding-top : 21px;
        padding-bottom : 20px;
    }

    .container-home {
        padding: 20px 16px 20px;
    }

    .h1-signin {
        font-size : 30px;
        font-family : "Roboto";
        font-style : bold;
    }

    .btn-daftar {
        width: 100%;
        height: 40px;
        background-color: #01B7BB;
        color : #ffffff;
        border-style: none;
        font-family : "Roboto";
        font-style : bold;
    }

    .txtlogin {
        font-family: Roboto;
        font-size: 16px;
        font-style: medium;
        font-weight: 500;
        line-height: 24px; /* 150% */
        letter-spacing: 0.25px;
        text-align: left;
        padding-left: 20px;
        padding-right: 20px;
    }

    .formlogin {
        border-style:solid; 
        border-width:2px; 
        border-color:#97CBCC;
        padding-bottom:24px;
    }

    .kotak1 {
        margin-top: 25px;
        margin-left: 16px;
        margin-right: 16px;
        background-color:#fff;
        min-height: 160px; 
        max-height: auto;
        width: 328px;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.05);
        padding-left: 16px;
        padding-top:12px;
        padding-right:16px;
        padding-bottom:12px;
    }

    .kotak2 {
        margin-top: 36px;
        margin-left: 16px;
        margin-right: 16px;
        margin-bottom: 36px;
        background-color:#fff;
        height: 106px; 
        width: 328px;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.05);
        padding: 12px 16px 12px;
    }
    
    .kotak3 {
        width: 328px;
        min-height: 245px;
        max-height: auto;
        flex-shrink: 0;
        padding: 12px 7px 12px;
        border-radius: 10px;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.05);
    }

    .kotak4 {
        margin-top: 24px;
        width: 328px;
        height: 64px;
        flex-shrink: 0;
        padding: 22px 15px 22px;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.05);
    }

    .kotak5{
        margin-top: 24px;
        width: 328px;
        height: 40px;
        flex-shrink: 0;
        border-radius: 10px;
        background: rgba(255, 9, 9, 0.10);
        padding: 8px;
    }

    .kotak6 {
        padding : 9px;   
        width: 328px;
        height: 90px;
        flex-shrink: 0;
        border-radius: 10px;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.05);
    }

    .judul {
        color: #FFFFFF;
        font-family: Roboto;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 40px; /* 133.333% */
        letter-spacing: 0.25px;
    }
    
    .subjudul {
        color: var(--m-3-sys-light-on-surface, #1D1B20);
        font-family: Roboto;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 24px; /* 150% */
        letter-spacing: 0.5px;
    }

    .isi {
        color: var(--m-3-sys-light-on-surface-variant, #49454F);
        /* M3/body/medium */
        font-family: Roboto;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px; /* 142.857% */
        letter-spacing: 0.25px;
    }

    .lck {
        margin-top:8px;
        color: #01B7BB;
        text-align: center;
        font-family: Roboto;    
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 24px; /* 150% */
        letter-spacing: 0.5px;

    }
    
    .nama {
        color: var(--m-3-sys-light-on-surface, #1D1B20);
        /* M3/title/medium */
        font-family: Roboto;
        font-size: 16px;
        font-style: medium;
        font-weight: 500;
        line-height: 24px; /* 150% */
        letter-spacing: 0.15px;
    }

    .nohp {
        color: #777777;
        font-family: Roboto;
        font-size: 14px;
        font-style: medium;
        font-weight: 500;
        line-height: 20px; /* 142.857% */
        letter-spacing: 0.25px;
    }

    .alamat {
        color: #777777;
        font-family: Roboto;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px; /* 166.667% */
        letter-spacing: 0.25px;
    }

    .jdlsurat {
        align-self: stretch;
        color: #49454F;
        /* M3/title/medium */
        font-family: Roboto;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px; /* 150% */
        letter-spacing: 0.15px;
    }

    .logasadmin {
        color: #01B7BB;
        font-family: Roboto;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px; /* 166.667% */
        letter-spacing: 0.25px;
        padding: 16px 0px 10px;
    }

    .dtdiri {
        color: #49454F;
        /* M3/body/small */
        font-family: Roboto;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 16px; /* 133.333% */
        margin-top:13px;
    }

    .isidtdiri {
        width: 236px;
        color: var(--m-3-sys-light-on-surface, #1D1B20);
        font-family: Roboto;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px; /* 150% */
        letter-spacing: 0.15px;
    }
    .formgaris {
        width: 296px;
        border-width:1px;
        border-style: solid;
        border-color: #CAC4D0;
        border-top : 0px;
        border-left : 0px;
        border-right : 0px;
        border-radius : 0;
    }
    </style>
</head>


</html>