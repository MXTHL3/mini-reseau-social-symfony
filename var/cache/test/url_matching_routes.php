<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/portal' => [[['_route' => 'app_login_sign_up', '_controller' => 'App\\Controller\\LoginSignUpController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\LoginSignUpController::register'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginSignUpController::login'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginSignUpController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main_interface', '_controller' => 'App\\Controller\\MainInterfaceController::mainPage'], null, null, null, false, false, null]],
        '/post_action' => [[['_route' => 'app_post_interface_action', '_controller' => 'App\\Controller\\MainInterfaceController::postAction'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete_action/([^/]++)(*:30)'
                .'|/check_like_or_unlike/([^/]++)(*:67)'
                .'|/like_action/([^/]++)(*:95)'
                .'|/unlike_action/([^/]++)(*:125)'
                .'|/profile\\=([^/]++)(*:151)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_delete_action', '_controller' => 'App\\Controller\\MainInterfaceController::deleteAction'], ['id'], ['POST' => 0], null, false, true, null]],
        67 => [[['_route' => 'app_check_like_or_unlike', '_controller' => 'App\\Controller\\MainInterfaceController::checkLikeOrUnlike'], ['id'], ['POST' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_like_action', '_controller' => 'App\\Controller\\MainInterfaceController::likeAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        125 => [[['_route' => 'app_unlike_action', '_controller' => 'App\\Controller\\MainInterfaceController::unlikeAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        151 => [
            [['_route' => 'app_profile_page', '_controller' => 'App\\Controller\\ProfileController::profilePage'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
