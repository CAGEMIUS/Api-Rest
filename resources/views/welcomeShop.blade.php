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
    <link rel="stylesheet" href="{{asset('assets/welcomeShop.css')}}">
    <!-- Estilo CSS del pie de pagina-->
    <link rel="stylesheet" href="{{asset('assets/footer.css')}}">
    <!-- Iconos del pie de pagina-->
    <script src="https://kit.fontawesome.com/6868c404bc.js" crossorigin="anonymous"></script>
    <!-- Icono de la pagina-->
    <link rel="icon" href="../img/icono.png">
    <!-- Titulo de la pagina -->
    <title>Tienda Coca-Cola</title>
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
    <!--Seccion de compras-->
    <main> 
        <!-- Contenedor del mensaje y botones -->
        <div id="mensaje-container" style="display: none; background-color: #dc3545; color: #fff; padding: 10px; margin-top: 10px; text-align: center;">
            <p style="margin-bottom: 20px;">Por favor, inicia sesión o crea una cuenta para comprar el producto.</p>
            <button onclick="redirigir('login')" class="btn btn-light">Iniciar sesión</button>
            <button onclick="redirigir('register')" class="btn btn-light">Registrarse</button>
        </div>
        <h1>!Destapa la felicidad¡</h1>
        <div class="container">
            <div class="box">
                <img src="../img/Compra1.png" alt="Product 1">
                <div class="capa">
                    <p class="price" id="price1">COP 10000</p>
                    <a href="#" class="buy-btn" onclick="mostrarMensaje()">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="../img/Compra2.png" alt="Product 2">
                <div class="capa">
                    <p class="price" id="price2">COP 15000</p>
                    <a href="#" class="buy-btn" onclick="mostrarMensaje()">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="../img/Compra3.png" alt="Product 3">
                <div class="capa">
                    <p class="price" id="price3">COP 20000</p>
                    <a href="#" class="buy-btn" onclick="mostrarMensaje()">Comprar</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <img src="../img/Compra4.png" alt="Product 1">
                <div class="capa">
                    <p class="price" id="price1">COP 10000</p>
                    <a href="#" class="buy-btn" onclick="mostrarMensaje()">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="../img/Compra5.png" alt="Product 1">
                <div class="capa">
                    <p class="price" id="price1">COP 10000</p>
                    <a href="#" class="buy-btn" onclick="mostrarMensaje()">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="../img/Compra6.png" alt="Product 1">
                <div class="capa">
                    <p class="price" id="price1">COP 10000</p>
                    <a href="#" class="buy-btn" onclick="mostrarMensaje()">Comprar</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Script para mostrar el mensaje y redirigir -->
    <script>
        function mostrarMensaje() {
            var mensajeContainer = document.getElementById('mensaje-container');
            mensajeContainer.style.display = 'block';
        }

        function redirigir(destino) {
            if (destino === 'login') {
                window.location.href = "{{ route('login') }}";
            } else if (destino === 'register') {
                window.location.href = "{{ route('register') }}";
            }
        }
    </script>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>