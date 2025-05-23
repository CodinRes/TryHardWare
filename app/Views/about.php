<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Sobre Nosotros - TryHardWare</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="shortcut icon" href="<?= base_url('img/logo-favicon.png') ?>" type="image/x-icon" />
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?= view('navbar') ?>
    </header>
    
    <!-- Sección de Contenido Principal -->
    <main class="flex-grow-1 container my-5">
        <!-- Nuestra Historia -->
        <section class="mb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="section-title mb-3">Nuestra Historia</h2>
                    <p style="text-align: justify">
                        En <strong>TryHardWare</strong> amamos las ultimas tecnologias,
                        por eso hemos fundado la empresa con la visión de ofrecer
                        productos de alta calidad a precios competitivos y nos hemos
                        comprometido a brindar una experiencia de compra excepcional a
                        nuestros clientes. A lo largo de los años, hemos evolucionado y
                        crecido, manteniéndonos siempre fieles a nuestros valores y a la
                        innovación.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img
                        src="<?= base_url('img/about-us/armando-pc.png') ?>"
                        alt="Nuestra Historia"
                        class="img-fluid rounded shadow"
                    />
                </div>
            </div>
        </section>

        <!-- Misión -->
        <section class="mb-5">
            <div class="row align-items-center flex-md-row-reverse">
                <div class="col-md-6">
                    <h2 class="section-title mb-3">Nuestra Misión</h2>
                    <p style="text-align: justify">
                        Proveer a nuestros clientes con una amplia selección de productos
                        de hardware de la más alta calidad, combinando un excelente
                        servicio al cliente con formas intuitivas y seguras de comprar.
                        Nos esforzamos por construir relaciones de confianza y ofrecer un
                        servicio personalizado, asegurándonos de que cada experiencia con
                        TryHardWare sea satisfactoria y memorable.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img
                        src="<?= base_url('img/about-us/edificio-TryHardWare.png') ?>"
                        alt="Nuestra Misión"
                        class="img-fluid rounded shadow"
                    />
                </div>
            </div>
        </section>

        <!-- Visión -->
        <section class="mb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="section-title mb-3">Nuestra Visión</h2>
                    <p style="text-align: justify">
                        Aspiramos a ser líderes en el sector de venta de hardware,
                        reconocidos por nuestra calidad, simpleza y compromiso con la
                        satisfacción del cliente. Creemos en un futuro donde la tecnología
                        mejora la vida diaria, y trabajamos incansablemente para ser
                        pioneros en esa transformación, ofreciendo los productos que
                        impulsen el progreso tecnológico.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img
                        src="<?= base_url('img/about-us/fundadores-tienda.png') ?>"
                        alt="Nuestra Visión"
                        class="img-fluid rounded shadow"
                    />
                </div>
            </div>
        </section>

        <!-- Equipo -->
        <section class="mb-5">
            <div class="row align-items-center flex flex-row-reverse">
                <div class="col-md-6">
                    <h2 class="section-title mb-3">Nuestro Equipo</h2>
                    <p style="text-align: justify">
                        Contamos con un equipo de entusiastas del hardware, atención al
                        cliente y tecnología, comprometidos con la excelencia y la
                        innovación. Cada miembro aporta su experiencia y dedicación para
                        garantizar la mejor atención y asesoramiento a nuestros clientes,
                        ya sea de forma presencial o virtual.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img
                        src="<?= base_url('img/about-us/equipo-negocio.png') ?>"
                        alt="Nuestro Equipo"
                        class="img-fluid rounded shadow"
                    />
                </div>
            </div>
        </section>

        <!-- Valores -->
        <section class="mb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center mb-4">Nuestros Valores</h2>
                    <div class="d-flex justify-content-center">
                        <ul class="list-group list-group-horizontal-md">
                            <li class="list-group-item border-0 bg-transparent fw-bold text-primary">Calidad</li>
                            <li class="list-group-item border-0 bg-transparent fw-bold text-primary">Simpleza</li>
                            <li class="list-group-item border-0 bg-transparent fw-bold text-primary">Confianza</li>
                            <li class="list-group-item border-0 bg-transparent fw-bold text-primary">Compromiso</li>
                            <li class="list-group-item border-0 bg-transparent fw-bold text-primary">Atención Personalizada</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div>
        <?= view('footer') ?>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
