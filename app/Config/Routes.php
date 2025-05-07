<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('faq', 'Faq::index');
$routes->get('about', 'About::index');
$routes->get('contact', 'Contact::index');
$routes->get('terms', 'Terms::index');
$routes->get('privacy', 'Privacy::index');
$routes->get('returns', 'Returns::index');
$routes->get('products', 'Products::index');
$routes->get('cart', 'Cart::index');
$routes->get('login', 'Login::index');
$routes->get('register', 'Register::index');
$routes->get('user', 'User::index');
$routes->get('navbar', 'Navbar::index');
$routes->get('footer', 'Footer::index');
// Agrega aquí más rutas según tus páginas