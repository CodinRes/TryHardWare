<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Política de Privacidad - TryHardWare</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
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
              <h1 class="card-title mb-4 text-center">
                Política de Privacidad
              </h1>
              <p>
                En <strong>TryHardWare</strong> nos comprometemos a proteger y
                respetar su privacidad. Esta política explica cómo recopilamos,
                usamos y protegemos su información personal al visitar y
                utilizar nuestro sitio web.
              </p>

              <h4 class="mt-4">1. Información que Recopilamos</h4>
              <ul>
                <li>
                  <strong>Datos personales:</strong> Nombre, correo electrónico,
                  dirección física, número de teléfono y otros datos necesarios
                  para compras y atención al cliente.
                </li>
                <li>
                  <strong>Datos de navegación:</strong> Información sobre el uso
                  del sitio, cookies, dirección IP, tipo de navegador, páginas
                  visitadas y tiempo de permanencia.
                </li>
              </ul>

              <h4 class="mt-4">2. Uso de la Información</h4>
              <ul>
                <li>Procesar y gestionar sus pedidos y solicitudes.</li>
                <li>Mejorar nuestro sitio web y los servicios ofrecidos.</li>
                <li>
                  Realizar análisis internos para optimizar la experiencia del
                  usuario.
                </li>
                <li>
                  Enviar comunicaciones sobre pedidos, promociones y novedades,
                  siempre que usted lo autorice.
                </li>
              </ul>

              <h4 class="mt-4">3. Cookies y Tecnologías Similares</h4>
              <p>
                Utilizamos cookies y tecnologías similares para mejorar su
                experiencia, recordar preferencias y analizar el tráfico. Puede
                configurar su navegador para rechazar cookies, aunque algunas
                funciones podrían verse afectadas.
              </p>

              <h4 class="mt-4">4. Compartir y Divulgar la Información</h4>
              <ul>
                <li>
                  No vendemos ni transferimos su información personal a terceros
                  sin su consentimiento, salvo para procesar pedidos (por
                  ejemplo, empresas de envío) o por obligaciones legales.
                </li>
                <li>
                  Podemos divulgar datos anónimos para fines estadísticos o de
                  análisis.
                </li>
              </ul>

              <h4 class="mt-4">5. Seguridad de la Información</h4>
              <p>
                Aplicamos medidas técnicas y organizativas para proteger su
                información contra pérdida, uso indebido, acceso no autorizado,
                divulgación o alteración. Sin embargo, ningún sistema es
                completamente infalible.
              </p>

              <h4 class="mt-4">6. Derechos del Usuario</h4>
              <ul>
                <li>Acceder a su información personal.</li>
                <li>Rectificar datos incorrectos o incompletos.</li>
                <li>
                  Solicitar la eliminación de sus datos, salvo obligación legal
                  de conservación.
                </li>
                <li>
                  Oponerse o solicitar la limitación del tratamiento de sus
                  datos.
                </li>
              </ul>
              <p>
                Para ejercer estos derechos o realizar consultas sobre
                privacidad, contáctenos a través de los medios indicados en la
                sección de contacto.
              </p>

              <h4 class="mt-4">7. Cambios en la Política de Privacidad</h4>
              <p>
                Podemos actualizar esta política periódicamente. Los cambios se
                publicarán en esta página y, si son significativos, se
                notificará de forma apropiada.
              </p>

              <h4 class="mt-4">8. Contacto</h4>
              <p>
                Para cualquier consulta relacionada con esta política, puede
                contactarnos:
              </p>
              <ul>
                <li>
                  Correo electrónico:
                  <a href="mailto:soporte@tryhardware.com"
                    >soporte@tryhardware.com</a
                  >
                </li>
                <li>Teléfono: +34 123 456 789</li>
              </ul>

              <p class="mt-4 text-center">
                Al utilizar nuestro sitio web, usted acepta los términos de esta
                Política de Privacidad.
              </p>
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
