<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('dashboard', ['namespace' => 'App\Controllers\Dashboard'], function($routes){

    $routes->get('inicio','Inicio::index'); //Ruta predeterminada de inicio
    // Ruta para ver la lista de artículos
    $routes->get('libreria', 'libreria::index');

    // Ruta para ver el formulario de creación de un nuevo artículo
    $routes->get('libreria/crear', 'libreria::new');

    // Ruta para guardar el nuevo artículo (después de enviar el formulario)
    $routes->post('libreria/guardar', 'libreria::create');

    // Ruta para ver el detalle de un artículo específico (por ID)
    $routes->get('libreria/ver/(:num)', 'libreria::show/$1');

    // Ruta para ver el formulario de edición de un artículo
    $routes->get('libreria/editar/(:num)', 'libreria::edit/$1');

    // Ruta para actualizar el artículo
    $routes->post('libreria/actualizar/(:num)', 'libreria::update/$1');

    // Ruta para eliminar un artículo
    $routes->post('libreria/eliminar/(:num)', 'libreria::delete/$1');
    
    $routes->get('usuario/crear','usuario::crear_usuario');

    $routes->get('usuario/login','\App\Controllers\Dashboard\usuario::login', ['as'=> 'usuario.login']);
    $routes->post('usuario/login_post','\App\Controllers\Dashboard\usuario::login_post', ['as'=> 'usuario.login_post']);

    $routes->get('usuario/register','\App\Controllers\Dashboard\usuario::register', ['as'=> 'usuario.register']);
    $routes->post('usuario/register_post','\App\Controllers\Dashboard\usuario::register_post', ['as'=> 'usuario.register_post']);

    $routes->get('acerca-de','Acercade::index');
    $routes->get('contacto','contacto::index');
    

});