<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ada</title>

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta name="author" content="Rizal Ahmad">

    <meta http-equiv="content-language" content="id-id">
    <meta http-equiv="content-language" content="id">
    <meta http-equiv="content-language" content="en-us">

    <meta property="og:locale" content="id" />
    <meta property="og:image" content="{{ asset('img/logotiktok.webp') }}" />
    <meta property="og:type" content="website"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.6') }}">

    @include('landingpage.taganalitik')

    <style>
        body{
            background-color: black;
        }
        .konten-eror{
            width: 80%;
            height: 65vh;
            margin: auto 10%;
        }
        .judul{
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-top: 35vh;
            color: rgb(204, 204, 204);
        }
        span{
            color: rgb(165, 8, 46);
            font-size: 50px;
        }
    </style>

  </head>

  <body>

    @include('landingpage.navbar')

    <div class="container">
        <div class="konten-eror">
            <div class="judul">Halaman Tidak Di Temukan <br> <span>Silahkan Kembali :)</span></div>
        </div>
    </div>

    @include('landingpage.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <script src="{{ asset('js/order.js') }}"></script>

  </body>


</html>