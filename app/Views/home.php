<!DOCTYPE html>
<html lang="es">

<head>
    <title>TryHardWare</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo-favicon.png') ?>" type="image/x-icon" />

    <style>
        /*.carousel-inner img {
            width: 100%;
            max-height: 100vh;
            object-fit:cover;
        }*/
        .carousel-inner,
        .carousel-item,
        .carousel-inner img {
            height: 94vh;
        }

        @media (max-width: 768px) {
            .carousel-inner,
            .carousel-item,
            .carousel-inner img {
                height: 40vh;
            }
        }

        .categoria-card {
            /*max-width: 160px;*/
            margin: 0.5rem auto;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .categoria-card:hover {
            transform: translateY(-8px) scale(1.04);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .productos-actuales .card {
            transition: box-shadow 0.2s, transform 0.2s;
        }

        .productos-actuales .card:hover {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
            transform: translateY(-6px) scale(1.02);
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?= view('navbar') ?>
    </header>

    <main class="flex-grow-1">
        <!-- Carousel -->
        <section>
            <div id="carouselId" class="carousel slide mb-5" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <a href="<?= site_url('black-friday') ?>"><img src="<?= base_url('img/black-friday.jpg') ?>" class="w-100 d-block"
                                alt="First slide" /></a>
                    </div>
                    <div class="carousel-item">
                        <a href="<?= site_url('black-friday') ?>"><img src="<?= base_url('img/Productos/Descuentos publicidad.jpg') ?>"
                                class="w-100 d-block" alt="Second slide" /></a>
                    </div>
                    <div class="carousel-item">
                        <a href="<?= site_url('PC') ?>"><img src="<?= base_url('img/Productos/presentacion prearmadas.jpg') ?>"
                                class="w-100 d-block" alt="Third slide" /></a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </section>

        <!-- Categorías -->
        <section>
            <h1 class="display-4 text-center mb-4">Explorar categorías</h1>
            <div class="container">
                <div class="row justify-content-center flex-wrap">
                    <div class="col-auto">
                        <a href="<?= site_url('pc') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/001-pc.png') ?>" alt="PC" class="card-img-top img-fluid"
                                    style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">PC</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('laptop') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/laptop.png') ?>" alt="Laptop" class="card-img-top img-fluid"
                                    style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Laptop</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('monitor') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/003-monitor.png') ?>" alt="Monitor" class="card-img-top img-fluid"
                                    style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Monitor</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('teclado') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/008-keyboard.png') ?>" alt="Teclado"
                                    class="card-img-top img-fluid" style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Teclado</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('mouse') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/009-mouse.png') ?>" alt="Mouse" class="card-img-top img-fluid"
                                    style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Mouse</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('auriculares') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/006-headphone.png') ?>" alt="Auriculares"
                                    class="card-img-top img-fluid" style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Auriculares</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('placas-video') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/004-vga-card.png') ?>" alt="Placas de videos"
                                    class="card-img-top img-fluid" style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Placas de video</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('placa-madre') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/placa-madre.png') ?>" alt="Placa Madre"
                                    class="card-img-top img-fluid" style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Placa Madre</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('ram') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/ram.png') ?>" alt="RAM" class="card-img-top img-fluid"
                                    style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">RAM</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('almacenamiento') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/005-harddisk.png') ?>" alt="Almacenamiento"
                                    class="card-img-top img-fluid" style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Almacenamiento</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('fuente') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card categoria-card">
                                <img src="<?= base_url('img/icons/psu.png') ?>" alt="Fuente" class="card-img-top img-fluid"
                                    style="max-height: 135px; object-fit: contain;" />
                                <div class="card-body p-2">
                                    <h5 class="card-title text-center mb-0">Fuente</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Productos actuales -->
        <section class="py-5 productos-actuales">
            <h2 class="display-5 text-center mb-4">Productos actuales más populares</h2>
            <div class="container">
                <div class="row justify-content-center">

                    <!-- Producto 1 -->
                    <div class="col-md-4 mb-4">
                        <a href="<?= site_url('producto') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card h-100 shadow">
                                <img src="<?= base_url('img/Productos/rtx 5060ti-16gb.webp') ?>" class="card-img-top"
                                    alt="NVIDIA RTX 5060ti-16gb" style="object-fit:contain; max-height:220px;">
                                <div class="card-body">
                                    <h5 class="card-title">NVIDIA GeForce RTX 5060TI 16GB</h5>
                                    <p class="card-text" style="text-align: justify;">NVIDIA® GeForce RTX™ 5060 Ti,
                                        impulsada por la arquitectura NVIDIA Blackwell, permite revolucionarias
                                        capacidades de IA en los últimos juegos y aplicaciones. Multiplica el
                                        rendimiento con NVIDIA DLSS 4, disfruta de gráficos realistas con el ray tracing
                                        y lleva tu creatividad aún más lejos con NVIDIA Studio.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Producto 2 -->
                    <div class="col-md-4 mb-4">
                        <a href="<?= site_url('producto') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card h-100 shadow">
                                <img src="<?= base_url('img/productos/gigabyte-radeon-rx-9070-xt-aorus-elite-16g.jpg') ?>"
                                    class="card-img-top" alt="radeon rx 9070xt"
                                    style="object-fit:contain; max-height:220px;">
                                <div class="card-body">
                                    <h5 class="card-title">AMD Radeon RX 9070XT</h5>
                                    <p class="card-text" style="text-align: justify;">Las tarjetas gráficas AMD Radeon™
                                        RX Serie 9000 están diseñadas para ofrecerte todo lo que necesitas a fin de
                                        disfrutar experiencias de juego ultrarrápidas con imágenes y funciones de última
                                        generación, potenciadas con IA.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Producto 3 -->
                    <div class="col-md-4 mb-4">
                        <a href="<?= site_url('producto') ?>" style="text-decoration: none; color: inherit;">
                            <div class="card h-100 shadow">
                                <img src="<?= base_url('img/productos/Asus-ROG-Strix-XG27UCDMG.jpg') ?>" class="card-img-top"
                                    alt="Asus ROG Strix XG27UCDMG" style="object-fit:cover; max-height:220px;">
                                <div class="card-body">
                                    <h5 class="card-title">Asus ROG Strix XG27UCDMG</h5>
                                    <ul class="mb-0 ps-3">
                                        <li style="text-align: justify;">Monitor gaming WOLED brillante QHD (2560 x
                                            1440) de 26,5 pulgadas con frecuencia de actualización de 240 Hz y tiempo de
                                            respuesta de 0,03 ms para juegos inmersivos.</li>
                                        <li style="text-align: justify;">Disipador de calor personalizado de alta
                                            eficiencia, diseño de flujo de aire avanzado y funciones ASUS OLED Care para
                                            reducir el riesgo de quemaduras.</li>
                                        <li style="text-align: justify;">La tecnología WOLED de tercera generación
                                            proporciona ventanas completamente blancas más brillantes, texto más claro y
                                            claridad de movimiento mejorada.</li>
                                        <li style="text-align: justify;">Tecnología ROG Gaming A.I con funciones
                                            impulsadas por IA para mejorar la experiencia de juego de los usuarios.</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div>
        <?= view('footer') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/modular-navbar-footer.js') ?>"></script>
</body>

</html>