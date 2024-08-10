<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/sign_up', 'Home::SignUp');
$routes->post('/register_user', 'AuthController::RegisterUser');
$routes->post('/login_user', 'AuthController::login_user');
$routes->get('/user_dashboard', 'UserController::user_dashboard');
$routes->get('/users/active_users', 'UserController::active_users');

$routes->post('post/create_post', 'PostController::create_post');
$routes->get('posts', 'PostController::view_posts');

