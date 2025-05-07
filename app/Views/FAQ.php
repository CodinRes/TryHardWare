<!DOCTYPE html>
<html lang="es">

<head>
    <title>Preguntas Frecuentes - TryHardWare</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="shortcut icon" href="<?= base_url('img/logo-favicon.png') ?>" type="image/x-icon" />
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?= view('navbar') ?>
    </header>

    <!-- Contenido principal -->
    <main class="flex-grow-1 container my-5">
        <h1 class="mb-4 text-center">Preguntas Frecuentes</h1>
        <div class="accordion" id="faqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cuáles son las principales estrategias de comercialización que
                        utiliza TryHardWare?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        En TryHardWare empleamos diversas estrategias, entre las que se
                        encuentran la publicidad digital (anuncios en redes sociales y
                        buscadores), promociones estacionales, marketing de contenidos a
                        través de blogs y redes sociales, y colaboraciones con influencers
                        en el sector del hardware.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Cómo se lleva a cabo la logística y distribución de los productos?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Contamos con acuerdos con empresas de mensajería reconocidas para
                        asegurar entregas puntuales y seguras. Una vez confirmado el pago,
                        el producto se envía en el plazo estipulado y se proporciona un
                        código de seguimiento para mayor transparencia.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Qué métodos de pago se aceptan en TryHardWare?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Aceptamos una variedad de métodos de pago seguros, incluyendo
                        tarjetas de crédito y débito, PayPal, Mercado Pago y transferencias bancarias.
                        Todos los pagos se procesan a través de plataformas seguras y
                        encriptadas para garantizar la protección de sus datos.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Existe algún programa o descuento especial para clientes
                        habituales o empresas?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sí, en TryHardWare ofrecemos programas de fidelización y
                        descuentos corporativos. Los clientes habituales pueden acumular
                        puntos con cada compra que pueden canjearse por descuentos
                        futuros, y las empresas pueden optar a condiciones especiales
                        basadas en el volumen y frecuencia de sus pedidos.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Qué garantías ofrecen sobre la calidad y el soporte técnico de
                        los productos?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Todos nuestros productos cuentan con garantías de calidad
                        proporcionadas por los fabricantes, y en TryHardWare ofrecemos
                        soporte técnico especializado a través de nuestro equipo de
                        atención al cliente. Además, en el caso de cualquier inconveniente
                        o defecto, se aplican nuestras políticas de devolución y cambio.
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        ¿Cómo se manejan las devoluciones y reembolsos en caso de
                        productos defectuosos o insatisfacción?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ofrecemos un período de 30 días para devoluciones y reembolsos. Si
                        el producto presenta algún defecto o no cumple con sus
                        expectativas, puede iniciar el proceso de devolución a través de
                        nuestro servicio al cliente, quien le guiará en los pasos a
                        seguir.
                        <br />
                        <a href="<?= site_url('returns') ?>" class="btn btn-link p-0">Ver política de devoluciones</a>
                    </div>
                </div>
            </div>

            <!-- FAQ 7 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        ¿Qué medidas de seguridad implementa TryHardWare para proteger la
                        información personal de sus clientes?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        En TryHardWare utilizamos protocolos de encriptación y tecnologías
                        avanzadas para proteger la información personal y financiera de
                        nuestros clientes. Además, cumplimos con las normativas de
                        protección de datos vigentes.
                        <br />
                        <a href="<?= site_url('privacy') ?>" class="btn btn-link p-0">Ver política de privacidad</a>
                    </div>
                </div>
            </div>

            <!-- FAQ 8 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        ¿Ofrecen soporte técnico para la instalación y configuración de
                        los productos adquiridos?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sí, ofrecemos soporte técnico a nuestros clientes. Puede contactar
                        a nuestro equipo de atención al cliente para recibir asistencia en
                        la instalación y configuración de los productos adquiridos.
                    </div>
                </div>
            </div>

            <!-- FAQ 9 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        ¿Qué pasos debo seguir para realizar un pedido en línea?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Para realizar un pedido, simplemente navegue por nuestro catálogo,
                        seleccione los productos que desea comprar, añádalos al carrito y
                        siga el proceso de pago. Asegúrese de proporcionar la información
                        de envío y pago correctamente.
                    </div>
                </div>
            </div>

            <!-- FAQ 10 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        ¿Cómo puedo contactar al servicio de atención al cliente de
                        TryHardWare?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Puede contactar a nuestro servicio de atención al cliente a través del correo electrónico a <a
                            href="mailto:soporte@tryhardware.com">soporte@tryhardware.com</a> o llamando al
                        <strong>+34 123 456 789</strong>.
                    </div>
                </div>
            </div>

            <!-- FAQ 11 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        ¿Qué debo hacer si tengo problemas con mi pedido?
                    </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Si tiene problemas con su pedido, por favor contáctenos a través
                        de nuestro servicio de atención al cliente. Estaremos encantados
                        de ayudarle a resolver cualquier inconveniente.
                    </div>
                </div>
            </div>

            <!-- FAQ 12 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        ¿Puedo modificar o cancelar mi pedido después de haberlo
                        realizado?
                    </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Si necesita modificar o cancelar su pedido, contáctenos lo antes
                        posible. Haremos nuestro mejor esfuerzo para atender su solicitud,
                        siempre que el pedido no haya sido procesado aún.
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div>
        <?= view('footer') ?>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>