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
    {{-- <link href="{{ route('css/app.css') }}" rel="stylesheet"> --}}
    </head>
    </head>
    <title>@yield('titulo')</title>
  </head>
  <body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav><br> --}}
      <header id="head">
        <img id="head-img" src="https://manzanillo.gob.mx/assets/img/escudo_de_armas.png">

        <div id="link">
            <a href="{{route('programa.index')}}">Inicio</a>
            <a href="{{route('programa.index')}}">Programas</a>
        </div>
    </header>


        @yield('contenido')


        {{-- <footer id="footer">

          <div class="footer-newsletter" style=" background: url('/assets/img/footer_newsletter_veda.png') no-repeat center;  background-size: cover;">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8 text-white">
                          

                          <p class="tw-normal text-2xl title-ayuntamiento">Telefonos de Contacto</p>

                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <a href="tel:+523141372312">
                                      <h5 class="fw-bold text-white">(314) 137 2312</h5>
                                      <p class="text-xs text-white">Predial y Panteón</p>
                                  </a>
                              </div>

                              <div class="col-md-3 col-sm-6 mt-md-0">
                                  <a href="tel:+523141372269">
                                      <h5 class="fw-bold text-white">(314) 137 2269</h5>
                                      <p class="text-xs text-white">Catastro</p>
                                  </a>
                              </div>

                              <div class="col-md-3 col-sm-6 mt-lg-0">
                                  <a href="tel:+523141372272">
                                      <h5 class="fw-bold text-white">(314) 137 2272</h5>
                                      <p class="text-xs text-white">Licencias</p>
                                  </a>
                              </div>

                              <div class="col-md-3 col-sm-6 mt-lg-0">
                                  <a href="tel:+523143322124">
                                      <h5 class="fw-bold text-white">(314) 332 2124</h5>
                                      <p class="text-xs text-white">Tránsito y Vialidad</p>
                                  </a>
                              </div>
                          </div>

                      </div>
                      <div class="col-lg-4 text-white"></div>
                  </div>
              </div>
          </div>

          <div class="footer-top">
              <div class="container">
                  <div class="row">

                  <div class="col-lg-3 col-md-6 footer-contact">
                      
                                                  <h3><img src="https://manzanillo.gob.mx/assets/img/escudo_de_armas.png" alt="H. Ayuntamiento de Manzanillo" width="50%"></h3>
                                              <p>
                          C. Juárez #100, Col. Centro, CP 28200<br>
                          Manzanillo, Colima, México.
                      </p>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Gobierno</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://manzanillo.gob.mx/gobierno/presidenta">Presidenta Municipal</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://manzanillo.gob.mx/gobierno/cabildo">Cabildo</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://manzanillo.gob.mx/gobierno/sesiones-cabildo">Sesiones de Cabildo</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://transparencia.manzanillo.gob.mx/index.php/Home/detalle/1/7">Directorio Telefonico</a></li>
                          
                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Transparencia</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://transparencia.manzanillo.gob.mx/index.php/Home/articulo/1">Articulo 29</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://transparencia.manzanillo.gob.mx/index.php/Home/articulo/2">Articulo 33</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://manzanillo.gob.mx/informacion-municipal">Información Municipal</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="https://manzanillo.gob.mx/aviso_privacidad">Aviso de Privacidad</a></li>
                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Nuestras Redes Sociales</h4>
                      <p class="text-justify">Mantente al tanto de las noticias del momento a través de nuestras redes sociales.</p>
                      <div class="social-links mt-3">
                          
                          <div class="fb-like social-links mt-3 fb_iframe_widget" data-href="https://www.facebook.com/H.AyuntamientodeManzanillo" data-width="250" data-layout="standard" data-action="like" data-size="large" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=261&amp;href=https%3A%2F%2Fwww.facebook.com%2FH.AyuntamientodeManzanillo&amp;layout=standard&amp;locale=es_ES&amp;sdk=joey&amp;share=false&amp;size=large&amp;width=250"><span style="vertical-align: bottom; width: 250px; height: 28px;"><iframe name="f1054ceeb979f38" width="250px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df13cb07ae7cf008%26domain%3Dmanzanillo.gob.mx%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fmanzanillo.gob.mx%252Ff3654141349d5f8%26relation%3Dparent.parent&amp;container_width=261&amp;href=https%3A%2F%2Fwww.facebook.com%2FH.AyuntamientodeManzanillo&amp;layout=standard&amp;locale=es_ES&amp;sdk=joey&amp;share=false&amp;size=large&amp;width=250" style="border: none; visibility: visible; width: 250px; height: 28px;" class=""></iframe></span></div>
                      </div>
                  </div>

                  </div>
              </div>
          </div>

          <div class="container py-4">
              <div class="copyright text-white">
                  © Copyright <strong>H. Ayuntamiento de Manzanillo 2021 - 2024</strong>
              </div>
          </div>

      </footer> --}}
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>