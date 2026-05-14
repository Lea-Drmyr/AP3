<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//--------- HEADER -------------
$routes->get('/', 'HomeControllers::index');
$routes->get('/Home', 'HomeControllers::Index');
$routes->get('/Patterns', 'HomeControllers::Patterns');
$routes->get('/Realisation', 'HomeControllers::Realisation');
$routes->get('/Adhesion', 'HomeControllers::Adhesion');
$routes->get('/Contact', 'HomeControllers::Contact');
$routes->get('/Profil', 'Adherent::Profil');

$routes->get('/modifierAdherent/(:num)', 'Adherent::modifier/$1');
$routes->post('/update', 'Adherent::update');


//------------------LOGIN------------------------------------
$routes->get('/login', 'Auth::index');
$routes->post('/loginpost', 'Auth::loginpost');
$routes->post('/ajoutAdherent', 'Auth::ajoutAdherent');
$routes->get('login/register', 'Auth::creerAdherent');
$routes->get('/unauthorized', function() {
    return view('errors/unauthorized');
});
$routes->get('/logout', 'Auth::logout');

//------------------ABONNEMENT------------------------------------
$routes->group('abonnement', ['filter' => 'login:Admin'], function($routes) { 

$routes->get('/', 'Abonnement::index');

$routes->get('createabo', 'Abonnement::creer');
$routes->post('ajout', 'Abonnement::ajout');

$routes->get('modifierabo/(:num)', 'Abonnement::modifier/$1');
$routes->post('update', 'Abonnement::update');

$routes->get('supprimerabo/(:num)', 'Abonnement::supprimer/$1');
$routes->post('delete', 'Abonnement::delete'); 
});
//------------------ADHERENT-------------------------------------
$routes->group('adherents', ['filter' => 'login:Admin'], function($routes) { 
    
$routes->get('/', 'Adherent::index');

$routes->get('createAdherent', 'Adherent::creerAdherent');
$routes->post('ajoutAdherent', 'Adherent::ajoutAdherent');

$routes->get('modifierAdherent/(:num)', 'Adherent::modifierAdherent/$1');
$routes->post('update', 'Adherent::update');

$routes->post('delete', 'Adherent::delete');
});

$routes->group('dashboard', ['filter' => 'login:Admin'], function($routes) {
    $routes->get('/', 'DashboardController::index');
});

//-----------------------API------------------------------------------
$routes->post('login/login', 'AuthAPI::login');

$routes->group('api', ['filter' => 'jwt'], function ($routes) {
$routes->resource('AdherentController');
});

