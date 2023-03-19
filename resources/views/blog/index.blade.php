<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel</title>

    <meta name="description" content="Semua artikel yang admin buat ini berdasarkan pemikiran admin pribadi, pengalaman admin dan beberapa sumber yang di baca.">

    <meta name="keywords" content="artikel jasa fyp tiktok, artikel fyp tiktok">

    <meta name="author" content="Rizal Ahmad">

    <link rel="canonical" href="https://jasafyp.com/blog"/>

    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://jasafyp.com/blog"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.2') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css?v=1.2') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logotiktok.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/logotiktok.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logotiktok.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logotiktok.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logotiktok.png') }}">

    @include('landingpage.taganalitik')

  </head>

  <body>

    @include('landingpage.navbar')

    <h1>Blogger</h1>

    <div class="container">
        <div class="row-blog">
            <div class="col-blog">
                <img src="{{ asset('img/jasafyptiktok.jpg') }}" alt="algoritma fyp tiktok">
                <h3><a href="/blog/algoritma-fyp-tiktok">Algoritma FYP Tiktok Belum Banyak Orang Tahu!</a></h3>
                <p>Cara atau algoritma fyp tiktok belum banyak yang tahu, hal ini membuat sulit kita untuk bisa viral. Simak algoritmnya berikut versi admin.</p>
            </div>
            
        </div>
    </div>

    @include('landingpage.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <script src="{{ asset('js/order.js') }}"></script>

  </body>


</html>