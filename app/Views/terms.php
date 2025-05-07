<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8"/>
    <title>Términos de Uso - TryHardWare</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('img/logo-favicon.png') ?>" type="image/x-icon" />
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?= view('navbar') ?>
    </header>
    
    <!-- Contenido principal -->
    <main class="flex-grow-1 container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm mb-5">
                    <div class="card-body">
                        <h1 class="card-title mb-4 text-center">Términos de Servicio</h1>
                        <p>
                            Bienvenido a <strong>TryHardWare</strong>. Los presentes términos y condiciones (en
                            adelante, "Términos") regulan el uso de nuestro sitio web y los servicios ofrecidos a través
                            del mismo. Al acceder y utilizar nuestro sitio web, usted acepta cumplir y estar obligado
                            por estos Términos.
                        </p>

                        <h4 class="mt-4">1. Generalidades</h4>
                        <ul>
                            <li>TryHardWare se reserva el derecho de modificar estos términos en cualquier momento sin
                                previo aviso. Se recomienda revisar periódicamente estos términos.</li>
                            <li>El uso continuo del sitio web después de cualquier cambio constituirá la aceptación de
                                dichas modificaciones.</li>
                        </ul>

                        <h4 class="mt-4">2. Registro y Seguridad</h4>
                        <ul>
                            <li>Para realizar compras, puede ser necesario registrarse y crear una cuenta. Usted es
                                responsable de mantener la confidencialidad de su información y contraseña.</li>
                            <li>Debe notificar de inmediato a TryHardWare cualquier uso no autorizado de su cuenta o
                                cualquier otra violación de seguridad.</li>
                        </ul>

                        <h4 class="mt-4">3. Productos y Precios</h4>
                        <ul>
                            <li>Los precios y la disponibilidad de los productos están sujetos a cambios sin previo
                                aviso.</li>
                            <li>TryHardWare informará a los clientes sobre cualquier cambio relevante en productos o
                                precios.</li>
                            <li>Las imágenes y descripciones de los productos son referenciales. En caso de
                                discrepancias, prevalecerá la descripción oficial.</li>
                        </ul>

                        <h4 class="mt-4">4. Proceso de Compra</h4>
                        <ul>
                            <li>Una vez confirmado el pago, se enviará una notificación de compra al correo electrónico
                                proporcionado.</li>
                            <li>El envío de productos se realizará en el plazo indicado, sujeto a disponibilidad de
                                stock y verificación de pago.</li>
                            <li>Es responsabilidad del cliente proporcionar una dirección de envío correcta y
                                actualizada.</li>
                        </ul>

                        <h4 class="mt-4">5. Devoluciones y Reembolsos</h4>
                        <ul>
                            <li>TryHardWare ofrece un período de devolución de 30 días a partir de la fecha de recepción
                                del producto, bajo los términos establecidos en nuestra 
                                <a href="<?= site_url('returns') ?>">Política de Devoluciones</a>.
                            </li>
                            <li>Algunos productos pueden estar sujetos a condiciones especiales de devolución, las
                                cuales estarán claramente indicadas en la descripción del producto.</li>
                        </ul>

                        <h4 class="mt-4">6. Responsabilidad</h4>
                        <ul>
                            <li>TryHardWare no será responsable por daños directos, indirectos, incidentales, especiales
                                o consecuentes derivados del uso o la imposibilidad de uso del sitio o de los productos
                                adquiridos.</li>
                            <li>La responsabilidad en la entrega del producto recae en la empresa de mensajería
                                contratada, una vez que el producto ha sido despachado.</li>
                        </ul>

                        <h4 class="mt-4">7. Protección de Datos</h4>
                        <ul>
                            <li>La información personal recabada será utilizada únicamente para la gestión de pedidos y
                                comunicaciones relacionadas.</li>
                            <li>La protección de sus datos está garantizada mediante las medidas de seguridad adoptadas
                                por TryHardWare. Para más detalles, consulte nuestra 
                                <a href="<?= site_url('privacy') ?>">Política de Privacidad</a>.
                            </li>
                        </ul>

                        <h4 class="mt-4">8. Propiedad Intelectual</h4>
                        <ul>
                            <li>Todo el contenido del sitio (textos, imágenes, logotipos, gráficos, etc.) es propiedad
                                de TryHardWare o de terceros y está protegido por las leyes de propiedad intelectual.
                            </li>
                            <li>Queda prohibida la reproducción total o parcial sin autorización previa y por escrito.
                            </li>
                        </ul>

                        <h4 class="mt-4">9. Ley Aplicable y Jurisdicción</h4>
                        <ul>
                            <li>Estos Términos se rigen e interpretan de acuerdo con las leyes vigentes en el país donde
                                TryHardWare tenga su sede.</li>
                            <li>Cualquier controversia derivada del presente acuerdo será sometida a la jurisdicción de
                                los tribunales competentes.</li>
                        </ul>

                        <h4 class="mt-4">10. Contacto</h4>
                        <p>Si tiene preguntas, comentarios o solicitudes relacionadas con estos términos, puede
                            contactarnos a través de:</p>
                        <ul>
                            <li>Correo electrónico: <a href="mailto:soporte@tryhardware.com">soporte@tryhardware.com</a>
                            </li>
                            <li>Teléfono: +34 123 456 789</li>
                        </ul>

                        <p class="mt-4 text-center">Al utilizar TryHardWare, usted confirma haber leído, entendido y
                            aceptado estos Términos de Servicio en su totalidad.</p>
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