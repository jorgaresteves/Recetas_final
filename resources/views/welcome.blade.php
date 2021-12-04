@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
                <!-- Carousel -->
                <div class="banner_sec layout_padding ">
                <div class="container">
                <div class="owl-carousel owl-theme">

                <div class="item">
                <img src="https://cdn.kiwilimon.com/articuloimagen/30434/28870.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="item">
                <img src="https://www.paulinacocina.net/wp-content/uploads/2020/01/untitled-copy.jpg" class="d-block w-100" alt="...">

                </div>
                </div>
                </div>
                </div>
                <!-- Carousel end section-->

                <!-- Recetas section start -->
                <div id="Rectas" class="recetas_sec layout_padding">
                <div class="container">
                <h1 class="our_text">Nuestras <span style="color: #161c1e;">favoritas</span></h1>
                <div class="recetas_sec_2">
                <!-- Carousel -->
                <div class="owl-carousel owl-theme">
                <div class="item">
                <div class="rectas_main">
                <div class="round_1">Mex</div>

                <h2 class="carol_text">Nachos a la diabla</h2>
                <p class="reader_text">Nachos con carne y <br>
                bañados en salsa chipotle </p>
                <div class="img-fluid"><a href="{{ route('recetas.index') }}"><img src="{{ asset('img/Nachos.jpg') }}"></a></div>
                </div>
                </div>
                <div class="item">
                <div class="rectas_main">
                <div class="round_1">Mex</div>

                <h2 class="carol_text">Tacos de pastor</h2>
                <p class="reader_text">Directo de la  <br>
                taquería a tu cocina </p>
                <div class="img-fluid"><a href="{{ route('recetas.index') }}"><img src="{{ asset('img/Pastor.jpg') }}"></a></div>

                </div>
                </div>
                </div>
                <!-- Carousel end section-->
                </div>
                </div>
                </div>
                <!-- Recetas section end -->

                <!-- section footer start -->
                <div class="section_footer ">
                <div class="container">
                <div class="footer_section_2">
                <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Dirección</h2>
                <p class="ipsum_text">No tenemos, muchas gracias</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Links</h2>
                <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Home</span></a></div>
                <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Recetas</span></a></div>
                <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Ingredientes</span></a></div>
                <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Contact Us</span></a></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Siguenos</h2>
                <div class="image-icon"><img src="{{ asset('img/fb-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Facebook</a></span></div>
                <div class="image-icon"><img src="{{ asset('img/twitter-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Twitter</a></span></div>
                <div class="image-icon"><img src="{{ asset('img/youtube-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Youtube</a></span></div>
                <div class="image-icon"><img src="{{ asset('img/instagram-icon.png') }}"><span class="fb_text link"><a href="#" class="link">Instagram</a></span>
                </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="adderess_text">Newsletter</h2>
                <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
                <button class="subscribr_bt">SUBSCRIBE</button>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <!-- section footer end -->

    </body>
</html>

@endsection