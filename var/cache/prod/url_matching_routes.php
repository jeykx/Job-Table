<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'job_index', '_controller' => 'App\\Controller\\JobController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'job_new', '_controller' => 'App\\Controller\\JobController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)(?'
                    .'|(*:19)'
                    .'|/edit(*:31)'
                    .'|(*:38)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        19 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        31 => [[['_route' => 'job_edit', '_controller' => 'App\\Controller\\JobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        38 => [
            [['_route' => 'job_delete', '_controller' => 'App\\Controller\\JobController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
