@extends('layouts.compra')

@section('content')
    <head>
        <!-- Estilo CSS -->
        <link rel="stylesheet" href="{{asset('assets/product.css')}}">
        <!-- Estilo de la letra -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline+Regular" rel="stylesheet">
    </head>
   <!--categoria y imagenes de los productos-->
   <main class="prd productos"> 
        <h2>Nuestras Marcas</h2>
        <nav class="categorias">
            <ul>
                <li><a href="#">Todas</a></li>
                <li><a href="#">Bebidas Alcohólicas</a></li>
                <li><a href="#">Bebidas Carbonatadas</a></li>
                <li><a href="#">Hidratación</a></li>
                <li><a href="#">Tea</a></li>
            </ul>
        </nav>
        <div class="galeria">
            <div class="imagen">
                <img src="../img/Producto1.png" alt="Marca 1">
            </div>
            <div class="imagen">
                <img src="../img/Producto2.png" alt="Marca 2">
            </div>
            <div class="imagen">
                <img src="../img/Producto3.png" alt="Marca 3">
            </div>
        </div>
        <div class="galeria2">
            <div class="imagen">
                <img src="../img/Producto4.png" alt="Marca 4">
            </div>
            <div class="imagen">
                <img src="../img/Producto5.png" alt="Marca 5">
            </div>
            <div class="imagen">
                <img src="../img/Producto6.png" alt="Marca 6">
            </div>
            <div class="imagen">
                <img src="../img/Producto7.png" alt="Marca 7">
            </div>
        </div>
    </main>
@endsection