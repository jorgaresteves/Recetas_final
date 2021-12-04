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
<body>
<div class="container">
   <div class="row">
    <div class="col-md-12 text-right">
        <a href="{{  route('recetas.create')  }}" class="btn btn-primary mb-3 subscribr_bt">Crear Nueva Receta</a>
    </div>
   </div>
</div>

<div class="container">
   <div class="row">
    <div class="col-md-12">
        <h4>Mis Recetas</h4>
    </div>
   </div>
</div>

        <!-- Carousel -->
        <div id="Rectas" class="recetas_sec layout_padding">
        <div class="container">
        <h1 class="our_text">Nuestras <span style="color: #161c1e;">favoritas</span></h1>
        <div class="recetas_sec_2">
            <div class="owl-carousel owl-theme">
                     @foreach($recipes as $recipe)
                     @if($recipe->country == 'Mexico')
                <div class="item">
                <div class="rectas_main">
                <div class="round_1">{{ $recipe->country }}</div>
                <h2 class="carol_text">{{ $recipe->name }}</h2>
                <p class="reader_text">{{ $recipe->description }}</p>
                <div class="img-fluid">
                    <img src="{{ asset('img/'. $recipe->name . '.jpg') }}" alt="{{ $recipe->name }}">
                </div>
                <a href="{{ route('recetas.edit', $recipe->id) }}" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                <form method="POST" style="display: inline-block;" action="{{ route('recetas.destroy', $recipe->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <button type="submit" data-toggle="tooltip" data-placement="top" title="Borrar" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
                </div>
                </div>
                        @endif  
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="Rectas" class="recetas_sec layout_padding">
        <div class="container">
        <h1 class="our_text">Nuestras <span style="color: #161c1e;">favoritas</span></h1>
        <div class="recetas_sec_2">
            <div class="owl-carousel owl-theme">
                     @foreach($recipes as $recipe)
                     @if($recipe->country == 'Italia')
                <div class="item">
                <div class="rectas_main">
                <div class="round_1">{{ $recipe->country }}</div>
                <h2 class="carol_text">{{ $recipe->name }}</h2>
                <p class="reader_text">{{ $recipe->description }}</p>
                <div class="img-fluid">
                    <img src="{{ asset('img/'. $recipe->name . '.jpg') }}" alt="{{ $recipe->name }}">
                </div>
                <a href="{{ route('recetas.edit', $recipe->id) }}" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                <form method="POST" style="display: inline-block;" action="{{ route('recetas.destroy', $recipe->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <button type="submit" data-toggle="tooltip" data-placement="top" title="Borrar" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
                </div>
                </div>
                        @endif  
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="Rectas" class="recetas_sec layout_padding">
        <div class="container">
        <h1 class="our_text">Nuestras <span style="color: #161c1e;">favoritas</span></h1>
        <div class="recetas_sec_2">
            <div class="owl-carousel owl-theme">
                     @foreach($recipes as $recipe)
                     @if($recipe->country == 'Americana')
                <div class="item">
                <div class="rectas_main">
                <div class="round_1">{{ $recipe->country }}</div>
                <h2 class="carol_text">{{ $recipe->name }}</h2>
                <p class="reader_text">{{ $recipe->description }}</p>
                <div class="img-fluid">
                    <img src="{{ asset('img/'. $recipe->name . '.jpg') }}" alt="{{ $recipe->name }}">
                </div>
                <a href="{{ route('recetas.edit', $recipe->id) }}" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                <form method="POST" style="display: inline-block;" action="{{ route('recetas.destroy', $recipe->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <button type="submit" data-toggle="tooltip" data-placement="top" title="Borrar" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
                </div>
                </div>
                        @endif  
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="Rectas" class="recetas_sec layout_padding">
        <div class="container">
        <h1 class="our_text">Nuestras <span style="color: #161c1e;">favoritas</span></h1>
        <div class="recetas_sec_2">
            <div class="owl-carousel owl-theme">
                     @foreach($recipes as $recipe)
                     @if($recipe->country == 'China')
                <div class="item">
                <div class="rectas_main">
                <div class="round_1">{{ $recipe->country }}</div>
                <h2 class="carol_text">{{ $recipe->name }}</h2>
                <p class="reader_text">{{ $recipe->description }}</p>
                <div class="img-fluid">
                    <img src="{{ asset('img/'. $recipe->name . '.jpg') }}" alt="{{ $recipe->name }}">
                </div>
                <a href="{{ route('recetas.edit', $recipe->id) }}" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                <form method="POST" style="display: inline-block;" action="{{ route('recetas.destroy', $recipe->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <button type="submit" data-toggle="tooltip" data-placement="top" title="Borrar" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
                </div>
                </div>
                        @endif  
                        @endforeach
                </div>
            </div>
        </div>
    </div>
                <!-- Carousel end section-->
            
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

            <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Home</span></a>
            </div>

            <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Recetas</span></a>
            </div>

            <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Ingredientes</span></a>
            </div>

            <div class="image-icon"><img src="{{ asset('img/bulit-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Contact Us</span></a>
            </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Siguenos</h2>

            <div class="image-icon"><img src="{{ asset('img/fb-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Facebook</a></span>
            </div>
            <div class="image-icon"><img src="{{ asset('img/twitter-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Twitter</a></span>
            </div>
            <div class="image-icon"><img src="{{ asset('img/youtube-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Youtube</a></span>
            </div>
            <div class="image-icon"><img src="{{ asset('img/instagram-icon.png') }}">
            <span class="fb_text link"><a href="#" class="link">Instagram</a></span>
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



            <!-- section footer end -->

            <!-- copyright section start -->
            <div class="copyright_section">
            <div class="container">
            <p class="copyright">2021 All Rights Reserved. <a href="">Team boys and Iby</a></p>
            </div>
            </div>
</body>
</html>
@endsection