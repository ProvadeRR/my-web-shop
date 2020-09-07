<?php

return [

    '/^$/' => [
        'controller' => 'MainController',
        'action' => 'index',
    ],
    '/^categories$/' => [
        'controller' => 'MainController',
        'action' => 'categories',
    ],
    '/^item\/.*$/' => [
        'controller' => 'MainController',
        'action' => 'OneItem',
    ],
    '/^search.*$/' => [
        'controller' => 'MainController',
        'action' => 'search',
    ],
    '/^buyProduct$/' => [
        'controller' => 'MainController',
        'action' => 'buyProduct',
    ],
    '/^accessBuy/' => [
        'controller' => 'MainController',
        'action' => 'goBuy',
    ],
    '/^category\/(?P<category>[a-z]+)$/' => [
        'controller' => 'MainController',
        'action' => 'OneCategory',
    ],
    /*API_CONTROLLER*/
    '/^api\/main$/' => [
    'controller' => 'RestApiController',
    'action' => 'main_page',
    ],
    '/^api\/categories$/' => [
        'controller' => 'RestApiController',
        'action' => 'listCategory',
    ],


];