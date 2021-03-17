<?php

require_once __DIR__ . '../config/bootstrap.php';

/* EXEMPLOS USE
    use src\classes\Layout;
    use src\classes\Routes;
    use src\classes\Uri;
*/

/* EXEMPLOS ROUTES
    $routes = [
        '/'            => 'controllers/index',
        '/user_create' => 'controllers/user_create',
        '/user_edit'   => 'controllers/user_edit',
        '/user_update' => 'controllers/user_update',
        '/user_store'  => 'controllers/user_store'
    ];

    $uri    = Uri::load();

    $layout = new Layout;

    require Routes::load($routes, $uri);

    require $layout->master('layout');
*/