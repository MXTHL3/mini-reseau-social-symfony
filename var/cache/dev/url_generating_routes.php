<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_main_interface' => [[], ['_controller' => 'App\\Controller\\MainInterfaceController::mainPage'], [], [['text', '/']], [], [], []],
    'app_post_interface_action' => [[], ['_controller' => 'App\\Controller\\MainInterfaceController::postAction'], [], [['text', '/post_action']], [], [], []],
    'app_delete_action' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::deleteAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_action']], [], [], []],
    'app_check_like_or_unlike' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::checkLikeOrUnlike'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/check_like_or_unlike']], [], [], []],
    'app_like_action' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::likeAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like_action']], [], [], []],
    'app_unlike_action' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::unlikeAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/unlike_action']], [], [], []],
    'app_profile_page' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::profilePage'], [], [['variable', '=', '[^/]++', 'id', true], ['text', '/profile']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\MainInterfaceController::mainPage' => [[], ['_controller' => 'App\\Controller\\MainInterfaceController::mainPage'], [], [['text', '/']], [], [], []],
    'App\Controller\MainInterfaceController::postAction' => [[], ['_controller' => 'App\\Controller\\MainInterfaceController::postAction'], [], [['text', '/post_action']], [], [], []],
    'App\Controller\MainInterfaceController::deleteAction' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::deleteAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_action']], [], [], []],
    'App\Controller\MainInterfaceController::checkLikeOrUnlike' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::checkLikeOrUnlike'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/check_like_or_unlike']], [], [], []],
    'App\Controller\MainInterfaceController::likeAction' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::likeAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/like_action']], [], [], []],
    'App\Controller\MainInterfaceController::unlikeAction' => [['id'], ['_controller' => 'App\\Controller\\MainInterfaceController::unlikeAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/unlike_action']], [], [], []],
    'App\Controller\ProfileController::profilePage' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::profilePage'], [], [['variable', '=', '[^/]++', 'id', true], ['text', '/profile']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
