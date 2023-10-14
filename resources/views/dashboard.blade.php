<head>
 <!-- Estilo CSS -->
<link rel="stylesheet" href="{{asset('assets/welcome.css')}}">
 <!-- Estilo de la letra -->
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline+Regular" rel="stylesheet">
<!-- Iconos del pie de pagina-->
<script src="https://kit.fontawesome.com/6868c404bc.js" crossorigin="anonymous"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Destapa la felicidad') }}
        </h2>
    </x-slot>
     <!--Imagenes con efecto-->
     <main> 
        <div class="container1">
            <div class="box"> 
                <img src="{{ asset('img/Coca-Cola-1.png') }}" alt="">
                <div class="capa">
                    <h2>Conoce cómo hacerlo</h2>
                </div>
            </div>
        </div>
        <div class="container1">
            <div class="box"> 
                <img src="{{ asset('img/images2.png') }}" alt="">
                <div class="capa">
                    <h2>Nuestras marcas</h2>
                </div>
            </div>
        </div>
        <div class="container1">
            <div class="box"> 
                <img src="{{ asset('img/images3.png') }}" alt="">
                <div class="capa">
                    <h2>Coca-Cola sin azúcar</h2>
                </div>
            </div>
        </div>
    </main>
     <!--Pie de pagina-->
     <footer class="Pie-pagina">
        <div class="Grupo-1">
            <div class="caja">
                <figure>
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo de Coca-Cola Colombia">
                    </a>
                </figure>
            </div>
            <div class="caja">
                <h2>Sobre nosotros</h2>
                <p>En 1886, el Dr. John Pemberton sirvió la primera Coca-Cola en el mundo.</p>
                <p>Desde entonces, no hemos dejado de sorprenderte.</p>
            </div>
            <div class="caja">
                <h2>Siguenos</h2>
                <div class="Red-social">
                    <a href="https://www.facebook.com/TheCocaColaCo/" class="fa-brands fa-facebook"></a>
                    <a href="https://www.instagram.com/cocacolacol/"class="fa-brands fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UCosXctaTYxN4YPIvI5Fpcrw"class="fa-brands fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="Grupo-2">
            <small>&copy; 2023 <b>The Coca-Cola Company</b> - Reservado todos los derechos.</small>
        </div>
    </footer>
</x-app-layout>
