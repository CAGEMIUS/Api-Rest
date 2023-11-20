 <!--Pie de pagina-->
 <footer class="Pie-pagina">
        <div class="Grupo-1">
            <div class="caja">
                <figure>
                    <a href="{{ auth()->check() ? route('dashboard') : route('welcome') }}">  <!-- Verifica si el usuario esta idenficado-->
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