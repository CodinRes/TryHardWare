<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Política de Devoluciones - TryHardWare</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="shortcut icon" href="<?= base_url('img/logo-favicon.png') ?>" type="image/x-icon" />
  </head>

  <body class="d-flex flex-column min-vh-100">
    <header>
      <?= view('navbar') ?>
    </header>
    <main class="flex-grow-1">
      <div class="container py-5">
        <h1 class="mb-4 text-center">Política de Devoluciones</h1>

        <!-- Sección de introducción -->
        <section class="mb-5">
          <h2 class="h4">Información General</h2>
          <p>
            En TryHardWare nos esforzamos por ofrecer productos de alta calidad
            y el mejor servicio a nuestros clientes. Si por algún motivo deseas
            devolver o cambiar alguno de nuestros productos, revisa las
            condiciones y pasos a seguir en esta sección.
          </p>
        </section>

        <!-- Sección de condiciones -->
        <section class="mb-5">
          <h2 class="h4">Condiciones para la Devolución</h2>
          <ul>
            <li>
              El producto debe estar en las mismas condiciones en que fue
              recibido y sin signos de uso excesivo.
            </li>
            <li>
              La devolución o cambio debe solicitarse dentro de los 30 días
              naturales posteriores a la compra.
            </li>
            <li>
              Debe adjuntarse la factura o comprobante de compra original.
            </li>
            <li>
              No se aceptarán devoluciones en productos personalizados o
              aquellos que presenten daños por mal uso.
            </li>
          </ul>
        </section>

        <section class="mb-5">
          <h2 class="h4">Procedimiento</h2>
          <ol>
            <li>
              Contacta a nuestro servicio de atención al cliente mediante el
              correo <strong>soporte@tryhardware.com</strong> o llamando al
              <strong>+34 123 456 789</strong>.
            </li>
            <li>
              Proporciona los datos de la compra y una breve descripción del
              motivo de devolución o cambio.
            </li>
            <li>
              Recibirás instrucciones detalladas para realizar el envío del
              producto a nuestras instalaciones.
            </li>
            <li>
              Una vez verificado el estado del producto, se gestionará el
              reembolso correspondiente o el cambio por otro artículo.
            </li>
          </ol>
        </section>

        <section>
          <h2 class="h4">Nota Adicional</h2>
          <p>
            Todos los casos serán analizados de manera individual y, en función
            de la situación, se ofrecerá la solución más adecuada. Si tienes
            dudas, no dudes en ponerte en contacto con nuestro equipo.
          </p>
        </section>
      </div>
    </main>
    <div>
      <?= view('footer') ?>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  </body>
</html>
