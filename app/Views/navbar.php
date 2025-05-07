<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('/') ?>">
            <img src="<?= base_url('img/2deepimg-1745698866795.png') ?>" alt="TryHardWare Logo" height="30"
                class="d-inline-block align-text-top" />
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Categorías</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="<?= site_url('products?cat=pc') ?>">PC</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=laptop') ?>">Laptop</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=monitor') ?>">Monitor</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=teclado') ?>">Teclado</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=mouse') ?>">Mouse</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=auriculares') ?>">Auriculares</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=placas-video') ?>">Placas de video</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=placa-madre') ?>">Placa Madre</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=ram') ?>">RAM</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=almacenamiento') ?>">Almacenamiento</a>
                        <a class="dropdown-item" href="<?= site_url('products?cat=fuente') ?>">Fuente</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('faq') ?>">Preguntas Frecuentes</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0" role="search" action="<?= site_url('products') ?>" method="get">
                <input class="form-control me-sm-2" type="search" name="q" placeholder="Buscar productos..."
                    aria-label="Buscar" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Buscar
                </button>
            </form>
            <!-- Carrito -->
            <div class="row">
                <div class="d-flex align-items-center ms-3 col">
                    <a href="<?= site_url('cart') ?>" class="btn btn-outline-light" title="Carrito">
                        <img src="<?= base_url('img/icons/carrito.png') ?>" alt="carrito" height="30" style="filter: brightness(0) invert(1);">
                    </a>
                </div>
                <!-- Usuario -->
                <div class="d-flex align-items-center ms-3 position-relative col">
                    <a href="#" id="userIcon" class="btn btn-outline-light ms-auto" title="Usuario">
                        <img src="<?= base_url('img/icons/usuario.png') ?>" alt="User Icon" height="30" style="filter: brightness(0) invert(1);">
                    </a>
                    <div id="userOptions" class="position-absolute bg-dark rounded shadow p-2"
                        style="top: 40px; right: 0; display: none; z-index: 1000;">
                        <a href="<?= site_url('login') ?>" class="btn btn-outline-light w-100 mb-2">Iniciar Sesión</a>
                        <a href="<?= site_url('register') ?>" class="btn btn-outline-light w-100">Registrarse</a>
                        <a href="<?= site_url('user') ?>" class="btn btn-outline-light w-100 mt-2">Mi Cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>