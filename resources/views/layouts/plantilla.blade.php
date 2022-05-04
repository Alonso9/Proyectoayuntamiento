<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="icon" href="https://manzanillo.gob.mx/assets/img/escudo_de_armas.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
  {{-- <link href="{{ route('css/app.css') }}" rel="stylesheet"> --}}
  <script src="https://kit.fontawesome.com/107a411e2d.js" crossorigin="anonymous"></script>
</head>
</head>
<title>@yield('titulo')</title>
</head>

<body>
  <header id="head">
    <img id="head-img" src="https://manzanillo.gob.mx/assets/img/escudo_de_armas.png">
    <div id="link">
      <a href="{{route('programa.index')}}">Inicio</a>
      <a href="{{route('programa.index')}}">Programas</a>
    </div>
  </header>


  @yield('contenido')

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>