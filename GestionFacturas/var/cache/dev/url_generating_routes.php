<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_cliente_index' => [[], ['_controller' => 'App\\Controller\\ClienteController::index'], [], [['text', '/cliente/']], [], [], []],
    'app_cliente_new' => [[], ['_controller' => 'App\\Controller\\ClienteController::new'], [], [['text', '/cliente/new']], [], [], []],
    'app_cliente_show' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], [], []],
    'app_cliente_edit' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], [], []],
    'app_cliente_delete' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], [], []],
    'app_detalle_index' => [[], ['_controller' => 'App\\Controller\\DetalleController::index'], [], [['text', '/detalle/']], [], [], []],
    'app_detalle_new' => [[], ['_controller' => 'App\\Controller\\DetalleController::new'], [], [['text', '/detalle/new']], [], [], []],
    'app_detalle_show' => [['id'], ['_controller' => 'App\\Controller\\DetalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detalle']], [], [], []],
    'app_detalle_edit' => [['id'], ['_controller' => 'App\\Controller\\DetalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/detalle']], [], [], []],
    'app_detalle_delete' => [['id'], ['_controller' => 'App\\Controller\\DetalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detalle']], [], [], []],
    'app_empresa' => [[], ['_controller' => 'App\\Controller\\EmpresaController::index'], [], [['text', '/empresa']], [], [], []],
    'app_pedido_index' => [[], ['_controller' => 'App\\Controller\\PedidoController::index'], [], [['text', '/pedido/']], [], [], []],
    'app_pedido_facturas' => [[], ['_controller' => 'App\\Controller\\PedidoController::facturas'], [], [['text', '/pedido/facturas']], [], [], []],
    'app_pedido_new' => [[], ['_controller' => 'App\\Controller\\PedidoController::new'], [], [['text', '/pedido/new']], [], [], []],
    'app_pedido_show' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], [], []],
    'app_pedido_edit' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], [], []],
    'app_pedido_delete' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], [], []],
    'app_producto_index' => [[], ['_controller' => 'App\\Controller\\ProductoController::index'], [], [['text', '/producto/']], [], [], []],
    'app_producto_new' => [[], ['_controller' => 'App\\Controller\\ProductoController::new'], [], [['text', '/producto/new']], [], [], []],
    'app_producto_show' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_producto_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_producto_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
