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
        '/api/faqs' => [[['_route' => 'api_faqs', '_controller' => 'App\\Controller\\FAQController::getFaqs'], null, ['GET' => 0], null, false, false, null]],
        '/api/feedbacks' => [[['_route' => 'api_feedbacks', '_controller' => 'App\\Controller\\FeedbackController::getFeedbacks'], null, ['GET' => 0], null, false, false, null]],
        '/api/notes' => [[['_route' => 'api_notes', '_controller' => 'App\\Controller\\NoteController::getNotes'], null, ['GET' => 0], null, false, false, null]],
        '/api/races' => [[['_route' => 'api_races', '_controller' => 'App\\Controller\\RaceController::getRaces'], null, ['GET' => 0], null, false, false, null]],
        '/api/skills' => [[['_route' => 'api_skills', '_controller' => 'App\\Controller\\SkillController::getSkills'], null, ['GET' => 0], null, false, false, null]],
        '/api/spells' => [[['_route' => 'api_spells', '_controller' => 'App\\Controller\\SpellController::getSpells'], null, ['GET' => 0], null, false, false, null]],
        '/api/transformations' => [[['_route' => 'api_transformations', '_controller' => 'App\\Controller\\TransformationController::getTransformations'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'api_users', '_controller' => 'App\\Controller\\UserController::getUsers'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|backgrounds/([^/]++)(*:70)'
                    .'|c(?'
                        .'|ampaigns/([^/]++)(*:98)'
                        .'|lasses/([^/]++)(*:120)'
                        .'|haracters/([^/]++)(*:146)'
                    .')'
                    .'|f(?'
                        .'|aqs/([^/]++)(*:171)'
                        .'|eedbacks/([^/]++)(*:196)'
                    .')'
                    .'|notes/([^/]++)(*:219)'
                    .'|races/([^/]++)(*:241)'
                    .'|s(?'
                        .'|kills/([^/]++)(*:267)'
                        .'|pells/([^/]++)(*:289)'
                    .')'
                    .'|transformations/([^/]++)(*:322)'
                    .'|users/([^/]++)(?'
                        .'|(*:347)'
                        .'|/(?'
                            .'|characters(*:369)'
                            .'|activeCharacter(*:392)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'api_background', '_controller' => 'App\\Controller\\BackgroundController::getOneBackground'], ['backgroundId'], ['GET' => 0], null, false, true, null]],
        98 => [[['_route' => 'api_campaign', '_controller' => 'App\\Controller\\CampaignController::getOneCampaing'], ['campaignId'], ['GET' => 0], null, false, true, null]],
        120 => [[['_route' => 'api_character_class', '_controller' => 'App\\Controller\\CharacterClassController::getOneCharacter'], ['classId'], ['GET' => 0], null, false, true, null]],
        146 => [[['_route' => 'api_character', '_controller' => 'App\\Controller\\CharacterController::getOneCharacter'], ['characterId'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'api_faq', '_controller' => 'App\\Controller\\FAQController::getOneFaq'], ['faqId'], ['GET' => 0], null, false, true, null]],
        196 => [[['_route' => 'api_feedback', '_controller' => 'App\\Controller\\FeedbackController::getOneFeedback'], ['feedbackId'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'api_note', '_controller' => 'App\\Controller\\NoteController::getOneNote'], ['noteId'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'api_race', '_controller' => 'App\\Controller\\RaceController::getOneCharacter'], ['raceId'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'api_skill', '_controller' => 'App\\Controller\\SkillController::getOneSkill'], ['skillId'], ['GET' => 0], null, false, true, null]],
        289 => [[['_route' => 'api_spell', '_controller' => 'App\\Controller\\SpellController::getOneSpell'], ['spellId'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'api_transformation', '_controller' => 'App\\Controller\\TransformationController::getOneTransformation'], ['transformationId'], ['GET' => 0], null, false, true, null]],
        347 => [[['_route' => 'api_user', '_controller' => 'App\\Controller\\UserController::getOneUser'], ['userId'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'api_user_characters', '_controller' => 'App\\Controller\\UserController::getCharactersOfOneUser'], ['userId'], ['GET' => 0], null, false, false, null]],
        392 => [
            [['_route' => 'api_user_active_character', '_controller' => 'App\\Controller\\UserController::getActiveCharacterOfOneUser'], ['userId'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
