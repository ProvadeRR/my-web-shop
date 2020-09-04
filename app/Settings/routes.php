<?php

return [
  '/^$/' => [
      'controller' => 'MainController',
      'action' => 'index',
  ],
    '/^api\/users$/' => [
        'controller' => 'ApiController',
        'action' => 'getUserApi',
    ],
    '/^categories$/' => [
        'controller' => 'ItemController',
        'action' => 'listCategory',
    ],
    '/^category\/(?P<category>[a-zA-Z]+.*)$/' => [
        'controller' => 'ItemController',
        'action' => 'ItemsInCategory',
    ],

];