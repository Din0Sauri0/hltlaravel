<!-- ========== NAVBAR HEADER recorda poner class para efecto y fixed-top  hlt-menu ========== -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  hlt-menu ">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Purgatorio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mausoleo-de-historias') }}">Mausoleo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sabias-que') }}">Sabías que?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('club-lloron') }}">Club Llorón</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sepulturero') }}">Sepulturero</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('cuentanos-tu-historia') }}" title="">
                        <button type="button" class="btn btn-danger">Confiésate</button>
                    </a>
                </li>
            </ul>
        </div>
        <button id="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight" class="d-none d-md-block d-lg-block"><span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- LATERAL SOCIAL-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ...
    </div>
</div>
<!-- ========== BARRA SOCIALES LATERAL HOME  ========== -->
