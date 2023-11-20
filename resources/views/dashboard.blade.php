<head>
    <!-- Estilo CSS -->
    <link rel="stylesheet" href="{{asset('assets/welcome.css')}}">
    <!-- Estilo de la letra -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline+Regular" rel="stylesheet">
    <!-- Estilo del pie de pagina-->
    <link rel="stylesheet" href="{{asset('assets/footer.css')}}">
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
                <a href="{{ route('shop') }}">
                    <img src="{{ asset('img/Coca-Cola-1.png') }}" alt="">
                    <div class="capa">
                        <h2>Conoce cómo hacerlo</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="container1">
            <div class="box"> 
                <a href="{{ route('shop') }}">
                    <img src="{{ asset('img/images2.png') }}" alt="">
                    <div class="capa">
                        <h2>Nuestras marcas</h2>
                    </div> 
                </a>
            </div>
        </div>
        <div class="container1">
            <div class="box"> 
                <a href="{{ route('shop') }}">
                    <img src="{{ asset('img/images3.png') }}" alt="">
                    <div class="capa">
                        <h2>Coca-Cola sin azúcar</h2>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</x-app-layout>
