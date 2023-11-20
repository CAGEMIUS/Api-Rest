<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Estilo fonts de la letra -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline+Regular" rel="stylesheet">
    <!-- Estilo CSS de la pagina-->
    <link rel="stylesheet" href="{{asset('assets/service.css')}}">
    <!-- Estilo CSS del pie de pagina-->
    <link rel="stylesheet" href="{{asset('assets/footer.css')}}">
    <!-- Iconos del pie de pagina-->
    <script src="https://kit.fontawesome.com/6868c404bc.js" crossorigin="anonymous"></script>
    <!-- Icono de la pagina-->
    <link rel="icon" href="../img/icono.png">
    <!-- Titulo de la pagina -->
    <title>Servicio al cliente Coca-Cola</title>
</head>
<body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #000000;">
        <div class="container">
            <!-- logo de la empresa-->
            <a class="navbar-brand" href="{{ auth()->check() ? route('dashboard') : route('welcome') }}">
                <img src="{{ asset('img/logo.png') }}" alt="logo Coca-Cola" height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/dashboard') }}">PAGINA PRINCIPAL</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">INICIAR SESIÓN</a>
                    </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('register') }}">REGISTRARSE</a>
                    </li>
                @endif
                    @endauth
                @endif
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('welcomeProduct') }}">PRODUCTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('welcomeShop') }}">TIENDA</a>
                    </li>           
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('welcomeService') }}">SERVICIO AL CLIENTE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <!--Informacion servicio al cliente-->
     <main> 
        <h1>Servicio al cliente de Coca-Cola</h1>
        <nav class="categorias">
            <img src="../img/gifservicecliet.gif" alt="gif">
            <h2>Las mejores soluciones para para tí</h2>
        </nav>
        <h3>Si tiene alguna duda, queja o reclamo. Comuníquese a las siguientes líneas de atención</h3>
        <div class="calls">
            <img src="../img/ICONOWASAP.png" alt="No. WhatsApp">
            <h2>312-560-88-36</h2>
        </div>
        <div class="calls">
            <img src="../img/ICONOTELEFONO.png" alt="No. Telefono">
            <h2>601-460-24-13</h2>
        </div>
        <div class="calls">
            <img src="../img/ICONOGMAIL.png" alt="Gmail">
            <h2>Coca-Cola_Colombia@gmail.com</h2>
        </div>
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>