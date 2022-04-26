<!DOCTYPE html>
<html lang="es">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="https://manzanillo.gob.mx/assets/img/escudo_de_armas.png">
</head>
<body>

    <header id="head">
        <a href="{{route('programa.index')}}">
            <img id="head-img" src="https://manzanillo.gob.mx/assets/img/escudo_de_armas.png">
        </a>
        
        <div id="link">
            <a href="{{route('programa.index')}}">Inicio</a>
            <a href="#">Cuenta</a>
        </div>
    </header>
    <h2 id="main-title">Ayuntamiento de Manzanillo</h2>
    <p id="main-title">Sistema de inicio de sesión</p>
    <div id="container">
        <div id="main">
            <img id="main-img" src="https://manzanillo.gob.mx/assets/img/escudo_de_armas.png">
            <input id="main-mail" type="text" placeholder="Departamento">
            <input id="main-pwd" type="password" placeholder="Contraseña">
            <form action="{{route('programa.index')}}">
                <button id="main-loginbtn">Iniciar sesión</button>            
            </form>
        </div>
    </div>
</body>
</html>