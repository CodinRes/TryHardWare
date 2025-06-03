# TryHardWare

Tienda online de hardware y tecnología, desarrollada con [CodeIgniter 4](https://codeigniter.com/). Ofrecemos una amplia variedad de productos tecnológicos, información clara para el usuario y una experiencia de compra sencilla y segura.

## Características

- Catálogo de productos de hardware (PC, laptops, monitores, componentes, etc.)
- Secciones informativas: Sobre nosotros, Términos de uso, Política de privacidad, Preguntas frecuentes, Política de devoluciones.
- Carrito de compras y gestión de usuario.
- Diseño responsivo con Bootstrap.
- Navegación modular (navbar y footer reutilizables).
- Código organizado siguiendo la estructura recomendada por CodeIgniter 4.

## Estructura del Proyecto

```
.
├── app/
├── assets/
├── public/
├── system/
├── tests/
├── writable/
├── *.html
├── .env
├── composer.json
└── README.md
```

## Instalación

1. Extraer en la carpeta htdocs de XAMPP

2. Modificar en la misma carpeta el archivo index.php para que en la linea `header('Location: '.$uri.'/[proyecto]/[pagina]');` tenga la localizacion de la carpeta public

## Créditos

Desarrollado por Zini.

## Licencia

Distribuido bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más información.
