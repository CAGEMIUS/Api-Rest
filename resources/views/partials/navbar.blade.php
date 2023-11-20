<nav class="navbar navbar-expand-md navbar-dark fixed-top shadow-sm" style="background-color: #000000;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logo.png') }}" alt="logo Coca-Cola" height="36">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('dashboard') }}">PAGINA PRINCIPAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('product_client') }}">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('shop') }}">TIENDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('client_service') }}">SERVICIO AL CLIENTE</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                       href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"
                    >
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart fa-lg"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>