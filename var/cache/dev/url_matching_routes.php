<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/candidat' => [[['_route' => 'app_candidat_index', '_controller' => 'App\\Controller\\CandidatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidat/new' => [[['_route' => 'app_candidat_new', '_controller' => 'App\\Controller\\CandidatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\HomeController::dashboard'], null, null, null, false, false, null]],
        '/offre' => [[['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre/exportPDF' => [[['_route' => 'exportPDF', '_controller' => 'App\\Controller\\OffreController::Print'], null, null, null, false, false, null]],
        '/offre/lista' => [[['_route' => 'app_offre_lista', '_controller' => 'App\\Controller\\OffreController::getOffres'], null, null, null, false, false, null]],
        '/offre/addd' => [[['_route' => 'app_offre_addd_offre', '_controller' => 'App\\Controller\\OffreController::adddoffre'], null, null, null, false, false, null]],
        '/offre/viewOffres' => [[['_route' => 'app_offre_index_front', '_controller' => 'App\\Controller\\OffreController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/offre/newOffre' => [[['_route' => 'app_offre_new_front', '_controller' => 'App\\Controller\\OffreController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre/new' => [[['_route' => 'app_offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/candidat/([^/]++)(?'
                    .'|(*:28)'
                    .'|/edit(*:40)'
                    .'|(*:47)'
                .')'
                .'|/offre/(?'
                    .'|([^/]++)(*:73)'
                    .'|viewOffre/([^/]++)(*:98)'
                    .'|([^/]++)(?'
                        .'|/edit(*:121)'
                        .'|(*:129)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:170)'
                    .'|wdt/([^/]++)(*:190)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:236)'
                            .'|router(*:250)'
                            .'|exception(?'
                                .'|(*:270)'
                                .'|\\.css(*:283)'
                            .')'
                        .')'
                        .'|(*:293)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_candidat_show', '_controller' => 'App\\Controller\\CandidatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_candidat_edit', '_controller' => 'App\\Controller\\CandidatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_candidat_delete', '_controller' => 'App\\Controller\\CandidatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        73 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        98 => [[['_route' => 'app_offre_show_front', '_controller' => 'App\\Controller\\OffreController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        121 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        129 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        170 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        190 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        236 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        250 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        270 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        283 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        293 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
