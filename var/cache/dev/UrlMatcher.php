<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backoffice/region' => [[['_route' => 'region_index', '_controller' => 'App\\Controller\\BackofficeRegionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backoffice/region/new' => [[['_route' => 'region_new', '_controller' => 'App\\Controller\\BackofficeRegionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/owner' => [[['_route' => 'owner_index', '_controller' => 'App\\Controller\\OwnerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/owner/new' => [[['_route' => 'owner_new', '_controller' => 'App\\Controller\\OwnerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_owner/room' => [[['_route' => 'room_index', '_controller' => 'App\\Controller\\OwnerRoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/_owner/room/new' => [[['_route' => 'room_new', '_controller' => 'App\\Controller\\OwnerRoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register_client' => [[['_route' => 'app_register_client', '_controller' => 'App\\Controller\\RegistrationController::register_client'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/roomsregion' => [[['_route' => 'liste_region', '_controller' => 'App\\Controller\\RoomsParRegion::index'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/unavailable/period' => [[['_route' => 'unavailable_period_index', '_controller' => 'App\\Controller\\UnavailablePeriodController::index'], null, ['GET' => 0], null, true, false, null]],
        '/unavailable/period/new' => [[['_route' => 'unavailable_period_new', '_controller' => 'App\\Controller\\UnavailablePeriodController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/backoffice/region/([^/]++)(?'
                    .'|(*:37)'
                    .'|/edit(*:49)'
                    .'|(*:56)'
                .')'
                .'|/c(?'
                    .'|lient/(?'
                        .'|([^/]++)(?'
                            .'|(*:89)'
                            .'|/(?'
                                .'|edit(*:104)'
                                .'|reservation/list(*:128)'
                            .')'
                            .'|(*:137)'
                        .')'
                        .'|clientprofile/([^/]++)(*:168)'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:195)'
                        .'|/edit(*:208)'
                        .'|(*:216)'
                    .')'
                .')'
                .'|/owner/(?'
                    .'|([^/]++)(?'
                        .'|(*:247)'
                        .'|/(?'
                            .'|edit(*:263)'
                            .'|room/list(*:280)'
                        .')'
                        .'|(*:289)'
                    .')'
                    .'|ownerprofile/([^/]++)(*:319)'
                .')'
                .'|/_owner/room/([^/]++)(?'
                    .'|(*:352)'
                    .'|/edit(*:365)'
                    .'|(*:373)'
                .')'
                .'|/r(?'
                    .'|eservation/(?'
                        .'|new/(\\d+)(*:410)'
                        .'|([^/]++)(?'
                            .'|(*:429)'
                            .'|/edit(*:442)'
                            .'|(*:450)'
                        .')'
                    .')'
                    .'|oomsregion/([^/]++)(*:479)'
                .')'
                .'|/u(?'
                    .'|navailable/period/([^/]++)(?'
                        .'|(*:522)'
                        .'|/edit(*:535)'
                        .'|(*:543)'
                    .')'
                    .'|ser/([^/]++)(?'
                        .'|(*:567)'
                        .'|/edit(*:580)'
                        .'|(*:588)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'region_show', '_controller' => 'App\\Controller\\BackofficeRegionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        49 => [[['_route' => 'region_edit', '_controller' => 'App\\Controller\\BackofficeRegionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'region_delete', '_controller' => 'App\\Controller\\BackofficeRegionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        89 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        104 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        128 => [[['_route' => 'reservation_list', '_controller' => 'App\\Controller\\ClientController::ClientReservationsList'], ['id'], ['GET' => 0], null, false, false, null]],
        137 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        168 => [[['_route' => 'client_profile', '_controller' => 'App\\Controller\\ClientController::ClientProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        195 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        247 => [[['_route' => 'owner_show', '_controller' => 'App\\Controller\\OwnerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'owner_edit', '_controller' => 'App\\Controller\\OwnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        280 => [[['_route' => 'room_list', '_controller' => 'App\\Controller\\OwnerController::OwnerRoomsList'], ['id'], ['GET' => 0], null, false, false, null]],
        289 => [[['_route' => 'owner_delete', '_controller' => 'App\\Controller\\OwnerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        319 => [[['_route' => 'owner_profile', '_controller' => 'App\\Controller\\OwnerController::OwnerProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\OwnerRoomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        365 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\OwnerRoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        373 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\OwnerRoomController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        410 => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        429 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        442 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        450 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        479 => [[['_route' => 'rooms_par_region', '_controller' => 'App\\Controller\\RoomsParRegion::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'unavailable_period_show', '_controller' => 'App\\Controller\\UnavailablePeriodController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        535 => [[['_route' => 'unavailable_period_edit', '_controller' => 'App\\Controller\\UnavailablePeriodController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'unavailable_period_delete', '_controller' => 'App\\Controller\\UnavailablePeriodController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        567 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        580 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        588 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
