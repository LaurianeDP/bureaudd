<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/backgrounds' => [[['_route' => 'api_backgrounds', '_controller' => 'App\\Controller\\BackgroundController::getBackgrounds'], null, ['GET' => 0], null, false, false, null]],
        '/api/campaigns' => [[['_route' => 'api_campaigns', '_controller' => 'App\\Controller\\CampaignController::getCampaigns'], null, ['GET' => 0], null, false, false, null]],
        '/api/classes' => [[['_route' => 'api_classes', '_controller' => 'App\\Controller\\CharacterClassController::getBackgrounds'], null, ['GET' => 0], null, false, false, null]],
        '/api/characters' => [[['_route' => 'api_characters', '_controller' => 'App\\Controller\\CharacterController::getCharacters'], null, ['GET' => 0], null, false, false, null]],
        '/f/a/q' => [[['_route' => 'app_f_a_q', '_controller' => 'App\\Controller\\FAQController::index'], null, null, null, false, false, null]],
        '/feedback' => [[['_route' => 'app_feedback', '_controller' => 'App\\Controller\\FeedbackController::index'], null, null, null, false, false, null]],
        '/note' => [[['_route' => 'app_note', '_controller' => 'App\\Controller\\NoteController::index'], null, null, null, false, false, null]],
        '/api/races' => [[['_route' => 'api_races', '_controller' => 'App\\Controller\\RaceController::getRaces'], null, ['GET' => 0], null, false, false, null]],
        '/skill' => [[['_route' => 'app_skill', '_controller' => 'App\\Controller\\SkillController::index'], null, null, null, false, false, null]],
        '/spell' => [[['_route' => 'app_spell', '_controller' => 'App\\Controller\\SpellController::index'], null, null, null, false, false, null]],
        '/api/transformations' => [[['_route' => 'api_transformations', '_controller' => 'App\\Controller\\TransformationController::getTransformations'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'api_users', '_controller' => 'App\\Controller\\UserController::getUsers'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|characters/([^/]++)(*:69)'
                    .'|users/([^/]++)(?'
                        .'|(*:93)'
                        .'|/characters(*:111)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [[['_route' => 'api_character', '_controller' => 'App\\Controller\\CharacterController::getOneCharacter'], ['characterId'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'api_user', '_controller' => 'App\\Controller\\UserController::getOneUser'], ['userId'], ['GET' => 0], null, false, true, null]],
        111 => [
            [['_route' => 'api_user_characters', '_controller' => 'App\\Controller\\UserController::getCharactersOfOneUser'], ['userId'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
